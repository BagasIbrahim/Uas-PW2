<?php

class p_pgw extends CI_Model {
    public function get_data ()
{
    return $this->db->get('tb_pgw')->result_array();
}
}