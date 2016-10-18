<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\helpers\Html;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Posts;
use app\models\Courses;
use app\models\Reviews;
use app\models\Sites;
use app\models\Minicourses;
use app\models\Sef;
use app\models\SearchForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */


    public function beforeAction($action){

        $model = new SearchForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()){

          $q = Html::encode($model->q);
            return $this->redirect(Yii::$app->urlManager->createurl(['site/search', 'q' => $q]));
        }
        return  true;
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = Post::find()->where(['hide' => 0]);
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count()
        ]);

        $posts = $query->orderBy(['data' => SORT_DESC])
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();
        Posts::setNumbers($posts);

        return $this->render('index', [
            'posts' => $posts,
            'active_page' => Yii::$app->request->get("page", 1),
            'count_pages' => $pagination->getPageCount(),
            'pagination' => $pagination
        ]);
    }

    public function actionAbout(){

        return $this->render('about');
    }

    public function activeVideo(){

            $courses = Courses::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('video', [
            'courses' => $courses

        ]);

    }
    public function activeRev(){

        $reviews = Reviews::find()->orderBy('rand')->all();
        return $this->render('rev', [
            'reviews' => $reviews

        ]);

    }

    public function activeSites(){

        $sites = Sites::find()->orderBy(['id' => SORT_DESC])->all();
        return $this->render('sites', [
            'sites' => $sites

        ]);

    }

    public function actionPost() {
        $post = Posts::find()->where(['id' => Yii::$app->getRequest()->getQueryParam('id')])->one();
        Posts::setNumber([$post]);
        return $this->render('post', [
            'post' => $post
        ]);
    }

    public function actionSearch(){

        $q = Yii::$app->getRequest()->getQueryParam('q');
        $query = Post::find()->where(['hide' => 0])->where(['like', 'full_text', $q ]);
        $pagination = new Pagination([
           'defaultPageSize' => 5,
            'totalCount' => $query->counta()
        ]);
        $posts= $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        Posts::setNumbers($posts);

        return $this->render('search', [
            'posts' =>$posts,
            'q' => $q,
            'pagination' => $pagination
        ]);
    }

}
