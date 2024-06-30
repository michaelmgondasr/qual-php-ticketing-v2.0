<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Events $model */
/** @var yii\widgets\ActiveForm $form */
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<div class="card" style="width: 100rem;">
    <div class="card-header">
        Create Events
    </div>
    <div class="card-body">
        <div class="events-form mt-1">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

            <div class="row g-3 ">
                <div class="col-8 mb-2">
                    <label for="inputEmail4" class="form-label">Event Name</label>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                </div>

                <div class="row mb-2">
                    <div class="col-10">
                        <?= $form->field($model, 'description')->textarea(['rows' => 3]) ?>
                    </div>
                </div>

                <div class="row mt-2 mb-2">
                    <div class="col-8">
                        <?= $form->field($model, 'venue')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-auto">
                        <?= $form->field($model, 'date')->input('date', [
                            'min' => date('Y-m-d')
                        ]) ?>
                    </div>
                    <div class="col-auto">
                        <?= $form->field($model, 'start_time')->input('time', [
                            'min' => '09:00',
                            'max' => '18:00'
                        ]) ?>
                    </div>
                </div>

                <div class="col-md-4 mb-2">
                    <?= $form->field($model, 'image')->fileInput() ?>
                </div>

                <div class="col-4 mb-2">
                    <?= $form->field($model, 'pricing')->dropDownList(['premium' => 'Premium', 'free' => 'Free'], [
                        'prompt' => 'Is it premium or freemium?',
                        'id' => 'pricing-select',
                    ]) ?>

                    <div id="price-field" style="display: none;">
                        <?= $form->field($model, 'ticket_price')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>

                <div class="col-auto">
                    <?= $form->field($model, 'created_by')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>
                </div>

                <div class="row mt-2">
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>

            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

<script>
    document.getElementById('pricing-select').addEventListener('change', function() {
        var pricingSelect = document.getElementById('pricing-select');
        var priceField = document.getElementById('price-field');

        if (pricingSelect.value === 'premium') {
            priceField.style.display = 'block';
        } else {
            priceField.style.display = 'none';
        }
    });
</script>
