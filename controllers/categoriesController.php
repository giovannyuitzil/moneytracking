<?php
/**
 * Clase categoriesController
 * @author giovanny uitzil<giovanny.giovannyut@gmail.com>
 */
cLass categoriesController extends AppsController
{
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Metodo Index
	 * Metodo que permite hacer el listado de las categorias
	 * @return array Conjunto de categorias a mostrar
	 * @author giovanny uitzil<giovanny.giovannyut@gmail.com>
	 */
	public function index()
	{
		$categories = $this->categories->find("categories", "all");
		$categoriesCount = $this->categories->find("categories", "count");
		$this->set(compact("categories", "categoriesCount"));
	}

	public function add()
	{
		/*if ($_SESSION["type_name"] == "administrador") 
		{*/

			if ($_POST) 
			{
				$pass = new password();
				$_POST["password"] = $pass->getPassword($_POST["password"]);
				if ($this->categories->save("categories", $_POST)) 
				{
					$this->redirect(array("controller"=>"categories"));
				} else 
				{
					$this->redirect(array("controller"=>"categories", "method"=>"add"));
				}
			}

			$this->set("categories", $this->categories->find("categories"));
			$this->_view->setView("add");
		/*} else 
		{
			$this->redirect(array("controller"=>"categories"));
		}*/
	}

	public function edit($id)
	{

		if ($id) 
		{
			$options = array(
				"conditions" => "id=".$id
			);
			$category = $this->categories->find("categories","first", $options);
			$this->set("category", $category);
			$this->set("categories", $this->categories->find("categories"));
		}

		if ($_POST) 
		{

			if ($this->categories->update("categories", $_POST)) 
			{
				$this->redirect(
					array(
						"controller"=>"categories"
					)
				);
			} else 
			{
				$this->redirect(
					array(
						"controller"=>"categories",
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
			if ($this->categories->delete("categories", $conditions)) 
			{
				$this->redirect(array("controller"=>"categories"));
			} else 
			{
				$this->redirect(array("controller"=>"categories", "method"=>"add"));
			}
		}
	}

}
