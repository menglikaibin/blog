<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/25
 * Time: 11:09
 */
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    public $imageFile;

    public function rules()
    {
        return
            [
                ['imageFile','file','skipOnEmpty'=>false,'extensions'=>'png,jpg'],
            ];
    }

    public function upload()
    {
        if ($this->validate())
        {
            $this->imageFile->saveAs('/uploads'.$this->imageFile->baseName.'.'.
                $this->imageFile->extension);
            return true;
        }
        return false;
    }
}