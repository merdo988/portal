<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bannerr */

$this->title = 'Create Bannerr';
$this->params['breadcrumbs'][] = ['label' => 'Bannerrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bannerr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
