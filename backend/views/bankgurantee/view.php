<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use newerton\fancybox\widget;

/* @var $this yii\web\View */
/* @var $model backend\models\Bankgurantee */

$this->title = $model->Project_Name;
$this->params['breadcrumbs'][] = ['label' => 'Bankgurantees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bankgurantee-view" style="width: 50%; padding-top: 70px; padding-left: 10px;">



    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Bank_Gurantee_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Bank_Gurantee_id], [
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
            'Bank_Gurantee_id',
            'Bank_Name',
            'Project_Name',
            'Entry_Date',
            'Expire_Date',
            'Gurantee_Image',
        ],
    ]) ?>


</div>
