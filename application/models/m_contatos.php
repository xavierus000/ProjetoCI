<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_contatos extends CI_Model 
{
	public function inserir($dados)
	{
		if($this->db->insert("contatos",$dados))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function excluir($tabela,$campo,$id)
	{
		return $this->db->where($campo,$id)->delete($tabela);
	}
	public function atualizar($tabela,$campo,$id,$dados)
	{
		if($this->db->where($campo, $id)->update($tabela,$dados))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function consultar()
	{
       return $this->db->get("contatos")->result();
	}
}