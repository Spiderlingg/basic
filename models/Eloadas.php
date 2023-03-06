<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Eloadas".
 *
 * @property int $ID
 * @property string $Film_neve
 * @property string $Vetítés_napja
 * @property string $Kezdés_időpontja
 * @property string $Kezdés_vége
 * @property float $Jegyek_ára
 * @property string $created_at
 * @property string $updated_at
 */
class Eloadas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Eloadas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'Film_neve', 'Vetítés_napja', 'Kezdés_időpontja', 'Kezdés_vége', 'Jegyek_ára'], 'required'],
            [['ID'], 'integer'],
            [['Film_neve'], 'string'],
            [['Vetítés_napja', 'Kezdés_időpontja', 'Kezdés_vége', 'created_at', 'updated_at'], 'safe'],
            [['Jegyek_ára'], 'number'],
            [['ID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Film_neve' => 'Film Neve',
            'Vetítés_napja' => 'Vetítés Napja',
            'Kezdés_időpontja' => 'Kezdés Időpontja',
            'Kezdés_vége' => 'Kezdés Vége',
            'Jegyek_ára' => 'Jegyek Ára',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
