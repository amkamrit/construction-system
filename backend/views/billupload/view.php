<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Billupload */

$this->title = $model->Bill_Name;
$this->params['breadcrumbs'][] = ['label' => 'Billuploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billupload-view" style="width: 80%; padding-left: 300px; padding-top: 40px;">


    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Bill_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Bill_Id], [
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
            'Bill_Id',
            'Bill_Number',
            'Bill_Name',
            'Bill_Date',
            'Bill_Amout',
            'Bill_Image',
        ],
    ]) ?>

</div>
