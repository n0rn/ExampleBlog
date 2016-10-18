<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.10.2016
 * Time: 10:17
 */

namespace app\models;

use yii\base\Model;



class SearchForm  extends Model

{

    public $q;
    
    public function rules(){

        return [
            ['q', 'string'],
        ];
    }
}