<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;

$this->title = 'Seat Reservation';
$this->params['breadcrumbs'][] = $this->title;

$js = <<<JS
var selectedSeats = [];
$('.seat').click(function() {
    var seat = $(this).attr('data-seat');
    var index = selectedSeats.indexOf(seat);
    if (index >= 0) {
        // seat is already selected, so unselect it
        selectedSeats.splice(index, 1);
        $(this).removeClass('selected');
    } else if (selectedSeats.length < 4) {
        // seat is not selected yet, so select it
        selectedSeats.push(seat);
        $(this).addClass('selected');
    }
    // update the selected seats list
    $('#selected-seats').val(selectedSeats.join(','));
});
JS;

$this->registerJs($js);
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>Please select up to 4 seats:</p>

<div class="seating-chart">
    <?php foreach ($seats as $seat): ?>
        <?php
        $booked = false; // check if the seat is already booked
        $disabled = false; // check if the seat is disabled (e.g. aisle seat)
        $class = 'seat';
        if ($booked) {
            $class .= ' booked';
            $disabled = true;
        }
        if ($disabled) {
            $class .= ' disabled';
        }
        ?>
        <?= Html::button($seat, [
            'class' => $class,
            'data-seat' => $seat,
            'disabled' => $disabled,
        ]) ?>
    <?php endforeach; ?>
</div>

<?= Html::beginForm(['book'], 'post') ?>
<?= Html::hiddenInput('selectedSeats', null, ['id' => 'selected-seats']) ?>
<?= Html::submitButton('Book selected seats', ['class' => 'btn btn-primary']) ?>
<?= Html::endForm() ?>
