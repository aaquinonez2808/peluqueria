<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Estilista;

/**
 * EstilistaSearch represents the model behind the search form of `app\models\Estilista`.
 */
class EstilistaSearch extends Estilista
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_esti'], 'integer'],
            [['nombre_esti', 'cedula_esti', 'direccion_esti', 'telefono_esti', 'email_esti'], 'safe'],
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
        $query = Estilista::find();

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
            'id_esti' => $this->id_esti,
        ]);

        $query->andFilterWhere(['like', 'nombre_esti', $this->nombre_esti])
            ->andFilterWhere(['like', 'cedula_esti', $this->cedula_esti])
            ->andFilterWhere(['like', 'direccion_esti', $this->direccion_esti])
            ->andFilterWhere(['like', 'telefono_esti', $this->telefono_esti])
            ->andFilterWhere(['like', 'email_esti', $this->email_esti]);

        return $dataProvider;
    }
}
