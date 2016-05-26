<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "misi".
 *
 * @property string $id
 * @property string $id_visi
 * @property string $misi
 *
 * @property Visi $idVisi
 * @property Tujuan[] $tujuans
 */
class Misi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'misi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_visi', 'misi'], 'required'],
            [['id'], 'string', 'max' => 6],
            [['id_visi'], 'string', 'max' => 4],
            [['misi'], 'string', 'max' => 255],
            [['id_visi'], 'exist', 'skipOnError' => true, 'targetClass' => Visi::className(), 'targetAttribute' => ['id_visi' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_visi' => 'Id Visi',
            'misi' => 'Misi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdVisi()
    {
        return $this->hasOne(Visi::className(), ['id' => 'id_visi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTujuans()
    {
        return $this->hasMany(Tujuan::className(), ['id_misi' => 'id']);
    }
}
