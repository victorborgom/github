<?php

spl_autoload_register(null, false);
spl_autoload_register('KAutoloader::Sysloader');

class KAutoloader
{
	public static function SysLoader($class)
	{
		$filename = strtolower($class) . '.php';
		$file =ROOT.'sys'.DS.$filename;
		if (!is_readable($file)){
			return self::ContLoader($class);
		}
		include $file;
	}

	public static function ContLoader($class)
	{
		$filename = strtolower($class) . '.php';
		$file =ROOT.'app'.DS.'controllers'.DS.$filename;
		
		if (!file_exists($file)){
			return self::ModLoader($class);
		}
		include $file;
	}

	public static function ModLoader($class){
		$filename = strtolower($class) . '.php';
		$file =ROOT.'app'.DS.'models'.DS.$filename;

		
		if (!file_exists($file)){
			return self::ViewsLoader($class);
		}
		include $file;
	}

	public static function ViewsLoader($class){
		$filename = strtolower($class) . '.php';
		$file =ROOT.'app'.DS.'views' .DS. $filename;
		
		if (!file_exists($file)){
			return false;
		}
		include $file;
	}
	

}

class Coder{
	public static function code($var){
		echo '<pre>'.$var.'</pre>';
	}
	
	public static function code_var($var){
		echo '<pre>'.var_dump($var).'</pre>';
	}
}







