<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CollectorDistrict */

$this->title = 'Create Collector District';
$this->params['breadcrumbs'][] = ['label' => 'Collector Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="collector-district-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
