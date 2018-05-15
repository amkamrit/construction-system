<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Vehicleinformation */

$this->title = $model->Vechicle_Number;
$this->params['breadcrumbs'][] = ['label' => 'Vehicleinformations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicleinformation-view" style="width: 50%; padding-left: 20px; padding-top: 70px;">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Vechicle_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Vechicle_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Vechicle_id',
            'Vechicle_Number',
            'Renew_Date',
            'Expire_Date',
            'Working_Site',
            'Images',
            'Status',
        ],
    ]) ?>

</div>
