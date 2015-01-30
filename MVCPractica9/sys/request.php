<?php
    class Request{
        
        static private $pregunta=array();
        static private $contador;
        static private $accion;
        static private $tpregunta;
        static private $parametro=array();
        static private $parametros;

        static function retrieve(){	
           self::$pregunta =  explode('/',$_SERVER['REQUEST_URI']); 
            return self::$pregunta;    
        }
       static function getCount(){	//cuenta los elementos del Array
           if(empty(self::$pregunta[2])){
                self::$contador="home";
            }else{
            self::$contador=self::$pregunta[2];
            } 
            return self::$contador;
        }

        static function getParams(){	//agarra los parametos.
            $tpregunta = count(self::$pregunta);
            $j2=0;
            if($tpregunta > 3){
                if($tpregunta % 3 != 0){
    	            for($j=2;$j < $tpregunta;$j++){ 
    	            	self::$parametro[$j2]= self::$pregunta[$j];
           				$j2++;  
    	            }
                    return self::$parametro;
            	}else{
            		echo "Parametros incorrectos";
            	}
            }else{
                echo "Parameteros correctos";
            }
        }

          static function getAction(){  //Guarda la acción en una variable.
           
            if(empty(self::$pregunta[3])){
                self::$accion="Home";
               
            }else{
                    self::$accion = self::$pregunta[3];
            }  
            return self::$accion;
        }
    }
?>