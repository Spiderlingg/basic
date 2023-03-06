<?php

use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\jui\JuiAsset;
use janisto\timepicker\TimePicker;
use janisto\timepicker\TimePickerAsset;

TimePickerAsset::register($this); // register timepicker asset bundle



/** @var yii\web\View $this */
/** @var app\models\Eloadas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<?php
// Register the movie-form.js file
$this->registerJsFile('@web/js/movie-form.js', ['depends' => [yii\web\JqueryAsset::class]]);
?>



<div class="eloadas-form" xmlns="">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Film_neve')->textarea(['rows' => 6]) ?>



    <?= $form->field($model, 'Vetítés_napja')->widget(\yii\jui\DatePicker::className(), [
        'language' => 'en',
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
            'minDate' => 0,
            'beforeShowDay' => new \yii\web\JsExpression('function(date) {
            // Get the day of the week (0 = Sunday, 1 = Monday, etc.)
            var dayOfWeek = date.getDay();

            // Get the day of the month
            var dayOfMonth = date.getDate();

            // If it is the last Sunday of the month, disable it
            if (dayOfWeek === 0 && dayOfMonth >= 25) {
                return [false, "disabled", "Disabled"];
            }

            // Otherwise, enable the date
            return [true, "", ""];
        }'),
        ],
        'options' => [
            'class' => 'form-control',
            'autocomplete' => 'off'
        ],
    ])->textInput(['placeholder' => 'Vetítés dátuma'])->label(false); ?>

    <?= $form->field($model, 'Kezdés_időpontja')->widget(
        TimePicker::class,
        [
            'mode' => 'time',
            'clientOptions' => [
                    'controlType' => 'select',
                'timeFormat' => 'HH:mm',
                'stepMinute' => 15,
                'minTime' => date('H:i', max(time(), strtotime('08:00'))),
                'maxTime' => '20:00'
            ]
        ]
    ) ?>

    <?= $form->field($model, 'Kezdés_vége')->widget(TimePicker::class, [
        'mode' => 'time',
        'clientOptions' => [
                'controlType' => 'select',
            'timeFormat' => 'HH:mm',
            'minTime' => date('H:i', strtotime('+30 minutes', strtotime($model->Kezdés_időpontja))), // minimum time is 30 minutes from start time
            'maxTime' => '20:00', // maximum time is 8:00 PM
            'step' => 15, // step by 15 minutes
        ],
        'options' => [
            'class' => 'form-control',
        ],
    ])->label('Kezdés vége'); ?>

    <?= $form->field($model, 'Jegyek_ára')->textInput(['type' => 'number', 'after' => '€'])->label('Jegyek ára (EUR)') ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


