<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Billupload */

$this->title = 'Create Bill upload';
$this->params['breadcrumbs'][] = ['label' => 'Billuploads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billupload-create" style="width: 40%; margin-left: 300px; padding-top: 70px;">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
