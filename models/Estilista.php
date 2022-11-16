<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estilista".
 *
 * @property int $id_esti
 * @property string $nombre_esti
 * @property string $cedula_esti
 * @property string $direccion_esti
 * @property string $telefono_esti
 * @property string $email_esti
 */
class Estilista extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estilista';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_esti', 'cedula_esti', 'direccion_esti', 'telefono_esti', 'email_esti'], 'required'],
            [['nombre_esti', 'cedula_esti', 'direccion_esti', 'telefono_esti', 'email_esti'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_esti' => 'Id Esti',
            'nombre_esti' => 'Nombre Esti',
            'cedula_esti' => 'Cedula Esti',
            'direccion_esti' => 'Direccion Esti',
            'telefono_esti' => 'Telefono Esti',
            'email_esti' => 'Email Esti',
        ];
    }
}
