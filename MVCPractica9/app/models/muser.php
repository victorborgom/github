<?php 
	class mUser{

		public function show($valor1){
			$tamany = strlen($valor1);
			return array(
				'tam'=> $tamany,
				'valor1'=>$valor1
			);
		}
	}