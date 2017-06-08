<?php 

/**
* 
*/
class URL
{
	
	public static function to($value)
	{
		return 'http://' . $_SERVER['SERVER_NAME'] . '/' . DIR . '/' .$value;
	}
}