<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articket-base-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'extend') ?>

    <?= $form->field($model, 'relation') ?>

    <?php // echo $form->field($model, 'need_pk') ?>

    <?php // echo $form->field($model, 'field_sort') ?>

    <?php // echo $form->field($model, 'field_group') ?>

    <?php // echo $form->field($model, 'attribute_list') ?>

    <?php // echo $form->field($model, 'attribute_alias') ?>

    <?php // echo $form->field($model, 'template_list') ?>

    <?php // echo $form->field($model, 'template_add') ?>

    <?php // echo $form->field($model, 'template_edit') ?>

    <?php // echo $form->field($model, 'list_grid') ?>

    <?php // echo $form->field($model, 'list_row') ?>

    <?php // echo $form->field($model, 'search_key') ?>

    <?php // echo $form->field($model, 'search_list') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'engine_type') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
