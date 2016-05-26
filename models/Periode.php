<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "periode".
 *
 * @property string $id
 * @property integer $tahun_awal
 * @property integer $tahun_akhir
 */
class Periode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tahun_awal', 'tahun_akhir'], 'required'],
            [['tahun_awal', 'tahun_akhir'], 'integer'],
            [['id'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tahun_awal' => 'Tahun Awal',
            'tahun_akhir' => 'Tahun Akhir',
        ];
    }
    
    public static function listPeriode() {
        $list = Periode::find()->asArray()->all();
        return ArrayHelper::map($list, 'id', function ($list) {
            return $list['tahun_awal'].'-'.$list['tahun_akhir'];
        });
    }
}
