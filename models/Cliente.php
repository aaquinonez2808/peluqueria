<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id_cli
 * @property string $nombre_cli
 * @property string $cedula_cli
 * @property string $direccion_cli
 * @property string $telefono_cli
 * @property string $email_cli
 *
 * @property Reserva[] $reservas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_cli', 'cedula_cli', 'direccion_cli', 'telefono_cli', 'email_cli'], 'required'],
            [['nombre_cli', 'cedula_cli', 'direccion_cli', 'telefono_cli', 'email_cli'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cli' => 'Id Cli',
            'nombre_cli' => 'Nombre Cli',
            'cedula_cli' => 'Cedula Cli',
            'direccion_cli' => 'Direccion Cli',
            'telefono_cli' => 'Telefono Cli',
            'email_cli' => 'Email Cli',
        ];
    }

    /**
     * Gets query for [[Reservas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReservas()
    {
        return $this->hasMany(Reserva::class, ['id_client' => 'id_cli']);
    }
}
