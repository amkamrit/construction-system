<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Runningprojectipc".
 *
 * @property integer $Project_Id
 * @property string $Project_Name
 * @property string $Project_Ipc
 */
class Runningprojectipc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'Runningprojectipc';
    }

    /**
     * @inheritdoc
     */
    
    public function rules()
    {
        return [
            [['Project_Id', 'Project_Name', 'Project_Ipc'], 'required'],
            [['Project_Id'], 'integer'],
            [['Project_Name'], 'string', 'max' => 200],
            [['Project_Ipc'], 'string', 'max' => 3000],
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
            'Project_Ipc' => 'Project  Ipc',
            'Images'=>'Images'
        ];
    }
}
