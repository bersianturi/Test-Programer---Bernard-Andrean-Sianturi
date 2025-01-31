<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Status extends CI_Model
{
    function getAll()
    {
        return $this->db->get('status')->result();
    }
}
