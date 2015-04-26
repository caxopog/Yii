<?php 

namespace app\models;

use yii\base\Model;

class EntityForm extends Model 
{
	public $name;
	public $email;
	public $phone;
	
	public function rules()
	{
		return [
			[['name','email','phone'],'required'],
			['email','email'],
			//['phone','phone'],
		];
	}
}