<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\jegy $model */
/** @var ActiveForm $form */
?>
<div class="site-seat_reservation">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'Vetítés ID') ?>
        <?= $form->field($model, 'Sor és oszlop száma') ?>
        <?= $form->field($model, 'Sor száma') ?>
        <?= $form->field($model, 'Oszlop száma') ?>
        <?= $form->field($model, 'Név') ?>
        <?= $form->field($model, 'Telefonszám') ?>
        <?= $form->field($model, 'Email') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'updated_at') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-seat_reservation -->
