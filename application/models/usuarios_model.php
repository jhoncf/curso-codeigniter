<?php

/**
 * usuarios_model
 *
 * Projeto:
 * 
 * @since 04/10/2014
 * @author Jhonatas C. Faria
 */
class usuarios_model extends CI_Model{
    
    private $_table = "usuarios";
    
    public function find($id = NULL){
        if($id != NULL){
            $this->db->where("id", $id);
        }
        
        return $this->db->get($this->_table);
    }
    
    /**
     * Método que insere na tabela
     * 
     * @param Array $form_data
     * @return object
     */
    public function save($form_data){
        return $this->db->insert($this->_table, $form_data);
    }
    
    /**
     * 
     * @param type $id
     * @param type $form_data
     * @return type
     */
    public function update($id, $form_data){
        $this->db->where("id", $id);
        return $this->db->update($this->_table, $form_data);
    }
    
    public function delete($id){
        $this->db->where("id", $id);
        $this->db->delete($this->_table);
    }
    
    public function verifica_usuario($login, $senha){
        $this->db->where("login", $login);
        $this->db->where("senha", md5($senha));
        return $this->db->get($this->_table)->num_rows();
    }
}
