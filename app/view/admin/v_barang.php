<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__.'/../part/header.php');?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
          <br>
          <br>
          <br>
          <br>
          <div class="center wow fadeInDown">
              <h2>Data Barang</h2>
          </div>

            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>No Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->data as $key => $value){?>
                            <tr>
                                <td><?php echo $value['id'] ?></td>
                                <td><?php echo $value['nama_barang'] ?></td>
                                <td><?php echo $value['jumlah'] ?></td>
                                <td><?php echo $value['satuan'] ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
