<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Billupload;

/**
 * BilluploadSearch represents the model behind the search form about `backend\models\Billupload`.
 */
class BilluploadSearch extends Billupload
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Bill_Id'], 'integer'],
            [['Bill_Number', 'Bill_Name', 'Bill_Amout', 'Bill_Date'], 'safe'],
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
        $query = Billupload::find();

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
            'Bill_Id' => $this->Bill_Id,
        ]);

        $query->andFilterWhere(['like', 'Bill_Number', $this->Bill_Number])
            ->andFilterWhere(['like', 'Bill_Name', $this->Bill_Name])
            ->andFilterWhere(['like', 'Bill_Amout', $this->Bill_Amout])
            ->andFilterWhere(['like', 'Bill_Date', $this->Bill_Date])
            ->andFilterWhere(['like', 'Bill_Image', $this->Bill_Image]);

        return $dataProvider;
    }
}
