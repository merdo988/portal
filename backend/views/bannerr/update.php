<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bannerr */

$this->title = 'Update Bannerr: ' . $model->bannerr_id;
$this->params['breadcrumbs'][] = ['label' => 'Bannerrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bannerr_id, 'url' => ['view', 'id' => $model->bannerr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bannerr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
