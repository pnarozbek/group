<?php

namespace vendor\kouosl\group\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\group\models\group;

/**
 * groupSearch represents the model behind the search form of `vendor\kouosl\group\models\group`.
 */
class groupSearch extends group
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grup_id'], 'integer'],
            [['grup_ad', 'grup_uyeler', 'grup_aciklama'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = group::find();

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
            'grup_id' => $this->grup_id,
        ]);

        $query->andFilterWhere(['like', 'grup_ad', $this->grup_ad])
            ->andFilterWhere(['like', 'grup_uyeler', $this->grup_uyeler])
            ->andFilterWhere(['like', 'grup_aciklama', $this->grup_aciklama]);

        return $dataProvider;
    }
}
