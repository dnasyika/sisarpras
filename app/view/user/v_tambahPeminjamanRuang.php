<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__.'/../part/header.php');?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>

    <div id="main">
        <div class="container">
            <div class="skill-wrap clearfix">
            </div>
        </div>
        <div class="center" style="margin-top: -75px">
            <h2>Tambah Peminjaman Ruangan</h2>
        </div>
        <div class="row contact-wrap">
            <form class="contact-form" method="post" action="<?php echo URL ?>/peminjamanRuangUser/insert">

                <div class="form-group">
                    <label>Nama Peminjam</label>
                    <input type="text" name="nama_peminjam" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Ruangan</label>
                    <select class="form-control" name="ruangan">
                        <?php foreach ($this->data1 as $value) { ?>
                            <option value="<?php echo $value ['id'] ?>"> <?php echo $value['nama_ruangan'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input id="datepicker" type="text" name="tgl_pinjam" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input id="tgl" type="text" name="tgl_selesai" class="form-control" required="required">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Tambah</button>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</div>
