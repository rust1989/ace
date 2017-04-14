<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\ArticketBase;
use backend\models\Menu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '模型管理';
$this->params['breadcrumbs'][] ='内容设置';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articket-base-index">
     <?=$this->render('_tab_menu');?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'title',
            //'extend',
            //'relation',
            // 'need_pk',
            // 'field_sort:ntext',
            // 'field_group',
            // 'attribute_list:ntext',
            // 'attribute_alias',
            // 'template_list',
            // 'template_add',
            // 'template_edit',
            // 'list_grid:ntext',
            // 'list_row',
            // 'search_key',
            // 'search_list',
    		[
    		  'attribute'=>'create_time',
    		   'value'=>function($model){
    	           return date('Y-m-d H:i:s',$model->create_time);
               }
    		],
            // 'update_time',
            [
    		  'attribute'=>'status',
               'format' => 'raw',
               'value' => function($data) {
               	return Html::tag('span', ArticketBase::get_status_text($data['status']), ['class' => 'label label-sm '.Menu::getDisplayStyle($data['status'])]);
               }
    		],
            // 'engine_type',

            [
            'class' => 'yii\grid\ActionColumn',
            'header'=>'操作',
            'template'=>'{list} {update} {delete}',
            'buttons'=>[
                'list'=>function($url, $model, $key){
                      return Html::a('数据',['list','pid'=>$key]);
                 }
             ]
            ],
        ]
    ]); ?>
</div>
