<?php 
 
class januari extends CI_Model {   

    function calc_mejaJanuari($meja) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $meja);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }

    function calc_kursiJanuari($kursi) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $kursi);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_lemariJanuari($lemari) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $lemari);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_kitchenJanuari($kitchen) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $kitchen);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_pintuJanuari($pintu) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $pintu);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_bedJanuari($bed) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $bed);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_triplekJanuari($triplek) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $triplek);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }
    function calc_rakJanuari($rak) {
        $this->db->select_sum('stock');
        $this->db->where('kodeBulan','01');
        $this->db->where('tipeBarang', $rak);
        $query = $this->db->get('stockbarang');
        if ($query->num_rows() > 0) {
            return $array = $query->row()->stock;
        }
        else{
            return 0;
        }
    }














}