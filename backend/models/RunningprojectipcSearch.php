<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Runningprojectipc;

/**
 * RunningprojectipcSearch represents the model behind the search form about `backend\models\Runningprojectipc`.
 */
class RunningprojectipcSearch extends Runningprojectipc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'Project_Id'], 'integer'],
            [['Project_Name', 'Project_Ipc'], 'safe'],
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
        $query = Runningprojectipc::find();

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
            'Project_Id' => $this->Project_Id,
        ]);

        $query->andFilterWhere(['like', 'Project_Name', $this->Project_Name])
            ->andFilterWhere(['like', 'Project_Ipc', $this->Project_Ipc]);

        return $dataProvider;
    }
}
