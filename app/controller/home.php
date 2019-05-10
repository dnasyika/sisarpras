<?php
class home extends controller {
	function __construct()
	{
		parent::__construct();
		session::set('bg-title','Selamat Datang di Peminjaman Sarpras');
	}
	function index(){
		$this->view->display('home');
	}
}