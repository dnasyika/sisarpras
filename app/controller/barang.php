<?php
class barang extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Data Barang');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('barang');
    }

    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('barang','admin');
    }
  }
