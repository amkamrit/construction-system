<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Billupload */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billupload-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Bill_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bill_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bill_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bill_Amout')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
