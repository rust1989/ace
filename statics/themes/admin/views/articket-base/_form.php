<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ArticketBase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articket-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'extend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'relation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'need_pk')->textInput() ?>

    <?= $form->field($model, 'field_sort')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'field_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'attribute_list')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'attribute_alias')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'template_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'template_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'template_edit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'list_grid')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'list_row')->textInput() ?>

    <?= $form->field($model, 'search_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'search_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'create_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'engine_type')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
