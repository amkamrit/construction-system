<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BankguranteeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bankgurantee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Bank_Gurantee_id') ?>

    <?= $form->field($model, 'Bank_Name') ?>

    <?= $form->field($model, 'Project_Name') ?>

    <?= $form->field($model, 'Entry_Date') ?>

    <?= $form->field($model, 'Expire_Date') ?>

    <?php // echo $form->field($model, 'Gurantee_Image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
