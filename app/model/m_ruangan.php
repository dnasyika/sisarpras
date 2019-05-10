<?php

class m_ruangan extends model {

    function __construct() {
        parent::__construct();
    }
    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_ruangan r join tb_penanggung_jawab pj ON r.penanggung_jawab_id = pj.id");
    }
  }
