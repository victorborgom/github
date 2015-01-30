<?php
	
	class Config{
		private static $instancia;
		private static $data=array();

		public static function getIns(){
				
				if(self::$instancia  instanceof self){
					
					self::$instancia = new Config();
				}
				return self::$instancia;

		}

		public function set($key,$value){
				if(!array_key_exists($key, self::$data)){
				self::$data[$key] = $value;
				return true;
			}else{
				return false;
	
			}
		}

		public function get($key){
			if(!array_key_exists($key,self::$data)){
				return self::$data[$key];
			}else{
			return null;
			}				
		}

		public static function clearing(){

			self::$data=array();

		}

	}




