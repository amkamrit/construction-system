<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Projectregister;

/**
 * ProjectregisterSearch represents the model behind the search form about `backend\models\Projectregister`.
 */
class ProjectregisterSearch extends Projectregister
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Project_Id'], 'integer'],
            [['Project_Name', 'Start_Date', 'Expire_Date', 'Project_Beget', 'Images'], 'safe'],
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
        $query = Projectregister::find();

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
            'Project_Id' => $this->Project_Id,
        ]);

        $query->andFilterWhere(['like', 'Project_Name', $this->Project_Name])
            ->andFilterWhere(['like', 'Start_Date', $this->Start_Date])
            ->andFilterWhere(['like', 'Expire_Date', $this->Expire_Date])
            ->andFilterWhere(['like', 'Project_Beget', $this->Project_Beget])
            ->andFilterWhere(['like', 'Images', $this->Images]);

        return $dataProvider;
    }
}
