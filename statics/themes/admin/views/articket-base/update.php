<?php

use yii\helpers\Html;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model backend\models\ArticketBase */

$this->title = '修改模型 ';
$this->params['breadcrumbs'][] ='内容设置';
$this->params['breadcrumbs'][] = ['label' => '模型管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
?>
<div class="articket-base-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo Tabs::widget([
    		'items'=>[
                   [
                    'label'=>'基础',
                    'content'=>$this->render('create_form', ['model' => $model]),
                    'active'=>true
                   ],
		    		[
		    		'label'=>'设计',
                     'content'=>$this->render('design_form', ['model' => $model])
		    		],
    		        [
                    'label'=>'高级',
                     'content'=>$this->render('high_form', ['model' => $model])
    		        ]
    		]
    		]);?>

</div>
