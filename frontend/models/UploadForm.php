<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/25
 * Time: 11:09
 */
namespace frontend\models;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;

class UploadForm extends ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public static function tableName()
    {
        return 'upload';
    }


    public $image;

    public function rules()
    {
        return
            [
                [['image'],'file','skipOnEmpty'=>false,'extensions'=>'jpg,png']
            ];
    }

//    public function addImage()
//    {
//
//    }

//    public function upload()
//    {
//        if ($this->validate())
//        {
//            $this->imageFile->saveAs('uploads/'.$this->imageFile->baseName.'.'.$this->imageFile->extension);
//
//            return true;
//        }
//        else
//        {
//            return false;
//        }
//    }
}