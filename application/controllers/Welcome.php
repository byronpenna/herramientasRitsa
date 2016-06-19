<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// variables 
		private $_model;
	// metodos magicos
		public function __construct(){
			parent::__construct();

			$this->load->model("acciones/WelcomeModel");
			$this->_model = new WelcomeModel();
		}
	// organizar categorias
		public function ordenCategoria($categorias){
			$nivel = Array();
			foreach ($categorias as $key => $categoria) {
				if($categoria->id_padre_fk == null){
					$nivel[$categoria->idCategoria] = new stdClass();
					$nivel[$categoria->idCategoria]->nombre = $categoria->categoria;
					$nivel[$categoria->idCategoria]->elementos = array();
				}else{
					array_push($nivel[$categoria->id_padre_fk]->elementos, $categoria);
				}
			}
			return $nivel;
		}
	// url 
		public function index()
		{
			$categorias = $this->ordenCategoria($this->_model->getCategorias());
			$data = array(
				'categorias' => $categorias
				//'categorias' => $this->_model->getCategorias()
			);
			$this->load->view('url/welcome/index.php',$data);
		}
}
