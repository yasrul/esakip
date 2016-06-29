<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "misi".
 *
 * @property string $id
 * @property string $id_renstra
 * @property string $misi
 *
 * @property Renstra $idRenstra
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
            [['id', 'id_renstra', 'misi'], 'required'],
            [['id'], 'string', 'max' => 6],
            [['id_renstra'], 'string', 'max' => 4],
            [['misi'], 'string', 'max' => 255],
            [['id_renstra'], 'exist', 'skipOnError' => true, 'targetClass' => Renstra::className(), 'targetAttribute' => ['id_renstra' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_renstra' => 'Id Renstra',
            'misi' => 'Misi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRenstra()
    {
        return $this->hasOne(Renstra::className(), ['id' => 'id_renstra']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTujuans()
    {
        return $this->hasMany(Tujuan::className(), ['id_misi' => 'id']);
    }
    
    public static function getMaxid($relation_id) {
        $q = 'select MAX(id) from misi where id_renstra='.$relation_id;
        $cmd = \Yii::$app->db->createCommand($q);
        return $cmd->queryScalar();
    }
}
