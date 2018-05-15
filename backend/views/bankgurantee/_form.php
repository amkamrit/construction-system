<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bankgurantee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bankgurantee-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'Bank_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Project_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Entry_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expire_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
