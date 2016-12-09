<?php

cLass typesController extends AppsController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($_SESSION["type_name"] != "administrador") 
		{
			$this->redirect(array("controller"=>"pages"));
		}

		$types = $this->types->find("types", "all");
		$typesCount = $this->types->find("types", "count");
		$this->set(compact("types", "typesCount"));
	}

	public function add()
	{
		if ($_SESSION["type_name"] == "administrador") 
		{

			if ($_POST) 
			{

				if ($this->types->save("types", $_POST)) 
				{
					$this->redirect(array("controller"=>"types"));
				} else 
				{
					$this->redirect(array("controller"=>"types", "method"=>"add"));
				}
			}

			$this->set("types", $this->types->find("types"));
			$this->_view->setView("add");
		} else 
		{
			$this->redirect(array("controller"=>"types"));
		}
	}

	public function edit($id)
	{
		if ($id) 
		{
			$options = array(
				"conditions" => "id=".$id
			);
			$type = $this->types->find("types","first", $options);
			$this->set("type", $type);
			$this->set("types", $this->types->find("types"));
		}

		if ($_POST) 
		{

			if ($this->types->update("types", $_POST)) 
			{
				$this->redirect(
					array(
						"controller"=>"types"
					)
				);
			} else 
			{
				$this->redirect(
					array(
						"controller"=>"types",
						"method"=>"edit/".$_POST["id"]
					)
				);
			}
		}

	}

	public function delete($id)
	{
		if ($_GET) 
		{
			$conditions = "id=".$id;
			if ($this->types->delete("types", $conditions)) 
			{
				$this->redirect(array("controller"=>"types"));
			} else 
			{
				$this->redirect(array("controller"=>"types", "method"=>"add"));
			}
		}
	}

}
