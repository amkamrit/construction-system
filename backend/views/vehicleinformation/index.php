<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\VehicleinformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicle Informations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicleinformation-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add Vehicle Information', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Vechicle_id',
            //'Vechicle_Number',
            'Renew_Date',
            'Expire_Date',
            'Working_Site:ntext',
            'Status',
            // 'Images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
