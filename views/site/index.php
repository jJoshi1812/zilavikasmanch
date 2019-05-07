<?php
use yii\grid\GridView;
use yii\helpers\Url;
$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="wrapper wrapper-content">
        <div class="row">
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title bg-info">
                                <a href="<?=Url::to(['/problems/index']);?>"><span class="btn btn-danger btn-xs pull-right">View</span></a>
                                <h5>Total Problems<h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= $problem['all']; ?> </h1>

                                <small>Total </small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title bg-warning">
                                <a href="<?=Url::to(['/problems/index','ProblemsSearch[status_id]'=>1]);?>"><span class="btn btn-primary btn-xs pull-right">View</span></a>
                                  <h5>Pending Problems</h5>
                            </div>
                            <div class="ibox-content">
                                  <h1 class="no-margins"><?= $problem['pending']; ?></h1>

                                <small>Not Assigned</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title bg-primary">
                                <a href="<?=Url::to(['/problems/index','ProblemsSearch[status_id]'=>2]);?>"><span class="btn btn-warning btn-xs pull-right">View</span></a>
                                <h5>Assigned Problems</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= $problem['assigned']; ?></h1>

                                <small>New visits</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title bg-danger">
                                <a href="<?=Url::to(['/problems/index','ProblemsSearch[status_id]'=>3]);?>"><span class="btn btn-success btn-xs pull-right">View</span></a>
                                <h5>Closed Problems</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?= $problem['closed']; ?></h1>

                                <small>In first month</small>
                            </div>
                        </div>
            </div>
        </div>



                <div class="row">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title bg-success">
                                        <h5>Pending Problems</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <table class="table table-hover table-striped no-margins">
                                            
                                            <tbody>
                                                <?= GridView::widget([
                                        'dataProvider' => $dataProvider,
                                        //'filterModel' => $searchModel,
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],

                                            //'id',
                                            'title',
                                            'department.name', 
                                            //'description:ntext',
                                            'date_added',
                                            //'user_id',
                                            //'status.name',

                                           // ['class' => 'yii\grid\ActionColumn'],
                                        ],
                                    ]); ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                    </div>

                        </div>
                    <div class="row">
                        
                            <div class="col-lg-12">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title bg-success">
                                        <h5>Recently Assigned Problems</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>

                                 
                                    <div class="ibox-content">
                                        <table class="table table-hover no-margins">
                                            <tbody>
                                                <?= GridView::widget([
                                        'dataProvider' => $dataProviderAssigned ,
                                        //'filterModel' => $searchModel,
                                        'columns' => [
                                            ['class' => 'yii\grid\SerialColumn'],

                                            //'id',
                                            'title',
                                            'department.name', 
                                            //'description:ntext',
                                            'date_added',
                                            //'user_id',
                                            //'status.name',

                                           // ['class' => 'yii\grid\ActionColumn'],
                                        ],
                                    ]); ?>
                                            </tbody>
                                        </table>



                                    </div>
                                </div>
                            </div>
                    
                  


                