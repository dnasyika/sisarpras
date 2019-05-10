<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__.'/../part/header.php');?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
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
                                        <?php } ?>
                                    </div>
                                    <br>
                                    <br>
                                    <hr style="width: 100%">
                                    <h5>Data Barang : </h5>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="table-responsive col-md-12">
                                        <table class="table table-hover">
                                            <thead>
                                            <th>Nama Barang</th>
                                            <th>Jumlah Barang</th>
                                            </thead>
                                            <tbody>

                                            <?php foreach ($this->data as $key => $value){?>
                                                <tr>
                                                    <td><?php echo $value['nama_barang'] ?></td>
                                                    <td><?php echo $value['jumlah_pinjam'] ?></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div style="margin-top: 20px">
                                        <div class="col-md-6">
                                            <a href="<?php echo URL; ?>/pengembalianBarang/kembalikan/<?php echo $value['nama_kegiatan'] ?>" style="margin-left: 10px" class="btn btn-sm btn-default"> <i
                                                    class="fa fa-btn fa-check"></i>Kembalikan</a>
                                            <a href="<?php echo URL; ?>/pengembalianBarang" style="margin-left: 10px" class="btn btn-sm btn-default">
                                                <i class="fa fa-btn fa-close"></i> close</a>
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
