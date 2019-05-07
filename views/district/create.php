<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Districts */

$this->title = 'Create Districts';
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="districts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
