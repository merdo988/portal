<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bannerr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bannerr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bannerr_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bannerr_kodu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bannerr_resim_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bannerr_reklam_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bannerr_created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
