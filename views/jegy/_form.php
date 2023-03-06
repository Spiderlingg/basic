<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Jegy $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jegy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Vetítés ID')->textInput() ?>

    <?= $form->field($model, 'Sor és oszlop száma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sor száma')->textInput() ?>

    <?= $form->field($model, 'Oszlop száma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Név')->textInput() ?>

    <?= $form->field($model, 'Telefonszám')->textInput() ?>

    <?= $form->field($model, 'Email')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
