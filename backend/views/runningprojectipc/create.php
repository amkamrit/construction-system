<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Runningprojectipc */

$this->title = 'Create Running Project IPC';
$this->params['breadcrumbs'][] = ['label' => 'Runningprojectipcs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="runningprojectipc-create" style="width: 70%; padding-left: 300px; padding-top: 70px;">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
