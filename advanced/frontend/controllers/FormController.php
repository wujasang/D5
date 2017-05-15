<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/10
 * Time: 14:46
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Form;
use yii;
use db;

class FormController extends Controller
{
    public function actionIndex(){
        $model = new Form();
        $sql = "select * from lianxi";
        $dat = Yii::$app->db->createCommand($sql)->queryAll();

        $age = $model->getage(18,100);
        $data = $model->arrtodata($dat);
        return $this->render('index',['model'=>$model,'age'=>$age,'data'=>$data]);
    }

    public function actionAdd(){
        $data = Yii::$app->request->post();
        var_dump($data);
    }
}