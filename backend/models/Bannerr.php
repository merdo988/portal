<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bannerr".
 *
 * @property int $bannerr_id
 * @property string $bannerr_adi
 * @property string $bannerr_kodu
 * @property string $bannerr_resim_url
 * @property string $bannerr_reklam_url
 * @property string $bannerr_created
 */
class Bannerr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bannerr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bannerr_adi', 'bannerr_kodu', 'bannerr_resim_url', 'bannerr_reklam_url', 'bannerr_created'], 'required'],
            [['bannerr_created'], 'safe'],
            [['bannerr_adi', 'bannerr_kodu', 'bannerr_resim_url', 'bannerr_reklam_url'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bannerr_id' => 'Bannerr ID',
            'bannerr_adi' => 'Bannerr Adi',
            'bannerr_kodu' => 'Bannerr Kodu',
            'bannerr_resim_url' => 'Bannerr Resim Url',
            'bannerr_reklam_url' => 'Bannerr Reklam Url',
            'bannerr_created' => 'Bannerr Created',
        ];
    }
}
