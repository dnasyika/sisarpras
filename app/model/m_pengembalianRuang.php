<?php

class m_pengembalianRuang extends model {

    function __construct() {
        parent::__construct();
    }
    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
        WHERE status_pinjam = 2
        GROUP BY nama_kegiatan");
    }
    function getDetail($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
        JOIN tb_penanggung_jawab pj ON penanggung_jawab_id = pj.id where nama_kegiatan='$id'");
    }
    function getInfo($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
        where nama_kegiatan='$id' GROUP BY nama_kegiatan");
    }

    function kembaliRuang($id) {
        $this->db->update("UPDATE tb_peminjaman_ruangan SET status_pinjam= 3 where nama_kegiatan = '$id'");
    }
}
