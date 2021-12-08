<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Task;

/**
 * TaskSearch represents the model behind the search form of `backend\models\Task`.
 */
class TaskSearch extends Task
{
    public $statusDescription;
    public $ownerName;
    public $requesterName;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'project_id', 'status_id', 'created_by', 'updated_by'], 'integer'],
            [['name', 'description', 'created_at', 'updated_at'], 'safe'],
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
    public function search($params, $project_id = null)

    {
        if ($project_id)
        $query = Task::find()->where(['project_id' => $project_id]);
       else
        $query = Task::find();
       
        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->setSort([
            'attributes' => [
                'name',
                'description',
                'statusDescription' => [
                    'asc' => ['status.description' => SORT_ASC],
                    'desc' => ['status.description' => SORT_DESC],
                    'label' => 'Status'
                ],
                'ownerName' => [
                    'asc' => ['owner.username' => SORT_ASC],
                    'desc' => ['owner.username' => SORT_DESC],
                    'label' => 'Owner'
                ],
                'requesterName' => [
                    'asc' => ['requester.username' => SORT_ASC],
                    'desc' => ['requester.username' => SORT_DESC],
                    'label' => 'Requester'
                ],
            ]
        ]);
       

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'project_id' => $this->project_id,
            'status_id' => $this->status_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);
        
            $query->joinWith(['owner' => function ($q) {

                $q->andFilterWhere(['like', 'owner.username', $this->ownerName]);
            
            }]);$query->joinWith(['owner' => function ($q) {

                $q->andFilterWhere(['like', 'owner.username', $this->ownerName]);
    
            }]);
    
            $query->joinWith(['requester' => function ($q) {
    
                $q->andFilterWhere(['like', 'requester.username', $this->requesterName]);
    
            }]);
    
            return $dataProvider;
        }
    }