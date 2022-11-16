<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form of `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cli'], 'integer'],
            [['nombre_cli', 'cedula_cli', 'direccion_cli', 'telefono_cli', 'email_cli'], 'safe'],
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
        $query = Cliente::find();

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
            'id_cli' => $this->id_cli,
        ]);

        $query->andFilterWhere(['like', 'nombre_cli', $this->nombre_cli])
            ->andFilterWhere(['like', 'cedula_cli', $this->cedula_cli])
            ->andFilterWhere(['like', 'direccion_cli', $this->direccion_cli])
            ->andFilterWhere(['like', 'telefono_cli', $this->telefono_cli])
            ->andFilterWhere(['like', 'email_cli', $this->email_cli]);

        return $dataProvider;
    }
}
