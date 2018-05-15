<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BilluploadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="billupload-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Bill_Id') ?>

    <?= $form->field($model, 'Bill_Number') ?>

    <?= $form->field($model, 'Bill_Name') ?>

    <?= $form->field($model, 'Bill_Date') ?>

    <?= $form->field($model, 'Bill_Amout') ?>

    <?= $form->field($model, 'Bill_Image') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
