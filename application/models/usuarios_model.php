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
    
    public function save($form_data){
        return $this->db->insert($this->_table, $form_data);
    }
    
    public function update($id, $form_data){
        $this->db->where("id", $id);
        return $this->db->update($this->_table, $form_data);
    }
}
