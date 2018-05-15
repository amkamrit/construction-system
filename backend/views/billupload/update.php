<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Billupload */

$this->title = 'Update Billupload: ' . $model->Bill_Id;
$this->params['breadcrumbs'][] = ['label' => 'Billuploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bill_Id, 'url' => ['view', 'id' => $model->Bill_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="billupload-update" style="width: 70%; padding-left: 300px; padding-top: 70px;">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
