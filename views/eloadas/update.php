<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Eloadas $model */

$this->title = 'Update Eloadas: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Eloadas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="eloadas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
