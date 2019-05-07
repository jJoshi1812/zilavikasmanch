<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10 text-navy">
                    <h2> Departments</h2>
                    <ol class="breadcrumb">
                        <li>
                            <?= Html::a('Dashboard', ['/site/index'], ['class' => '']) ?>
                        </li>
                        
                        <li >
                            <?= Html::a('Department', ['index'], ['class' => '']) ?>    
                        </li>
                        <li class="active">
                            Create New department    
                        </li>
  
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title bg-success">
                        <h5>Add new Department</h5>
                        <div class="ibox-tools">
                            
                        </div>
                    </div>
                    
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12 ">
                                
                                <form role="form">
                                    
                                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

   									 <?= $form->field($model, 'description')->textarea(['rows'=>6]) ?>

                                    <div>
                                        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                        
                                    </div>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>

    <div class="form-group">
        
    </div>

    <?php ActiveForm::end(); ?>

</div>


