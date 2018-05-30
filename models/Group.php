<?php

namespace vendor\kouosl\group\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $grup_id
 * @property string $grup_ad
 * @property string $grup_uyeler
 * @property string $grup_aciklama
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grup_id', 'grup_ad', 'grup_uyeler', 'grup_aciklama'], 'required'],
            [['grup_id'], 'integer'],
            [['grup_uyeler', 'grup_aciklama'], 'string'],
            [['grup_ad'], 'string', 'max' => 32],
            [['grup_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'grup_id' => 'Grup ID',
            'grup_ad' => 'Grup Ad',
            'grup_uyeler' => 'Grup Uyeler',
            'grup_aciklama' => 'Grup Aciklama',
        ];
    }
}
