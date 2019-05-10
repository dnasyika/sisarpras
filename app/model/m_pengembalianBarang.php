<?php

class m_pengembalianBarang extends model {

    function __construct() {
        parent::__construct();
    }
    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_barang pb join tb_barang b ON barang_id = b.id
         WHERE status_pinjam = 2
        GROUP BY nama_kegiatan");
    }
    function getDetail($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_barang pb join tb_barang b ON barang_id = b.id
         where nama_kegiatan='$id'");
    }
    function getInfo($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_barang pb join tb_barang b ON barang_id = b.id
         where nama_kegiatan='$id' GROUP BY nama_kegiatan");
    }
    function kembaliBarang($id) {
        $this->db->update("UPDATE tb_peminjaman_barang SET status_pinjam= 3 where nama_kegiatan = '$id'");
    }
  }
