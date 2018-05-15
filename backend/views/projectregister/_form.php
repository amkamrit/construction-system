<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Projectregister */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projectregister-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Project_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Start_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expire_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Project_Beget')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
