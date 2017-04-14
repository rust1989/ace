<?php
use yii\bootstrap\Nav;

echo Nav::widget([
    'items' => [
        [
            'label' => '模型管理',
            'url' => ['articket-base/index'],
        ],
        [
            'label' => '创建模型',
            'url' => ['articket-base/create'],
        ],
    ],
    'options' => ['class' => 'nav-tabs'],
]);