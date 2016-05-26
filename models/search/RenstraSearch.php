<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Renstra;

/**
 * RenstraSearch represents the model behind the search form about `app\models\Renstra`.
 */
class RenstraSearch extends Renstra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_skpd', 'id_periode', 'visi'], 'safe'],
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
        $query = Renstra::find();

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
        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'id_skpd', $this->id_skpd])
            ->andFilterWhere(['like', 'id_periode', $this->id_periode])
            ->andFilterWhere(['like', 'visi', $this->visi]);

        return $dataProvider;
    }
}
