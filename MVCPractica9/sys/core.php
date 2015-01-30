<?php


class Core{ 
  private static $conf;
    public static $controller;
    public static $params = array();

	public static function init(){
         

            $conf=Config::getIns();
            $data = Request::retrieve();
            static::router();


      }

     public static function router(){
            $uri=explode('/',$_SERVER['REQUEST_URI']);
            //redirects Control to respective controller
            Request::retrieve();
            $route=Request::getCount();
            $accion=Request::getAction();      
            $fileroute=strtolower($route).'.php';
           
        if(is_file(APP."controller".DS.$fileroute)){
            $nombreClasse=ucfirst($route);
            self::$controller=new $nombreClasse(self::$params);
            return self::$controller->$accion();

                 }
           
              
            
            
            
        


	}
}