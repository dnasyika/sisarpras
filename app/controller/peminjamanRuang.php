<?php
class peminjamanRuang extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Peminjaman Ruangan');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('peminjamanRuang');
    }

    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('peminjamanRuang','admin');
    }
    function indexkalab(){
        $this->view->data = $this->model->getDataKalab();
        $this->view->display('peminjamanRuangKalab','kalab');
    }
    function detail($id){
        $this->view->data = $this->model->getDetail($id);
        $this->view->data1 = $this->model->getInfo($id);
        $this->view->display('detail_ruangan','admin');
    }
    function detailKalab($id){
        $this->view->data = $this->model->getDetail($id);
        $this->view->data1 = $this->model->getInfo($id);
        $this->view->display('detail_ruangan','kalab');
    }


    function verifikasiKtu($id){
        $this->view->data = $this->model->verifikasiKtu($id);
        header('location:' . URL . '/peminjamanRuang');
    }
    function verifikasiKalab($id){
        $this->view->data = $this->model->verifikasiKalab($id);
        header('location:' . URL . '/peminjamanRuang/indexkalab');
    }
    function kalab(){
        $this->view->data = $this->model->getDaftar();
        $this->view->display('daftarPeminjaman','kalab');
    }
  }
