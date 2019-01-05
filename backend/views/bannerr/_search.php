<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BannerrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bannerr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'bannerr_id') ?>

    <?= $form->field($model, 'bannerr_adi') ?>

    <?= $form->field($model, 'bannerr_kodu') ?>

    <?= $form->field($model, 'bannerr_resim_url') ?>

    <?= $form->field($model, 'bannerr_reklam_url') ?>

    <?php // echo $form->field($model, 'bannerr_created') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
