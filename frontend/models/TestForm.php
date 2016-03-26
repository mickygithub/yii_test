<?php
namespace frontend\models;
use yii\base\Model;
class TestForm extends Model{
public $fname;
public $lname;
public function rules() {
return[
[['fname','lname'],'required'],
];
}
public function attributeLabels() {
return[
'fname'=>'ชือ',
'lname'=>'นามสกุล'
];
}
}