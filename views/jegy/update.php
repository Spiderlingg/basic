<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Jegy $model */

$this->title = 'Update Jegy: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Jegies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jegy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
