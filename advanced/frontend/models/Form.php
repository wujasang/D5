<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/10
 * Time: 14:36
 */

namespace frontend\models;
use yii\base\Model;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

class Form extends Model
{
    public $username;
    public $password;
    public $email;
    public $sex;
    public $age;
    public $hobby;
    public $intruction;


    //return里面写验证
    public function rules(){
        return[
            //名字是邮箱格式输出
            ['username','email'],
            //username,password,email,age,hobby 特性是required (必填)
            [['username','password','email','age','hobby'],'required'],

            //email 特性必须是一个有效的email的地址
            ['email','email'],
        ];
    }
    //设置中文命名
    public function attributeLabels(){
        return[
            'username'=>'用户名',
            'password'=>'密码',
            'email'=>'邮箱',
            'sex'=>'性别',
            'age'=>'年龄',
            'hobby'=>'爱好',
            'intruction'=>'介绍'
        ];
    }

    //获取年龄
     public function getage($start,$end){
        $arr = array();
        for($i = $start;$i<=$end;$i++){
            $arr[$i] = $i;
        }
        return $arr;
    }

    //处理复选框
    public function arrtodata($data){
        $arr = array();
        foreach($data as $value){
            $arr[$value['id']] = $value['hobby'];
        }
        return $arr;
    }
}