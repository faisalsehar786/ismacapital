<?php 
namespace App\helpers\facade;

use Illuminate\Support\Facades\Facade;

class CustomHelper extends Facade{
	public static function getFacadeAccessor(){
		return 'CH';
	}
}