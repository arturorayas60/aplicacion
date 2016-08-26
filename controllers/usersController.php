<?php 
class Users extends AppController
{
	public function __construct()
		{
		parent:: __construct();
		}

	public function index()
		{
			$users = $this->db->find("users","all");		
			$this->set("users",$users);
		}

	public function add(){
		if ($_POST) 
		{			
			$filter = new Validations();
			$pass = new Password();

			$_POST["password"] = $filter->sanitizeText($_POST["password"]);
			$_POST["password"] = $pass->getPassword($_POST["password"]);

			if ($this->db->save("users",$_POST))
			{
				$this->redirect(array("controller"=>"users"));
			}
			else
			{
				$this->redirect(array("controller"=>"users","action"=>"add"));
			}
		}
	}

	public function edit($args){
		if ($_POST) 
		{
			$filter = new Validations();
			$pass = new Password();

			#$_POST["password"] = $filter->sanitizeText($_POST["password"]);
			#$_POST["password"] = $pass->getPassword($_POST["password"]);

			if(!empty($_POST['new_password']))
			{
				$_POST["password"]= $filter->sanitizeText($_POST['new_password']);
				$_POST["password"]= $pass->getPassword($_POST['password']);
			}

			if($this->db->update("users",$_POST))
			{
				$this->redirect(array("controller"=>"users"));
			}
			else
			{
				$this->redirect(array("controller"=>"users", "action"=>"edit/".$args[0]));
			}			
		}

		$users = $this->db->find("users","first", array("conditions"=>"users.id=".$args[0]));
		$this->set("users", $users);

	}

	public function delete($args)
	{
				if ($_GET) {
		 if (!empty($_GET['id'])) {
		  $condition = "id=".$_GET['id'];
		 	$this->db->delete("users", $condition);
		 	if ($this->db->numberRows>0) {
		 		echo "Registro eliminado!";
		 	 }
		 	 else{
		 		echo "nose a eliminado";
		 	 }
		 }
		 }

	}

	public function login()
	{
		if($_POST)
		{
			$pass = new Password();
			$filter = new Validations();
			$auth = new Authorization();
			$username = $filter->sanitizeText($_POST["username"]);
			$password = $filter->sanitizeText($_POST["password"]);
			$options['conditions'] = " username = '$username'";			
			$usuario = $this->db->find("users", "first", $options);
			
			if($pass->isValid($password, $usuario['password']))
			{				
				$auth->login($usuario);
				$this->redirect(array("controller"=>"users"));
			}
			else
			{				
				echo"<script type='text/javascript'>
		     alert('Usuario Invalido');
		    window.location='usuarios/login';
		    </script>";	
			}

		}
	}
	
	public function logout()
	{
		$auth = new Authorization();
		$auth->logout();
	}

}
 ?>