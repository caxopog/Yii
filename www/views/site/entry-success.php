<?php

use yii\helpers\Html;

?>

Форма заполнена верно!
Введённые данные:

Имя: <?= Html::encode($model->name) ?>
E-mail: <?= Html::encode($model->email) ?>
Телефон: <?= Html::encode($model->phone) ?>