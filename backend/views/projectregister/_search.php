<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProjectregisterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="projectregister-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Project_Id') ?>

    <?= $form->field($model, 'Project_Name') ?>

    <?= $form->field($model, 'Start_Date') ?>

    <?= $form->field($model, 'Expire_Date') ?>

    <?= $form->field($model, 'Project_Beget') ?>

    <?php // echo $form->field($model, 'Images') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
