<?php 
include_once(APPPATH.'controllers/generales/PadreController.php');
class Resistencias extends PadreController
{
	
	function __construct()
	{
		parent::__construct();
	}
	// url 
		public function Calculadora(){
			$colores 	= array("Negro","Cafe","Rojo","Naranja","Amarillo","Verde","Azul","Violeta","Gris");
			$data 		= array('colores' => $colores );
			$this->load->view("url/Resistencias/calculadora.php",$data);
		}
}