<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Vehicleinformation */

$this->title = 'Update Vehicleinformation: ' . $model->Vechicle_Number;
$this->params['breadcrumbs'][] = ['label' => 'Vehicleinformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Vechicle_id, 'url' => ['view', 'id' => $model->Vechicle_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehicleinformation-update" style="width: 70%; padding-top: 70px; padding-left: 300px;">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
