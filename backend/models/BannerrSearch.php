<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bannerr;

/**
 * BannerrSearch represents the model behind the search form of `backend\models\Bannerr`.
 */
class BannerrSearch extends Bannerr
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bannerr_id'], 'integer'],
            [['bannerr_adi', 'bannerr_kodu', 'bannerr_resim_url', 'bannerr_reklam_url', 'bannerr_created'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Bannerr::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'bannerr_id' => $this->bannerr_id,
            'bannerr_created' => $this->bannerr_created,
        ]);

        $query->andFilterWhere(['like', 'bannerr_adi', $this->bannerr_adi])
            ->andFilterWhere(['like', 'bannerr_kodu', $this->bannerr_kodu])
            ->andFilterWhere(['like', 'bannerr_resim_url', $this->bannerr_resim_url])
            ->andFilterWhere(['like', 'bannerr_reklam_url', $this->bannerr_reklam_url]);

        return $dataProvider;
    }
}
