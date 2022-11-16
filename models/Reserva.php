<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reserva".
 *
 * @property int $idreserva
 * @property string $fecha_reserv
 * @property string $hora_reserv
 * @property float $total_reserv
 * @property int $id_client
 *
 * @property Cliente $client
 * @property Detallereserv[] $detallereservs
 */
class Reserva extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reserva';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_reserv', 'hora_reserv', 'total_reserv', 'id_client'], 'required'],
            [['total_reserv'], 'number'],
            [['id_client'], 'integer'],
            [['fecha_reserv', 'hora_reserv'], 'string', 'max' => 45],
            [['id_client'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['id_client' => 'id_cli']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idreserva' => 'Idreserva',
            'fecha_reserv' => 'Fecha Reserv',
            'hora_reserv' => 'Hora Reserv',
            'total_reserv' => 'Total Reserv',
            'id_client' => 'Id Client',
        ];
    }

    /**
     * Gets query for [[Client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(Cliente::class, ['id_cli' => 'id_client']);
    }

    /**
     * Gets query for [[Detallereservs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDetallereservs()
    {
        return $this->hasMany(Detallereserv::class, ['id_reserv' => 'idreserva']);
    }
}
