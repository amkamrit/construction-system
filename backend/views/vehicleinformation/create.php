<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Vehicleinformation */
$this->title = 'Create Vehicle Information';
$this->params['breadcrumbs'][] = ['label' => 'Vehicleinformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicleinformation-create" style="width: 70%; padding-left:300px; padding-top: 70px;">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
