<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "skpd".
 *
 * @property string $id
 * @property string $nama
 * @property string $inisial
 * @property string $alamat
 * @property string $phone
 * @property string $email
 * @property string $pj_sakip
 *
 * @property Visi[] $visis
 */
class Skpd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'skpd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'inisial'], 'required'],
            [['id'], 'string', 'max' => 2],
            [['nama', 'alamat', 'email', 'pj_sakip'], 'string', 'max' => 200],
            [['inisial'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'inisial' => 'Inisial',
            'alamat' => 'Alamat',
            'phone' => 'Phone',
            'email' => 'Email',
            'pj_sakip' => 'Pj Sakip',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVisis()
    {
        return $this->hasMany(Visi::className(), ['id_skpd' => 'id']);
    }
    
    public static function listSkpd() {
        $list = Skpd::find()->all();
        return ArrayHelper::map($list, 'id', 'nama');
    }
}
