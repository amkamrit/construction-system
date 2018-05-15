<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bankgurantee */

$this->title = 'Update Bank Gurantee: ' . $model->Project_Name;
$this->params['breadcrumbs'][] = ['label' => 'Bankgurantees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Bank_Gurantee_id, 'url' => ['view', 'id' => $model->Bank_Gurantee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bankgurantee-update" style="width: 70%; padding-left: 200px; padding-top: 70px;">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
