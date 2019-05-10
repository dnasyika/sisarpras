<?php
class pengembalianRuang extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Pengembalian Ruang');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('pengembalianRuang');
    }

    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('pengembalianRuang','admin');
    }
    function detail($id){
        $this->view->data = $this->model->getDetail($id);
        $this->view->data1 = $this->model->getInfo($id);
        $this->view->display('detail_pengembalianRuang','admin');
    }
    function kembalikan($id){
        $this->view->data = $this->model->kembaliRuang($id);
        header('location:' . URL . '/pengembalianRuang');
    }

}
