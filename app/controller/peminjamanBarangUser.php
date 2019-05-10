<?php
class peminjamanBarangUser extends controller
{
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Peminjaman Barang');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('peminjamanBarang');
    }

    function index()
    {
        $this->view->data = $this->model->getDataUser();
        $this->view->display('peminjamanBarangUser','user');
    }
    function detail($id){
        $this->view->data = $this->model->getDetail($id);
        $this->view->data1 = $this->model->getInfo($id);
        $this->view->display('detailBarang','user');
    }
    function tambah(){
        $this->view->data = $this->model->getData();
        $this->view->data1 = $this->model->barang();
        $this->view->display('tambahPeminjamanBarang','user');
    }


    function insert(){
        if (session::get('bg-akses') == 'user') {
            if (isset($_POST['submit'])) {
                $nama_peminjam= $_POST['nama_peminjam'];
                $nama_kegiatan = $_POST['nama_kegiatan'];
                $barang_id = $_POST['barang_id'];
                $tgl_pinjam = $_POST['tgl_pinjam'];
                $tgl_selesai = $_POST['tgl_selesai'];
                $jumlah = $_POST['jumlah'];

                $this->model->tambah($nama_peminjam, $nama_kegiatan, $barang_id, $jumlah,  $tgl_pinjam, $tgl_selesai);
                echo "<script>window.alert('Berhasil menambah stok');window.location.replace('" . URL . "/peminjamanBarangUser');</script>";
            } else {
                header('location:' . URL . '/tambahPeminjamanBarang');
            }
        } else {
            echo "<script>window.alert('Maaf, anda tidak memiliki akses ke halaman ini.');window.location.replace('" . URL . "');</script>";
        }
    }
}
