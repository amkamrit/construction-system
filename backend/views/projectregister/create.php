<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Projectregister */

$this->title = 'Create Project Register';
$this->params['breadcrumbs'][] = ['label' => 'Projectregisters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projectregister-create" style="width: 70% ; padding-left: 200px; padding-top: 70px;">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
