<?php

class m_peminjamanRuang extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function getData()
    {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
         WHERE status_pinjam = 0");
    }

    function getDataUser()
    {
        $nama = explode(' ', session::get('bg-username'));
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
         JOIN tb_user u on u.id_user = pr.id_user  WHERE pr.id_user = '$nama[0]' GROUP BY nama_kegiatan");
    }
    function getDetail($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
        JOIN tb_penanggung_jawab pj ON penanggung_jawab_id = pj.id where nama_kegiatan='$id'");
    }
    function getInfo($id) {
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
        JOIN tb_status on id_status = status_pinjam where nama_kegiatan='$id' GROUP BY nama_kegiatan");
    }

    function ruangan()
    {
        return $this->db->selectAll("SELECT * FROM tb_ruangan");

    }

    function tambah($nama_peminjam, $nama_kegiatan, $ruangan, $tgl_pinjam, $tgl_selesai) {
        $user = explode(' ', session::get('bg-username'));
        $stmt = $this->db->prepare("INSERT INTO tb_peminjaman_ruangan (id, id_user, nama_peminjam, nama_kegiatan, ruangan_id, tgl_dipakai, tgl_selesai, status_pinjam, created_at, updated_at ) VALUES (null, '$user[0]', '$nama_peminjam',  '$nama_kegiatan', '$ruangan', '$tgl_pinjam', '$tgl_selesai',  '0', CURRENT_DATE , CURRENT_DATE )");
        $stmt->execute();
    }
    function verifikasiKtu($id) {
        $this->db->update("UPDATE tb_peminjaman_ruangan SET status_pinjam= 1 where nama_kegiatan = '$id'");
    }
    function verifikasiKalab($id) {
        $this->db->update("UPDATE tb_peminjaman_ruangan SET status_pinjam = 2 where nama_kegiatan = '$id'");
    }
    function getDataKalab()
    {
        $nama = explode(' ', session::get('bg-username'));
        return $this->db->selectAll("SELECT nama_peminjam, pr.id_user as userpinjam, nama_kegiatan, tgl_dipakai, tgl_selesai FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
        JOIN tb_status on status_pinjam = id_status JOIN tb_penanggung_jawab pj on penanggung_jawab_id = pj.id 
        JOIN  tb_user u on u.id_user = pj.username WHERE u.id_user = '$nama[0]' AND status_pinjam = 1");
    }
    function getDaftar()
    {
        $nama = explode(' ', session::get('bg-username'));
        return $this->db->selectAll("SELECT * FROM tb_peminjaman_ruangan pr join tb_ruangan r ON ruangan_id = r.id
        JOIN tb_status on status_pinjam = id_status JOIN tb_penanggung_jawab pj on penanggung_jawab_id = pj.id 
        JOIN  tb_user u on u.id_user = pj.username WHERE u.id_user = '$nama[0]'");
    }
}
