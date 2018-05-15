<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Vehicleinformation;

/**
 * VehicleinformationSearch represents the model behind the search form about `backend\models\Vehicleinformation`.
 */
class VehicleinformationSearch extends Vehicleinformation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vechicle_id', 'Renew_Date', 'Expire_Date'], 'integer'],
            [['Vechicle_Number', 'Working_Site', 'Images'], 'safe'],
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
        $query = Vehicleinformation::find();

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
            'Vechicle_id' => $this->Vechicle_id,
            'Renew_Date' => $this->Renew_Date,
            'Expire_Date' => $this->Expire_Date,
        ]);

        $query->andFilterWhere(['like', 'Vechicle_Number', $this->Vechicle_Number])
            ->andFilterWhere(['like', 'Working_Site', $this->Working_Site])
            ->andFilterWhere(['like', 'Images', $this->Images]);

        return $dataProvider;
    }
}
