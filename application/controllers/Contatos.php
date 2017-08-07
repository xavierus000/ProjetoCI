<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos extends CI_Controller {
    
	public function index()
	{
		$this->load->model("m_contatos");
		$dados['resultado'] = $this->m_contatos->consultar();
        $this->load->view("v_consulta",$dados);
	}
	
	public function cadastra()
	{
		$this->load->view("v_cadastro");
	}
	public function cadastrar()
	{
		$dados = array(
            "nome"  => $this->input->post('nome'),
            "fone"  => $this->input->post('fone'),
            "email" => $this->input->post('email'));
        $this->load->model("m_contatos");
        $this->m_contatos->inserir($dados);
	}
	public function excluir()
	{
		echo"Excluído";
	}
	public function altera()
	{
		echo"Excluído";
	}
}
