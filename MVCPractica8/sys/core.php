<?php

class Core
{
    private static $config;
    public static $controller;
    public static $params = array();
        
  	public static function init()
    {
        $config = registry::getInstance();//index.php
        //$array=  Request::retrieve();

        static::router();  

    }

    public static function router()
    {
        $uri = explode('/', $_SERVER['REQUEST_URI']);
          //redirects Control to respective controller
          Request::retrieve();
          $route = Request::getCont();
          $action = Request::getAction(); 
           
          Coder::Code($route);
          Coder::Code($action);

          
          $fileroute = strtolower($route).'.php';


          if (is_file(APP.'controllers'.DS.$fileroute)) {
            $className = ucfirst($route);
               self::$controller=new $className(self::$params);
               return self::$controller->{$action}();
          }
          else {
               self::$controller=new Error;
          }  
    }

}
