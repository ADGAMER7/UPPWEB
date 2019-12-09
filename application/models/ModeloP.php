<?php

class ModeloP extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function mostrar(){
	$consulta=$this->db->query("select * from usuario");
	return $consulta->result();
	}

	public function insertar($nombre,$apellido,$correo,$usuario,$clave,$telefono){
	$this->db->query("INSERT INTO usuario VALUES (NULL,'$nombre','$apellido','$correo','$clave','$telefono','$usuario')");
	}
	
	public function buscar_persona($id){
	$this->db->where('Id',$id);
	$consulta=$this->db->get('Usuario');
	return $consulta->row();
}

	public function guardar($dato){
	$this->db->insert('Usuario',$dato);
}

	public function actualizar($id,$dato){
		$this->db->where('Id',$id);
		$consulta=$this->db->update('Usuario',$dato);
}


	public function eliminar($id){
		$this->db->where('Id',$id);
		$this->db->delete('Usuario');

	}
}

?>