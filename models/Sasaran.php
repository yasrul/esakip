<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sasaran".
 *
 * @property string $id
 * @property string $id_tujuan
 * @property string $sasaran
 *
 * @property Tujuan $idTujuan
 * @property Strategi[] $strategis
 */
class Sasaran extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sasaran';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_tujuan', 'sasaran'], 'required'],
            [['id'], 'string', 'max' => 10],
            [['id_tujuan'], 'string', 'max' => 8],
            [['sasaran'], 'string', 'max' => 255],
            [['id_tujuan'], 'exist', 'skipOnError' => true, 'targetClass' => Tujuan::className(), 'targetAttribute' => ['id_tujuan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tujuan' => 'Id Tujuan',
            'sasaran' => 'Sasaran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTujuan()
    {
        return $this->hasOne(Tujuan::className(), ['id' => 'id_tujuan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStrategis()
    {
        return $this->hasMany(Strategi::className(), ['id_sasaran' => 'id']);
    }
}
