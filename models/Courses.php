<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.10.2016
 * Time: 20:02
 */

namespace app\models;

use yii\db\ActiveRecord;

class Courses extends ActiveRecord
{

    public $img;
    public $order;

    public function afterFind(){
        $this->link = "http:/srs.testsite.com/". $this->alias;
        $this->img = "/web/images/courses/" . $this->alias . ".png";
        $this->order = "http://srs.testsite.com/order?product_ids=" . $this->srs_id;

    }


}