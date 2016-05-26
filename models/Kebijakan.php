<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kebijakan".
 *
 * @property string $id
 * @property string $id_strategi
 * @property string $kebijakan
 *
 * @property Strategi $idStrategi
 */
class Kebijakan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kebijakan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_strategi', 'kebijakan'], 'required'],
            [['id'], 'string', 'max' => 14],
            [['id_strategi'], 'string', 'max' => 12],
            [['kebijakan'], 'string', 'max' => 255],
            [['id_strategi'], 'exist', 'skipOnError' => true, 'targetClass' => Strategi::className(), 'targetAttribute' => ['id_strategi' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_strategi' => 'Id Strategi',
            'kebijakan' => 'Kebijakan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdStrategi()
    {
        return $this->hasOne(Strategi::className(), ['id' => 'id_strategi']);
    }
}
