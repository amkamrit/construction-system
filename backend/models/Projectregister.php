<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Projectregister".
 *
 * @property integer $Project_Id
 * @property string $Project_Name
 * @property string $Start_Date
 * @property string $Expire_Date
 * @property string $Project_Beget
 * @property string $Images
 */
class Projectregister extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'Projectregister';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Project_Name', 'Start_Date', 'Expire_Date', 'Project_Beget','Status'], 'required'],
            [['Project_Name', 'Start_Date', 'Expire_Date'], 'string', 'max' => 100],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Project_Id' => 'Project  ID',
            'Project_Name' => 'Project  Name',
            'Start_Date' => 'Start  Date',
            'Expire_Date' => 'Expire  Date',
            'Project_Beget' => 'Project  Beget',
            'Status'=>'Status',
            'file' => 'Images',
        ];
    }
}
