<?php
class peminjamanBarang extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Peminjaman Barang');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('peminjamanBarang');
    }

    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('peminjamanBarang','admin');
    }

    function detail($id){
        $this->view->data = $this->model->getDetail($id);
         $this->view->data1 = $this->model->getInfo($id);
        $this->view->display('detail_barang','admin');
    }

    function verifikasiKtu($id){
        $this->view->data = $this->model->verifikasiKtu($id);
        header('location:' . URL . '/peminjamanBarang');
    }

}
