<?php

class Load 
{
	public function view($route, $vars)
	{
		extract($vars);
		require VIEWS_PATH . $route;
	}
}