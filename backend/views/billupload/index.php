<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BilluploadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bill Uploads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billupload-index">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bill Upload', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Bill_Id',
            'Bill_Number',
            'Bill_Name',
            'Bill_Amout',
            //'Bill_Image',
            'Bill_Date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
