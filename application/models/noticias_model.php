<?php

/**
 * noticias_model
 *
 * Projeto:
 * 
 * @since 08/11/2014
 * @author Jhonatas C. Faria
 */
class Noticias_model extends CI_Model {

    private $_table = "noticias";

    function find($maximo = false, $inicio = false) {

        if ($maximo !== false && $inicio !== false) {
            $this->db->limit($maximo, $inicio);
        }

        return $this->db->get($this->_table);
    }

}
