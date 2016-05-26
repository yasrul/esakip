<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "renstra".
 *
 * @property string $id
 * @property string $id_skpd
 * @property string $id_periode
 * @property string $visi
 *
 * @property Misi[] $misis
 * @property Skpd $idSkpd
 * @property Periode $idPeriode
 */
class Renstra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'renstra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_skpd', 'id_periode', 'visi'], 'required'],
            [['id'], 'string', 'max' => 4],
            [['id_skpd', 'id_periode'], 'string', 'max' => 2],
            [['visi'], 'string', 'max' => 255],
            [['id_skpd'], 'exist', 'skipOnError' => true, 'targetClass' => Skpd::className(), 'targetAttribute' => ['id_skpd' => 'id']],
            [['id_periode'], 'exist', 'skipOnError' => true, 'targetClass' => Periode::className(), 'targetAttribute' => ['id_periode' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_skpd' => 'ID SKPD',
            'id_periode' => 'ID Periode',
            'visi' => 'Visi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMisis()
    {
        return $this->hasMany(Misi::className(), ['id_renstra' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSkpd()
    {
        return $this->hasOne(Skpd::className(), ['id' => 'id_skpd']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPeriode()
    {
        return $this->hasOne(Periode::className(), ['id' => 'id_periode']);
    }
}
