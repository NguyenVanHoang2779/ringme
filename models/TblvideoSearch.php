<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tblvideo;

/**
 * TblvideoSearch represents the model behind the search form of `app\models\Tblvideo`.
 */
class TblvideoSearch extends Tblvideo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_video', 'status', 'total_comment', 'total_like', 'total_view', 'category_id', 'user_id'], 'integer'],
            [['approve_at', 'quality', 'title', 'vertical_cover_image', 'description', 'file', 'horizontal_cover_image', 'created_at', 'updated_at'], 'safe'],
            [['in_recommend'], 'boolean'],
            [['time_average'], 'number'],
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
        $query = Tblvideo::find();

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
            'id_video' => $this->id_video,
            'approve_at' => $this->approve_at,
            'in_recommend' => $this->in_recommend,
            'status' => $this->status,
            'total_comment' => $this->total_comment,
            'total_like' => $this->total_like,
            'total_view' => $this->total_view,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'time_average' => $this->time_average,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'quality', $this->quality])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'vertical_cover_image', $this->vertical_cover_image])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'horizontal_cover_image', $this->horizontal_cover_image]);

        return $dataProvider;
    }
}
