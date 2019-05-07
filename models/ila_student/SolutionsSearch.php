<?php

namespace app\models\ila_student;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ila_student\Solutions;

/**
 * SolutionsSearch represents the model behind the search form about `app\models\Solutions`.
 */
class SolutionsSearch extends Solutions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'problem_id', 'user_id', 'status'], 'integer'],
            [['title', 'description'], 'safe'],
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
    public function search($params,$p=false)
    {
        $query = Solutions::find();

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

        if($p){
            $query->andWhere(['problem_id'=>$p]);
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'problem_id' => $this->problem_id,
            'user_id' => $this->user_id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
