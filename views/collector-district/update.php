<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CollectorDistrict */

$this->title = 'Update Collector District: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Collector Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="collector-district-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
