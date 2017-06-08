<?php

/**
*
*/
class Input
{
	public static function get($key)
	{
		if(isset($_GET[$key]))
		{
			return $_GET[$key];
		}

		if(isset($_POST[$key]))
		{
			return $_POST[$key];
		}
	}
}
