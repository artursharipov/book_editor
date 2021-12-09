<?php

namespace common\modules\settings\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\settings\models\Settings;

class SettingsSearch extends Settings
{

    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['key', 'value'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Settings::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'key', $this->key])
            ->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
