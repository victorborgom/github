<?php  
Class Home extends Controller{
	function __construct($params){
		parent::__construct($params);                
                $this->model=new mHome;
	}	

	function home(){

        $this->load->view('vhome.php', $this->model->userInfo());

	}

}
?>