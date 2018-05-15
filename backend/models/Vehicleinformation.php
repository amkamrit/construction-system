<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "vehicleinformation".
 *
 * @property integer $Vechicle_id
 * @property string $Vechicle_Number
 * @property integer $Renew_Date
 * @property integer $Expire_Date
 * @property string $Working_Site
 * @property string $Images
 */
class Vehicleinformation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;

    public static function tableName()
    {
        return 'vehicleinformation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Vechicle_Number', 'Renew_Date', 'Expire_Date', 'Working_Site','Status',], 'required'],
            [['Renew_Date', 'Expire_Date'], 'string'],
            [['Working_Site'], 'string'],
            [['Vechicle_Number'], 'string', 'max' => 100],
            [['file'],'file'],
            [['Status'],'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Vechicle_id' => 'Vechicle ID',
            'Vechicle_Number' => 'Vechicle  Number',
            'Renew_Date' => 'Renew  Date',
            'Expire_Date' => 'Expire  Date',
            'Working_Site' => 'Working  Site',
            'file'=>'Image',
            'Status'=>'Status',
        ];
    }
}
