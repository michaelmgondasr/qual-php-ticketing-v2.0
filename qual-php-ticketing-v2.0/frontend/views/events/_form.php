<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Events $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="events-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'date')->input('date', [
            'min' => date('Y-m-d')
        ]) ?>
    <?= $form->field($model, 'venue')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>


    <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_time')->input('time', [
            'min' => '09:00', // Earliest time selectable
            'max' => '18:00'  // Latest time selectable 
        ]);
        ?>
    <?= $form->field($model, 'pricing')->dropDownList([ 'premium' => 'Premium', 'free' => 'Free', ], [
        'prompt' => 'Is it premium or freemium?',
        'id' => 'pricing-select',
    ]) ?>

    <div id="price-field" style="display: none;">
        <?= $form->field($model, 'ticket_price')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
document.getElementById('pricing-select').addEventListener('change', function () {
    var pricingSelect = document.getElementById('pricing-select');
    var priceField = document.getElementById('price-field');
    
    if (pricingSelect.value === 'premium') {
        priceField.style.display = 'block';
    } else {
        priceField.style.display = 'none';
    }
});
</script>
