<?php


class Controller{
    public function view($view, $data = []){
		if(file_exists("../App/View/". $view . ".php")){
            require("../App/View/". $view . ".php");
        }
    }



    public function loadModel($model)
	{

		if(file_exists("../App/model/". strtolower($model) . ".php"))
		{

			include "../App/model/". strtolower($model). ".php";
			return $model = new $model();
		}
	}
}