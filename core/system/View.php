<?php
use Philo\Blade\Blade;
/**
*
*/
class View
{
	protected static $instance;
	static $view, $data;

	public function __construct($view)
	{
		self::$view = $view;

		self::show();
	}

	public static function make($view)
	{
		if(!isset(self::$instance))
			self::$instance =  new View($view);

		return self::$instance;
	}

	public static function show()
	{
		$data =  self::$data;

		/*$h2o = new h2o(APP . 'views/' . self::$view . '.php');

		print $h2o->render(compact('data'));*/


		$views = APP . 'views';
		$cache = APP . 'cache';

		$blade = new Blade($views, $cache);
		if($data == null)
		{
			print $blade->view()->make(self::$view);
		}
		else
		{
			print $blade->view()->make(self::$view, $data);
		}

	}

	public function with($name, $var = null)
	{
		if(is_array($name))
			self::$data = $name;
		else
			self::$data[$name] = $var;

		static::show();
	}
}
