<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

class HelloController extends Controller
{
    //防止重复提交
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        //加载页面
        return $this->renderPartial("index");
    }
  /**添加*/
    public function actionAdd()
    {
        //实例化请求
        $request = \Yii::$app->request;
        if($request->isPost){
            //接值
            $data = $request->post();
            //var_dump($data);die;
            $res = \Yii::$app->db->createCommand()->insert('yii',$data)->execute();
            if($res){
                $this->redirect(['hello/list']);
            }else{
                echo '添加失败';
            }
        }else{
            return $this->renderPartial('index.php');
        }
    }

    /**查询*/
    public function actionList()
    {
        $db = \Yii::$app->db;
        //执行
        $userInfo = $db->createCommand('select * from yii')->queryAll();

        //赋值
        return $this->render('list',['userInfo'=>$userInfo]);

    }

    /**删除*/
    public function actionDelete()
    {
        //请求方式
        $request = \Yii::$app->request;
        //接值
        $id = $request->get('id');
        //var_dump($id);die;
        $db = \Yii::$app->db;
        //执行
        $res = $db->createCommand()->delete('yii',"id='$id'")->execute();
       //echo $res;die;
        if($res){
            $this->redirect(['hello/list']);
        }else{
            echo "删除失败";
        }
    }

    /**修改*/
    public function actionUpdate()
    {
        //请求方式
        $request = \Yii::$app->request;

        if($request->isPost){
            //接值
            $name = $request->post('name');
            $tel = $request->post('tel');
            $id = $request->post('id');
//            $sql= "update yii set name='$name',tel='$tel' WHERE id='$id'";
//            $result = \Yii::$app->db->createCommand($sql)->execute();
            $result=\Yii::$app->db->createCommand()->update('yii',[
                'name'=>$name,
                'tel'=>$tel
            ],'id=:id',[':id'=>$id])->execute();

            //判断
            if($result){
                $this->redirect(['hello/list']);
            }else{
                echo'添加失败';
            }
        }else{
            //接值
            $id = $request->get('id');
            $sql = "select * from yii where id='$id'";

            $userInfo = \Yii::$app->db->createCommand($sql)->queryAll();

            //加载视图层
            return $this->renderPartial('update',['userInfo'=>$userInfo[0]]);
        }


    }
}
