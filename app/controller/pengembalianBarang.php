<?php
class pengembalianBarang extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Pengembalian Barang');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('pengembalianBarang');
    }

    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('pengembalianBarang','admin');
    }
    function detail($id){
        $this->view->data = $this->model->getDetail($id);
        $this->view->data1 = $this->model->getInfo($id);
        $this->view->display('detail_pengembalianBarang','admin');
    }

    function kembalikan($id){
        $this->view->data = $this->model->kembaliBarang($id);
        header('location:' . URL . '/pengembalianBarang');
    }

}
