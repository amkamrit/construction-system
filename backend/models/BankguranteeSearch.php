<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bankgurantee;

/**
 * BankguranteeSearch represents the model behind the search form about `backend\models\Bankgurantee`.
 */
class BankguranteeSearch extends Bankgurantee
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Bank_Gurantee_id'], 'integer'],
            [['Bank_Name', 'Project_Name', 'Entry_Date', 'Expire_Date', 'Gurantee_Image'], 'safe'],
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
        $query = Bankgurantee::find();

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
            'Bank_Gurantee_id' => $this->Bank_Gurantee_id,
        ]);

        $query->andFilterWhere(['like', 'Bank_Name', $this->Bank_Name])
            ->andFilterWhere(['like', 'Project_Name', $this->Project_Name])
            ->andFilterWhere(['like', 'Entry_Date', $this->Entry_Date])
            ->andFilterWhere(['like', 'Expire_Date', $this->Expire_Date])
            ->andFilterWhere(['like', 'Gurantee_Image', $this->Gurantee_Image]);

        return $dataProvider;
    }
}
