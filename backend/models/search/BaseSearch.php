<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ArticketBase;

/**
 * BaseSearch represents the model behind the search form about `backend\models\ArticketBase`.
 */
class BaseSearch extends ArticketBase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'extend', 'need_pk', 'list_row', 'create_time', 'update_time', 'status'], 'integer'],
            [['name', 'title', 'relation', 'field_sort', 'field_group', 'attribute_list', 'attribute_alias', 'template_list', 'template_add', 'template_edit', 'list_grid', 'search_key', 'search_list', 'engine_type'], 'safe'],
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
        $query = ArticketBase::find();

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
            'id' => $this->id,
            'extend' => $this->extend,
            'need_pk' => $this->need_pk,
            'list_row' => $this->list_row,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'relation', $this->relation])
            ->andFilterWhere(['like', 'field_sort', $this->field_sort])
            ->andFilterWhere(['like', 'field_group', $this->field_group])
            ->andFilterWhere(['like', 'attribute_list', $this->attribute_list])
            ->andFilterWhere(['like', 'attribute_alias', $this->attribute_alias])
            ->andFilterWhere(['like', 'template_list', $this->template_list])
            ->andFilterWhere(['like', 'template_add', $this->template_add])
            ->andFilterWhere(['like', 'template_edit', $this->template_edit])
            ->andFilterWhere(['like', 'list_grid', $this->list_grid])
            ->andFilterWhere(['like', 'search_key', $this->search_key])
            ->andFilterWhere(['like', 'search_list', $this->search_list])
            ->andFilterWhere(['like', 'engine_type', $this->engine_type]);

        return $dataProvider;
    }
}
