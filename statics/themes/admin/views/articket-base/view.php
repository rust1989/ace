<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ArticketBase */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Articket Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articket-base-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'title',
            'extend',
            'relation',
            'need_pk',
            'field_sort:ntext',
            'field_group',
            'attribute_list:ntext',
            'attribute_alias',
            'template_list',
            'template_add',
            'template_edit',
            'list_grid:ntext',
            'list_row',
            'search_key',
            'search_list',
            'create_time',
            'update_time',
            'status',
            'engine_type',
        ],
    ]) ?>

</div>
