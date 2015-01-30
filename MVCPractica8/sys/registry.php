<?php 
class registry{
	private static $instance;
	private static $dades=array();

	public static function getInstance(){
		if(!self::$instance instanceof self){
			self::$instance = new registry();
		}

		return self::$instance;
	}

	public static function set($key, $values){
		if(!array_key_exists($key, self::$dades)){
			self::$dades[$key] = $values;
			return true;
		}else{
			return false;
		}

	}

	public static function get($key){
		if(array_key_exists($key, self::$dades)){
			return self::$dades[$key];
		}else{
			return null;
		}
	}

    public static function clear()  
    {  
        self::$dades = array();  
    } 
}