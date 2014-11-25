<?php

/**
 * portfolio_model
 *
 * Projeto:
 * 
 * @since 08/11/2014
 * @author Jhonatas C. Faria
 */
class Portfolio_model extends CI_Model {

    private $_table = "portfolio";

    function find() {
        $this->db->order_by("ordem");
        return $this->db->get($this->_table);
    }

}
