<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $id_serv
 * @property string $nombre_serv
 * @property float $costo_serv
 * @property string $descripcion_serv
 * @property int|null $id_esti
 * @property int $id_cat
 *
 * @property Categoria $cat
 * @property Detallereserv[] $detallereservs
 * @property Estilista $esti
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_serv', 'costo_serv', 'descripcion_serv', 'id_cat'], 'required'],
            [['costo_serv'], 'number'],
            [['id_esti', 'id_cat'], 'integer'],
            [['nombre_serv', 'descripcion_serv'], 'string', 'max' => 45],
            [['id_cat'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::class, 'targetAttribute' => ['id_cat' => 'id_cat']],
            [['id_esti'], 'exist', 'skipOnError' => true, 'targetClass' => Estilista::class, 'targetAttribute' => ['id_esti' => 'id_esti']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_serv' => 'Id Serv',
            'nombre_serv' => 'Nombre Serv',
            'costo_serv' => 'Costo Serv',
            'descripcion_serv' => 'Descripcion Serv',
            'id_esti' => 'Id Esti',
            'id_cat' => 'Id Cat',
        ];
    }

    /**
     * Gets query for [[Cat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Categoria::class, ['id_cat' => 'id_cat']);
    }

    /**
     * Gets query for [[Detallereservs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallereservs()
    {
        return $this->hasMany(Detallereserv::class, ['id_serv' => 'id_serv']);
    }

    /**
     * Gets query for [[Esti]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEsti()
    {
        return $this->hasOne(Estilista::class, ['id_esti' => 'id_esti']);
    }
}
