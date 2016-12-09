<?php

cLass accountsController extends AppsController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$conditions = array(
		"conditions" => "accounts.user_id = users.id"
		);
		$accounts = $this->accounts->find("accounts, users", "all", $conditions);
		$accountsCount = $this->accounts->find("accounts", "count");
		$this->set(compact("accounts", "accountsCount"));
	}

	public function add()
	{
		/*if ($_SESSION["type_name"] == "administrador") 
		{*/
			if ($_POST) 
			{

				if ($this->accounts->save("accounts", $_POST)) 
				{
					$this->redirect(array("controller"=>"accounts"));
				} else 
				{
					$this->redirect(array("controller"=>"accounts", "method"=>"add"));
				}
			}

			$this->set("users", $this->accounts->find("users"));
			$this->_view->setView("add");
		/*} else 
		{
			$this->redirect(array("controller"=>"accounts"));
		}*/
	}

	public function edit($id)
	{
		if ($id) 
		{
			$options = array(
			"conditions" => "id=".$id
			);
			$account = $this->accounts->find("accounts","first", $options);
			$this->set("account", $account);
			$this->set("users", $this->accounts->find("users"));
		}

		if ($_POST) 
		{
			
			if ($this->accounts->update("accounts", $_POST)) 
			{
				$this->redirect(
					array(
						"controller"=>"accounts"
					)
				);
			} else 
			{
				$this->redirect(
					array(
						"controller"=>"accounts",
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
			if ($this->accounts->delete("accounts", $conditions)) 
			{
				$this->redirect(array("controller"=>"accounts"));
			} else 
			{
				$this->redirect(array("controller"=>"accounts", "method"=>"add"));
			}
		}
	}

}
