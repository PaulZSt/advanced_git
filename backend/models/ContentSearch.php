<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Content;

/**
 * ContentSearch represents the model behind the search form of `app\models\Content`.
 */
class ContentSearch extends Content
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'city_id', 'user_id', 'category_id', 'price', 'views', 'create_at', 'update_at', 'status'], 'integer'],
            [['title', 'meta_title', 'description', 'meta_description', 'short_content', 'content', 'image', 'images', 'options', 'url'], 'safe'],
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
    public function search($params)
    {
        $query = Content::find();

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
            'city_id' => $this->city_id,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'views' => $this->views,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'meta_title', $this->meta_title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'meta_description', $this->meta_description])
            ->andFilterWhere(['like', 'short_content', $this->short_content])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'options', $this->options])
            ->andFilterWhere(['like', 'url', $this->url]);

        return $dataProvider;
    }
}
