<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Projectregister */

$this->title = $model->Project_Name;
$this->params['breadcrumbs'][] = ['label' => 'Projectregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projectregister-view" style="width: 100%">
<div class="projectregister-view" style="padding-top: 70px; width: 50%; padding-left: 40px; float: left;">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Project_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Project_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p><br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Project_Id',
            'Project_Name',
            'Start_Date',
            'Expire_Date',
            'Project_Beget',
            'Status',
            'Images',
        ],
    ]) ?>

</div>
</div>
