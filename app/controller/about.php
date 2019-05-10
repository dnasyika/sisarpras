<?php
class about extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Kontak Kami');
    }
    function index(){
        $this->view->display('about','user');
    }
}