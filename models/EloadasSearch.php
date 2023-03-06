<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Eloadas;

/**
 * EloadasSearch represents the model behind the search form of `app\models\Eloadas`.
 */
class EloadasSearch extends Eloadas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['Film_neve', 'Vetítés_napja', 'Kezdés_időpontja', 'Kezdés_vége', 'created_at', 'updated_at'], 'safe'],
            [['Jegyek_ára'], 'number'],
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
        $query = Eloadas::find();

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
            'ID' => $this->ID,
            'Vetítés_napja' => $this->Vetítés_napja,
            'Kezdés_időpontja' => $this->Kezdés_időpontja,
            'Kezdés_vége' => $this->Kezdés_vége,
            'Jegyek_ára' => $this->Jegyek_ára,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'Film_neve', $this->Film_neve]);

        return $dataProvider;
    }
}
