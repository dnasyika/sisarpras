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
                <h2>Pengembalian Ruangan</h2>
            </div>
            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>Nama Peminjam</th>
                                <th>Nama Kegiatan</th>
                                <th>Ruangan</th>
                                <th>Tanggal Pakai</th>
                                <th>Tanggal Selesai</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->data as $key => $value){?>
                                <tr>
                                    <td><?php echo $value['nama_peminjam'] ?></td>
                                    <td><?php echo $value['nama_kegiatan'] ?></td>
                                    <td><?php echo $value['nama_ruangan'] ?></td>
                                    <td><?php echo $value['tgl_dipakai'] ?></td>
                                    <td><?php echo $value['tgl_selesai'] ?></td>
                                    <td><a href="<?php echo URL; ?>/pengembalianRuang/pengembalianRuang/<?php echo $value['peminjam_id'] ?>">Dikembalikan</a>

                                    </td>
                                    </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
