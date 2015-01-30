<?php
	
	spl_autoload_register(null, false);
	spl_autoload_register('KAutoloader::Sysloader');
	
	

	class KAutoloader{
	public static function SysLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'sys/' .DS. $Filename;
			
			if (!is_readable($file)){
				return self::ContLoader($class);
			}
			include $file;
		}
		
	public static function ContLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'app'.DS.'controller'.DS.$Filename;
			
			if (!file_exists($file)){
				return self::ModLoader($class);
			}
			include $file;
		}
	public static function ModLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'app'.DS.'models'.DS.$Filename;
			
			if (!file_exists($file)){
				return self::ViewsLoader($class);
			}
			include $file;
		}
	public static function ViewsLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'app'.DS.'views' .DS. $Filename;
			
			if (!file_exists($file)){
				return false;
			}
			include $file;
		}
		
	}

	class Coder{

		static function code($var){
			echo '<pre>'.$var.'</pre>';
		}

		static function code_var($var){
			echo '<pre>'.var_dump($var).'</pre>';
		}


		

	
		
		
	}
