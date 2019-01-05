<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BannerrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bannerrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bannerr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bannerr', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bannerr_id',
            'bannerr_adi',
            'bannerr_kodu',
            'bannerr_resim_url:url',
            'bannerr_reklam_url:url',
            //'bannerr_created',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
