<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BankguranteeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bank Gurantees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bankgurantee-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bank Gurantee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Bank_Gurantee_id',
            'Bank_Name',
            'Project_Name',
            'Entry_Date',
            'Expire_Date',
            // 'Gurantee_Image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
