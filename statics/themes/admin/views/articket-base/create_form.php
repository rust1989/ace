<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\ArticketBase;

/* @var $this yii\web\View */
/* @var $model backend\models\ArticketBase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articket-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extend')->dropDownList(ArticketBase::get_extend_list()) ?>
    
    <?= $form->field($model, 'engine_type')->dropDownList(ArticketBase::get_engine_list()) ?>

    <?= $form->field($model, 'need_pk')->radioList(ArticketBase::get_status_list(),['value'=>1]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
