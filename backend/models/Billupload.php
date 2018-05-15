<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "billupload".
 *
 * @property integer $Bill_Id
 * @property string $Bill_Number
 * @property string $Bill_Name
 * @property string $Bill_Amout
 * @property string $Bill_Image
 */
class Billupload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'billupload';
    }

    /**
     * @inheritdoc
     */
    public $file;
    public function rules()
    {
        return [
            [['Bill_Number', 'Bill_Name','Bill_Date', 'Bill_Amout'], 'required'],
            [['Bill_Number', 'Bill_Name', 'Bill_Date','Bill_Amout'], 'string', 'max' => 100],
            [['file'],'file']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Bill_Id' => 'Bill  ID',
            'Bill_Number' => 'Bill  Number',
            'Bill_Name' => 'Bill  Name',
            'Bill_Date'=>'Bill Date',  
            'Bill_Amout' => 'Bill  Amout',
            'file' => 'Bill  Image',
        ];
    }
}
