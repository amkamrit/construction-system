<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bankgurantee".
 *
 * @property integer $Bank_Gurantee_id
 * @property string $Bank_Name
 * @property string $Project_Name
 * @property string $Entry_Date
 * @property string $Expire_Date
 * @property string $Gurantee_Image
 */
class Bankgurantee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'bankgurantee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Bank_Name', 'Project_Name', 'Entry_Date', 'Expire_Date'], 'required'],
            [['Bank_Name'], 'string', 'max' => 200],
            [['Project_Name', 'Entry_Date', 'Expire_Date'], 'string', 'max' => 300],
            [['file'],'file'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Bank_Gurantee_id' => 'Bank  Gurantee ID',
            'Bank_Name' => 'Bank  Name',
            'Project_Name' => 'Project  Name',
            'Entry_Date' => 'Entry  Date',
            'Expire_Date' => 'Expire  Date',
            'file' => 'Gurantee  Image',
        ];
    }
}
