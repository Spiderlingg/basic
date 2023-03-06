<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EloadasSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="eloadas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'Film_neve') ?>

    <?= $form->field($model, 'Vetítés_napja') ?>

    <?= $form->field($model, 'Kezdés_időpontja') ?>

    <?= $form->field($model, 'Kezdés_vége') ?>

    <?php // echo $form->field($model, 'Jegyek_ára') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
