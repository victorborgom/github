<?php 
class Controller{
	public $model;
	protected $view;
	protected $params;
	protected $conf;

	public function __construct($params){
            $this->conf=  registry::getInstance();
            $this->params=$params;
            $this->load = new Load();
	}

}