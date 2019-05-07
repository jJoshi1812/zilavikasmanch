<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Problems */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Problems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="problems-view">

    <div class="row">
              <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">
                    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title bg-success">

                    <h2><?= $model->title; ?></h2>
                    <h4><?= $model->department->name;  ?></h4>
                  </div>
                        <div class="ibox-content">
                      <small><?= $model->description; ?></small>

                       </div>
                
            <h5 class="text-navy" style="margin-top: 10px">No. of Solutions: <?= $sol ?> <span class="pull-right"><?= $model->date_added; ?></span></h5>
               <br>
            </div>

         </div>
       </div>
                    <div class="ibox">
                        <div class="ibox-title bg-success">
                            <h3><b>Solutions</b></h3>
                            <div class="ibox-tools">

                            </div>
                        </div>
                        <div class="ibox-content">


                            <div class="project-list">

                                        
                                        <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            //'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                                //'id',
                                'title',
                                'students.username', 
                                'status.name',
                                //'date_added',
                                //'user_id',

                                [
                                    'class' => 'yii\grid\ActionColumn',
                                    'header' => 'Actions',
                                                'template' => '{view}',
                                                'buttons' => [
                                                    'view' => function ($url, $model) {
                                                    return Html::a(' View', ['/solutions/view','id'=>$model->id], [
                                                    'title' => Yii::t('app', 'view'), 'class'=>'btn btn-primary btn-xs'
                                                    ]);
                                                    },
                                                ],

                                ],
                            ],
                        ]); ?>

                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    

</div>
