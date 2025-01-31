<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Produk extends CI_Model
{
    function getAll()
    {
        return $this->db->select('*')
            ->from('produk')
            ->join('kategori', 'produk.kategori_id = kategori.id_kategori', 'left')
            ->join('status', 'produk.status_id = status.id_status', 'left')
            ->get()->result();
    }

    function getProductById($id)
    {
        return $this->db->get_where('produk', ['id_produk' => $id])->result();
    }

    function insertProduct($data)
    {
        $this->db->insert('produk', $data);
    }

    function updateProduct($data, $id)
    {
        $this->db->update('produk', $data, ['id_produk' => $id]);
    }

    function delete($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }
}
