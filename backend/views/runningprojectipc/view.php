<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Runningprojectipc */

$this->title = $model->Project_Name;
$this->params['breadcrumbs'][] = ['label' => 'Runningprojectipcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runningprojectipc-view" style="width: 50%; padding-top: 70px; padding-left: 30px;">

   

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'ID',
            'Project_Id',
            'Project_Name',
            'Project_Ipc',
            'Images',
        ],
    ]) ?>

</div>
