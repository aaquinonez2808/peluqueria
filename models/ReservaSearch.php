<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Reserva;

/**
 * ReservaSearch represents the model behind the search form of `app\models\Reserva`.
 */
class ReservaSearch extends Reserva
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idreserva', 'id_client'], 'integer'],
            [['fecha_reserv', 'hora_reserv'], 'safe'],
            [['total_reserv'], 'number'],
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
        $query = Reserva::find();

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
            'idreserva' => $this->idreserva,
            'total_reserv' => $this->total_reserv,
            'id_client' => $this->id_client,
        ]);

        $query->andFilterWhere(['like', 'fecha_reserv', $this->fecha_reserv])
            ->andFilterWhere(['like', 'hora_reserv', $this->hora_reserv]);

        return $dataProvider;
    }
}
