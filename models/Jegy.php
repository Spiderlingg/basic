<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Jegy".
 *
 * @property int $ID
 * @property int $Vetítés ID
 * @property string $Sor és oszlop száma
 * @property int $Sor száma
 * @property string $Oszlop száma
 * @property int $Név
 * @property int $Telefonszám
 * @property int $Email
 * @property string $created_at
 * @property string $updated_at
 */
class Jegy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Jegy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Vetítés ID', 'Sor és oszlop száma', 'Sor száma', 'Oszlop száma', 'Név', 'Telefonszám', 'Email'], 'required'],
            [['Vetítés ID', 'Sor száma', 'Név', 'Telefonszám', 'Email'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['Sor és oszlop száma', 'Oszlop száma'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Vetítés ID' => 'Vetítés ID',
            'Sor és oszlop száma' => 'Sor És Oszlop Száma',
            'Sor száma' => 'Sor Száma',
            'Oszlop száma' => 'Oszlop Száma',
            'Név' => 'Név',
            'Telefonszám' => 'Telefonszám',
            'Email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
