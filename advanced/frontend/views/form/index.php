<?php
/**
 * Created by PhpStorm.
 * User: ZIXIANG
 * Date: 2017/5/10
 * Time: 14:56
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
    'action'=>'?r=form/add',
    'method'=>'post',
]) ?>
<?= $form->field($model, 'username')->textInput()->hint('请输入您的姓名') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= $form->field($model, 'email')->input('email') ?>
<?php $model->sex = '0'; ?>
<?= $form->field($model, 'sex')->radioList([0=>'男',1=>'女']) ?>

<?= $form->field($model, 'age')->dropDownList([$age],['prompt'=>'请选择','style'=>'width:120px']) ?>
<?= $form->field($model, 'hobby')->checkboxList($data) ?>
<?= $form->field($model, 'intruction')->textarea(['row'=>4]) ?>



    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>