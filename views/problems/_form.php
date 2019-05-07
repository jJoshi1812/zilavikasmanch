<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Department;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Problems */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="problems-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10 text-navy">
                    <h2>Problems</h2>
                    <ol class="breadcrumb">
                        <li>
                            <?= Html::a('Dashboard', ['/site/index'], ['class' => '']) ?>
                        </li>
                        <li>
                            <?= Html::a('Problems', ['index'], ['class' => '']) ?>
                        </li>
                        <li class="active">
                            <strong>Add Problem</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title bg-success">
                        <h5>Add new Problem</h5>
                        <div class="ibox-tools">
                            
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12 ">
                                <p>Enter Problem Details</p>
                                <form role="form">
                                    <div class="form-group"> <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                                    <div class="form-group"> 
                                        <div>
                                            <?=$form->field($model, 'department_id')->dropDownList (
                                            ArrayHelper::map(Department::find()->all(),'id','name'),
                                            ['prompt'=>'Select a Department']        
                                        ) ?>
                                        </div>
                                    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

                                    <div class="form-group">
                                        <?= Html::submitButton($model->isNewRecord ? 'Add' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
              
            </div>
        </div>

    

    

    
    

    

    

    <?php ActiveForm::end(); ?>

</div>
