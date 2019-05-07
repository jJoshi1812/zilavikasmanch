<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Problems;

/**
 * ProblemsSearch represents the model behind the search form about `app\models\Problems`.
 */
class ProblemsSearch extends Problems
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'department_id', 'user_id', 'status_id'], 'integer'],
            [['title', 'description', 'date_added'], 'safe'],
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
    public function search($params,$status=false)
    {
        $query = Problems::find();

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
       if($status){
        $query->andWhere(['status_id'=>$status]);
       } 

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'department_id' => $this->department_id,
            'date_added' => $this->date_added,
            'user_id' => $this->user_id,
            'status_id' => $this->status_id,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }

    public function searchassigned($params1,$statusassigned=false)
    {
        $query1 = Problems::find();

        // add conditions that should always apply here

        $dataProviderAssigned = new ActiveDataProvider([
            'query' => $query1,
        ]);

        $this->load($params1);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProviderAssigned;
        }
       if($statusassigned){
        $query1->andWhere(['status_id'=>$statusassigned]);
       } 

        // grid filtering conditions
        $query1->andFilterWhere([
            'id' => $this->id,
            'department_id' => $this->department_id,
            'date_added' => $this->date_added,
            'user_id' => $this->user_id,
            'status_id' => $this->status_id,
        ]);

        $query1->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProviderAssigned;
    }

    public function searchdepart($params2,$statusdepart=false)
    {
        $query2 = Problems::find();

        // add conditions that should always apply here

        $dataProviderDepart = new ActiveDataProvider([
            'query' => $query2,
        ]);

        $this->load($params2);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProviderDepart;
        }
       if($statusdepart){
        $query2->andWhere(['department_id'=>$statusdepart]);
       } 

        // grid filtering conditions
        $query2->andFilterWhere([
            'id' => $this->id,
            'department_id' => $this->department_id,
            'date_added' => $this->date_added,
            'user_id' => $this->user_id,
            'status_id' => $this->status_id,
        ]);

        $query2->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProviderDepart;
    }
}
