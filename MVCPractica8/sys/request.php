<?php
    class Request{
        
        static private $query=array();
        static private $cont;
        static private $action;
        static private $totalq;
        static private $param=array();
        static private $Params;

     static function retrieve(){
            $array_query=explode('/',$_SERVER['REQUEST_URI']);
            //Coder::code_var($array_query);
            array_shift($array_query);
            //Coder::code_var($array_query);
 
            if ((($array_query[0]==APP_W))||(substr_count(APP_W, $array_query[0])>0)){
            array_shift($array_query);
            }
        //cal estudiar que passa amb l'últim element si aquest és ""
            if (end($array_query)=="")
            {
                array_pop($array_query);
            }
                self::$query=$array_query;
         Coder::code_var($array_query); //Mostrar array url
  }

        static function getCont(){	//Coge el controlador

           if(empty($query[1]))
           {
           self::$cont="home";   
           }else
           {
           self::$cont = self::$query[1];   
           }
           
           return self::$cont; 
        }

        

        static function getAction(){	//Coge la action
            
           if(empty($query[2]))
           {
           self::$action="home";   
           }else
           {
           self::$action = self::$query[2];   
           }
           
            return self::$action; 
        }

        static function getParams(){	//Coge los parametros siempre que sean pares
            $totalq = count(self::$query);
            $i2=0;
            if($totalq > 3){
                if($totalq % 3 != 0){
    	            for($i=2;$i<$totalq;$i++){ 
    	            	self::$param[$i2]= self::$query[$i];
                        $i2++;  
    	            }
                    return self::$param;
            	}else{
            		echo "Parametros incorrectos";
            	}
            }else{
                echo "Parameters";
            }
        }
    }
?>