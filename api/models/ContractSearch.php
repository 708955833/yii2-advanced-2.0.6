<?php

namespace api\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use api\models\Contract;

/**
 * ContractSearch represents the model behind the search form about `api\models\Contract`.
 */
class ContractSearch extends Contract
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contr_id', 'is_lock', 'status', 'audit_status', 'is_submit', 'num'], 'integer'],
            [['contr_no', 'vercode', 'type', 'lock_time', 'sub_time', 'sign_time', 'transactor', 'oldcontr', 'orgid', 'createtime', 'userid', 'modified', 'extra_data'], 'safe'],
            [['price'], 'number'],
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
        $query = Contract::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'contr_id' => $this->contr_id,
            'is_lock' => $this->is_lock,
            'lock_time' => $this->lock_time,
            'status' => $this->status,
            'audit_status' => $this->audit_status,
            'is_submit' => $this->is_submit,
            'sub_time' => $this->sub_time,
            'sign_time' => $this->sign_time,
            'price' => $this->price,
            'num' => $this->num,
            'createtime' => $this->createtime,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'contr_no', $this->contr_no])
            ->andFilterWhere(['like', 'vercode', $this->vercode])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'transactor', $this->transactor])
            ->andFilterWhere(['like', 'oldcontr', $this->oldcontr])
            ->andFilterWhere(['like', 'orgid', $this->orgid])
            ->andFilterWhere(['like', 'userid', $this->userid])
            ->andFilterWhere(['like', 'extra_data', $this->extra_data]);

        return $dataProvider;
    }
}
