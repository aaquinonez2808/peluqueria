<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Servicio;

/**
 * ServicioSearch represents the model behind the search form of `app\models\Servicio`.
 */
class ServicioSearch extends Servicio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_serv', 'id_esti', 'id_cat'], 'integer'],
            [['nombre_serv', 'descripcion_serv'], 'safe'],
            [['costo_serv'], 'number'],
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
        $query = Servicio::find();

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
            'id_serv' => $this->id_serv,
            'costo_serv' => $this->costo_serv,
            'id_esti' => $this->id_esti,
            'id_cat' => $this->id_cat,
        ]);

        $query->andFilterWhere(['like', 'nombre_serv', $this->nombre_serv])
            ->andFilterWhere(['like', 'descripcion_serv', $this->descripcion_serv]);

        return $dataProvider;
    }
}
