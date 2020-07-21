<?php namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Home extends BaseController
{
	public function __construct()
	{
		//$this->load->model('UserModel','um');
	}

	public function index()
	{

		$estructura=view('index');
		//$this=>load=>model('UserModel');
		return $estructura;
	}

	public function formularios(){
		$request = service('request');
		//este array contiene los datos llamados del formulario d ela vista
		$datos= array("nombre"=> $request->getPost('nombre'),
		"correo"=> $request->getPost('correo'),
		"mensaje"=> $request->getPost('mensaje'));

		//este se esta usando
		$model = new UserModel();
		$id = $model->insert([
			"nombre"=>$request->getPost('nombre'),
			"correo"=>$request->getPost('email'),
			"mensaje"=>$request->getPost('mensaje'),
			
		]);

		echo '<script> window.location.href = "index.php"; </script>';
	}

	//--------------------------------------------------------------------

}
?>


