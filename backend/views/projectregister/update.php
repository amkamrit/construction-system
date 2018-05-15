<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Projectregister */

$this->title = 'Update Project Register: ' . $model->Project_Name;
$this->params['breadcrumbs'][] = ['label' => 'Projectregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Project_Id, 'url' => ['view', 'id' => $model->Project_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projectregister-update" style="width: 70%; padding-left: 300px; padding-top: 70px;">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
