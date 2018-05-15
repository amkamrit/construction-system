<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProjectregisterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Project Registers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projectregister-index">

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Project Register', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Project_Name',
            'Start_Date',
            'Expire_Date',
            'Project_Beget',
            'Status',
            // 'Images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
