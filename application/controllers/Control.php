<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	


	public function __construct(){
		parent::__construct();
		$this->load->model('ModeloP');
	}
	
	//public function loginAd()
	//{
	//	$V1=$_POST['usuario'];
	//	$V2=$_POST['clave'];
	//	$datos=$this->ModeloP->loginAd($V1);
	//	$login=$this->ModeloP->validar($datos,$V2)
	//	
	//	if($formulario2==1){
	//		$matricula=$V1;
	//		$this->load->view('header');
	//		$this->load->view('admin');
	//		$this->load->view('footer');
	//	}
	//	else{
	//		$this->load->view('header');
	//		$this->load->view('index');
	//		$this->load->view('footer');
	//	}
	//}
	public function menuDes()
	{
		$this->load->view('menuD');
	}

	public function form()
	{
		$this->load->view('login');
	}

	public function index()
	{
		$this->load->view('formulario2');
	}

	public function perfil()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function administrador()
	{
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
	}

	public function ListaC()
	{
		$this->load->view('header');
		$this->load->view('ppalcult');
		$this->load->view('footer');
	}
	public function ListaD()
	{
		$this->load->view('header');
		$this->load->view('ppaldepo');
		$this->load->view('footer');
	}
	public function ajedrez()
	{
		$this->load->view('header');
		$this->load->view('C1');
		$this->load->view('footer');
	}
	public function charreria()
	{
		$this->load->view('header');
		$this->load->view('C2');
		$this->load->view('footer');
	}
	public function cine()
	{
		$this->load->view('header');
		$this->load->view('C3');
		$this->load->view('footer');
	}
	public function dibujo()
	{
		$this->load->view('header');
		$this->load->view('C4');
		$this->load->view('footer');
	}
	public function manga()
	{
		$this->load->view('header');
		$this->load->view('C5');
		$this->load->view('footer');
	}
	public function zumba()
	{
		$this->load->view('header');
		$this->load->view('C6');
		$this->load->view('footer');
	}
	public function baileS()
	{
		$this->load->view('header');
		$this->load->view('C7');
		$this->load->view('footer');
	}
	public function acondicionamiento()
	{
		$this->load->view('header');
		$this->load->view('D1');
		$this->load->view('footer');
	}
	public function atletismo()
	{
		$this->load->view('header');
		$this->load->view('D2');
		$this->load->view('footer');
	}
	public function basquetbol()
	{
		$this->load->view('header');
		$this->load->view('D3');
		$this->load->view('footer');
	}
	public function crossTraning()
	{
		$this->load->view('header');
		$this->load->view('D4');
		$this->load->view('footer');
	}
	public function americano()
	{
		$this->load->view('header');
		$this->load->view('D5');
		$this->load->view('footer');
	}
	public function futbolA()
	{
		$this->load->view('header');
		$this->load->view('D6');
		$this->load->view('footer');
	}
	public function futbolR()
	{
		$this->load->view('header');
		$this->load->view('D7');
		$this->load->view('footer');
	}
	public function taekwondo()
	{
		$this->load->view('header');
		$this->load->view('D8');
		$this->load->view('footer');
	}
	public function tennis()
	{
		$this->load->view('header');
		$this->load->view('D9');
		$this->load->view('footer');
	}
	public function voleibolP()
	{
		$this->load->view('header');
		$this->load->view('D10');
		$this->load->view('footer');
	}
	public function karate()
	{
		$this->load->view('header');
		$this->load->view('D11');
		$this->load->view('footer');
	}
	public function voleibolS()
	{
		$this->load->view('header');
		$this->load->view('D12');
		$this->load->view('footer');
	}
	public function guardar()
	{
		$nombre_usuario=$this->input->post('nombre');
		$apellido_usuario=$this->input->post('apellido');
		$correo_usuario=$this->input->post('correo');
		$usuario=$this->input->post('usuario');
		$clave_usuario=$this->input->post('clave');
		$telefono_usuario=$this->input->post('telefono');

		$dato=['Id'=>null,
		'Nombre'=>$nombre_usuario,
		'Apellido'=>$apellido_usuario,
		'Correo'=>$correo_usuario,
		'Usuario'=>$usuario,
		'Clave'=>$clave_usuario,
		'Telefono'=>$telefono_usuario,];

		$this->ModeloP->insertar($nombre_usuario,$apellido_usuario,$correo_usuario,$usuario,$clave_usuario,$telefono_usuario);
		redirect('Control/administrador');
	}
	public function editar($id){
		$dato['personaVista']=$this->ModeloP->buscar_persona($id);
		$this->load->view("editar",$dato);

	}

	public function actualizar (){
		$id=$this->input->post('Id');
		$nombre_persona=$this->input->post('Nombre');
		$apellido_persona=$this->input->post('Apellido');
		$correo_persona=$this->input->post('Correo');
		$clave_persona=$this->input->post('Clave');
		$usuario_persona=$this->input->post('Usuario');
		$telefono_persona=$this->input->post('Telefono');
		$dato=['Id'=>$id,
		'Nombre'=>$nombre_persona,
		'Apellido'=>$apellido_persona,
		'Correo'=>$correo_persona,
		'Clave'=>$clave_persona,
		'Usuario'=>$usuario_persona,
		'Telefono'=>$telefono_persona,
		];
		$this->ModeloP->actualizar($id,$dato);
		redirect('Control/administrador');
	}


		public function eliminar($id){
		$this->ModeloP->eliminar($id);
		redirect('Control/administrador');
	}

}