<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Vehicleinformation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicleinformation-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?> 

    <?= $form->field($model, 'Vechicle_Number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Renew_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Expire_Date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Working_Site')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>
    <?= Html::a('Upload file', ['multiple'], ['class' => 'btn btn-primary']) ?>

    <?= $form->field($model,'Status')->textinput(['maxlenght'=>true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
