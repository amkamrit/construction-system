<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RunningprojectipcSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Running Project IPC';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runningprojectipc-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Running Project IPC', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Project_Id',
            'Project_Name',
            'Project_Ipc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
