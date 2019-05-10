<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__.'/../part/header.php');?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
            <br>
            <br>
            <br>
            <div class="center wow fadeInDown">
                <h2>Detail Peminjaman Ruang</h2>
            </div>
            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <section class="content">
                            <br>
                            <br>
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div style="float: left; margin-right: 100px;">
                                        <?php
                                        foreach ($this->data1 as $key => $value){?>
                                            <h6>Nama Peminjam:<b><?php echo $value['nama_peminjam'] ?></b></h6>
                                            <h6>Nama Kegiatan : <b><?php echo $value['nama_kegiatan'] ?></b></h6>
                                            <h6>Status: <b><?php echo $value['status'] ?></b></h6>
                                        <?php } ?>
                                    </div>

                                    <div class="table-responsive col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                            <th>Nama Ruangan</th>
                                            <th>Penanggungjawab</th>
                                            </thead>
                                            <tbody>

                                            <?php foreach ($this->data as $key => $value){?>
                                                <tr>
                                                    <td><?php echo $value['nama_ruangan'] ?></td>
                                                    <td><?php echo $value['nama_pj'] ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>



                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
