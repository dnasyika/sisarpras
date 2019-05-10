<?php

class m_peminjamanBarang extends model {

    function __construct() {
        parent::__construct();
    }
    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_barang pb join tb_barang b ON barang_id = b.id
         WHERE status_pinjam = 0
        GROUP BY nama_kegiatan");
    }
    function getDataUser()
    {
        $nama = explode(' ', session::get('bg-username'));
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_barang pb join tb_barang b ON barang_id = b.id
        JOIN tb_user u on u.id_user = pb.id_user  WHERE pb.id_user = '$nama[0]' GROUP BY nama_kegiatan");
    }
    function getDetail($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_barang pb join tb_barang b ON barang_id = b.id
         where nama_kegiatan='$id'");
    }
    function getInfo($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_barang pb join tb_barang b ON barang_id = b.id
        JOIN tb_status s on id_status = status_pinjam where nama_kegiatan='$id' GROUP BY nama_kegiatan");
    }
    function barang()
    {
        return $this->db->selectAll("SELECT * FROM tb_barang");
    }

    function tambah($nama_peminjam, $nama_kegiatan, $barang_id, $jumlah, $tgl_pinjam, $tgl_selesai) {
        $user = explode(' ', session::get('bg-username'));
        $stmt = $this->db->prepare("INSERT INTO tb_peminjaman_barang (id, id_user, nama_peminjam, nama_kegiatan, barang_id, jumlah, tgl_pinjam, tgl_selesai, status_pinjam, created_at, updated_at ) VALUES (null, '$user[0]', '$nama_peminjam', '$nama_kegiatan', '$barang_id', '$jumlah', '$tgl_pinjam', '$tgl_selesai', '0', CURRENT_DATE , CURRENT_DATE )");
        $stmt->execute();
    }

    function verifikasiKtu($id) {
        $this->db->update("UPDATE tb_peminjaman_barang SET status_pinjam= 1 where nama_kegiatan = '$id'");
    }
  }
