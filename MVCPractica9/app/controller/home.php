<?php

	Class Home extends Controller{
		function __construct($params){

			parent::__construct($params);
			$this->model = new mHome;	
					


		}

			function home(){
				$this->loader->vista('vHome.php',$this->model->Info());

			}

			function sum(){
					$data=Request::getParams();
					$valor1 = $data[3];
					$valor2 = $data[5];
					$a = $data[1];
					$b= $data[4];
					$this->loader->vista('vSuma.php',$this ->model->sum($a,$b,$valor1,$valor2));

			}

	}