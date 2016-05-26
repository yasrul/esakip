<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tujuan".
 *
 * @property string $id
 * @property string $id_misi
 * @property string $tujuan
 *
 * @property Misi $idMisi
 */
class Tujuan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tujuan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_misi', 'tujuan'], 'required'],
            [['id'], 'string', 'max' => 8],
            [['id_misi'], 'string', 'max' => 6],
            [['tujuan'], 'string', 'max' => 255],
            [['id_misi'], 'exist', 'skipOnError' => true, 'targetClass' => Misi::className(), 'targetAttribute' => ['id_misi' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_misi' => 'Id Misi',
            'tujuan' => 'Tujuan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMisi()
    {
        return $this->hasOne(Misi::className(), ['id' => 'id_misi']);
    }
}
