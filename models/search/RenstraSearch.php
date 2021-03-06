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
    public $skpd;
    public $periode;
    
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'skpd', 'periode', 'visi'], 'safe'],
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
        $query->joinWith(['idSkpd','idPeriode']);

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
        
        $query->andFilterWhere([
            'periode.tahun_awal' => $this->periode,
        ]);
        // grid filtering conditions
        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'skpd.nama', $this->skpd])
            ->andFilterWhere(['like', 'visi', $this->visi]);

        return $dataProvider;
    }
}
