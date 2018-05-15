<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bankgurantee */

$this->title = 'Create Bank Gurantee';
$this->params['breadcrumbs'][] = ['label' => 'Bankgurantees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bankgurantee-create" style="width: 70%; padding-left: 300px; padding-top: 70px;">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
