<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.10.2016
 * Time: 20:04
 */

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class Minicurses extends ActiveRecord
{


    public function afterFind() {
        $this->img = "/web/images/minicurses/". $this->img;

    }

}