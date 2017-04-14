<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ArticketBase */

$this->title = '创建模型';
$this->params['breadcrumbs'][] ='内容设置';
$this->params['breadcrumbs'][] = ['label' => '模型管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articket-base-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('create_form', [
        'model' => $model,
    ]) ?>

</div>
