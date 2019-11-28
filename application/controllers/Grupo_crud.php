<?php
class Grupo_crud extends CI_Controller{

	public function index(){
		$crud = new Grocery_CRUD();
		$crud->set_table("grupo");
		$crud->set_subject("Grupo");
        $crud->fields("lugar","regente","dia_grupo","materia_grupo","desc_grupo");
        
		$crud->required_fields("lugar","regente","dia_grupo","materia_grupo","desc_grupo");
		$crud->edit_fields("lugar","regente","dia_grupo","materia_grupo","desc_grupo");
		$form = $crud->render();
		//$this->load->view("site/cabecalho");
		$this->load->view("crud/grupo", $form);
		//$this->load->view("site/rodape");	

	}
}

?>