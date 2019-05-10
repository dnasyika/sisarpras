<?php
class peminjamanRuangUser extends controller
{
    function __construct()
    {
        parent::__construct();
        session::set('bg-title', 'Peminjaman Ruangan');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('peminjamanRuang');
    }

    function index()
    {
        $this->view->data = $this->model->getDataUser();
        $this->view->display('peminjamanRuangUser', 'user');
    }
    function detail($id){
        $this->view->data = $this->model->getDetail($id);
        $this->view->data1 = $this->model->getInfo($id);
        $this->view->display('detailRuang','user');
    }

    function tambah()
    {
        $this->view->data = $this->model->getDataUser();
        $this->view->data1 = $this->model->ruangan();
        $this->view->display('tambahPeminjamanRuang', 'user');
    }

    function insert(){
        if (session::get('bg-akses') == 'user') {
            if (isset($_POST['submit'])) {
                $nama_peminjam = $_POST['nama_peminjam'];
                $nama_kegiatan = $_POST['nama_kegiatan'];
                $ruangan = $_POST['ruangan'];
                $tgl_pinjam = $_POST['tgl_pinjam'];
                $tgl_selesai = $_POST['tgl_selesai'];

                $this->model->tambah($nama_peminjam, $nama_kegiatan, $ruangan,  $tgl_pinjam, $tgl_selesai);
                echo "<script>window.alert('Berhasil menambah peminjaman');window.location.replace('" . URL . "/peminjamanRuangUser');</script>";
            } else {
                header('location:' . URL . '/tambahPeminjamanRuang');
            }
        } else {
            echo "<script>window.alert('Maaf, anda tidak memiliki akses ke halaman ini.');window.location.replace('" . URL . "');</script>";
        }
    }
  }
