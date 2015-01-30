<?php

final class User extends Controller {
		function __construct ($params){
				parent::__construct ($params);
				$this->model = new mUser;
		}



		function show(){
		$data=Request::getParams();
		$valor1 = $data[2];
		$tamany = $this->model->show($valor1);
		$this->loader->vista('vUser.php', $tamany);
				

		}
	

}