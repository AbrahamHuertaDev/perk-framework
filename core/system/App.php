<?php


$run     = new \Whoops\Run;
$handler = new \Whoops\Handler\PrettyPageHandler;
$JsonHandler = new \Whoops\Handler\JsonResponseHandler;

$run->pushHandler($JsonHandler);
$run->pushHandler($handler);
$run->register();


/**
*
*/
class App
{
	static $conf;

	public static function init($conf)
	{
		foreach ($conf as $key => $value) {
			self::$conf[$key] = $value;
		}

		$url = static::parseURL();

		static::make($url);
	}

	public static function parseURL()
	{
		if(Input::get('url'))
			return explode('/', filter_var(rtrim(Input::get('url'), '/'), FILTER_SANITIZE_URL));
	}

	public static function camelCase($str, array $noStrip = [])
	{
	        // non-alpha and non-numeric characters become spaces
	        $str = preg_replace('/[^a-z0-9' . implode("", $noStrip) . ']+/i', ' ', $str);
	        $str = trim($str);
	        // uppercase the first character of each word
	        $str = ucwords($str);
	        $str = str_replace(" ", "", $str);
	        $str = lcfirst($str);

	        return $str;
	}


	public static function make($url)
	{
		if(file_exists(APP . "controllers/{$url[0]}.php"))
		{
			self::$conf['controller'] = $url[0];
			unset($url[0]);
		}

		require_once APP . 'controllers/' . self::$conf['controller'] . '.php';

		$controller = self::camelCase(self::$conf['controller'] . 'Controller');

		self::$conf['controller'] = new $controller;

		if(isset($url[1]))
		{
			if(method_exists(self::$conf['controller'], $url[1]))
			{
				self::$conf['method'] = $url[1];
				unset($url[1]);
			}
		}

		self::$conf['params'] = $url ? array_values($url) : [];



		call_user_func_array([self::$conf['controller'], self::$conf['method']], self::$conf['params']);
	}
}
