<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property int $id_cat
 * @property string $nombre_cat
 *
 * @property Servicio[] $servicios
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_cat'], 'required'],
            [['nombre_cat'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cat' => 'Id Cat',
            'nombre_cat' => 'Nombre Cat',
        ];
    }

    /**
     * Gets query for [[Servicios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServicios()
    {
        return $this->hasMany(Servicio::class, ['id_cat' => 'id_cat']);
    }
}
