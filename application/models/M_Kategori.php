<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Kategori extends CI_Model
{
    function getAll()
    {
        return $this->db->get('kategori')->result();
    }
}
