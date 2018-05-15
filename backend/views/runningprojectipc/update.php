<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Runningprojectipc */

$this->title = 'Update Runningprojectipc: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Runningprojectipcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="runningprojectipc-update" style="width: 70%; padding-top: 70px; padding-left: 300px;">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
