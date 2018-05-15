<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\projectregister;

/* @var $this yii\web\View */
/* @var $model backend\models\Runningprojectipc */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="runningprojectipc-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Project_Id')->dropDownList(
    ArrayHelper::map(projectregister::find()->all(),'Project_Id','Project_Name'),
    ['prompt'=>'Select Project']
    ) ?>

    <?= $form->field($model, 'Project_Name')->dropDownList(
    ArrayHelper::map(projectregister::find()->all(),'Project_Name','Project_Name'),
    ['prompt'=>'Select Project'] 
    )?>

    <?= $form->field($model, 'Project_Ipc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput(); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
