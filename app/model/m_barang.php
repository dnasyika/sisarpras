<?php

class m_barang extends model {

    function __construct() {
        parent::__construct();
    }
    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_barang");
    }
  }
