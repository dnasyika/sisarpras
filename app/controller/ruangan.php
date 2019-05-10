<?php
class ruangan extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Data Ruangan');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('ruangan');
    }

    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('ruangan','admin');
    }
  }
