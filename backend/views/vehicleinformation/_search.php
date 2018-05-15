<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VehicleinformationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicleinformation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Vechicle_id') ?>

    <?= $form->field($model, 'Vechicle_Number') ?>

    <?= $form->field($model, 'Renew_Date') ?>

    <?= $form->field($model, 'Expire_Date') ?>

    <?= $form->field($model, 'Working_Site') ?>

    <?php // echo $form->field($model, 'Images') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
