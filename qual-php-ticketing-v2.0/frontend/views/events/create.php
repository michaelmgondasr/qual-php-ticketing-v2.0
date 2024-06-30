<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Events $model */

$this->title = 'Create Events';
?>

<div class="d-flex justify-content-center   mt-3">
    <?php

    $this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;
    ?>
    <div class="events-create ">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>