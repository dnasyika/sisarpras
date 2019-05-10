<header id="header">

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo IMG_URL; ?>/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="/sarpras/">Home</a></li>
                    <?php if (session::get('bg-akses') == 'admin') { ?>
<!--                                                <li><a href="--><?php //echo URL; ?><!--/stock"></a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Peminjaman<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>/peminjamanBarang">Peminjaman Barang</a></li>
                                <li><a href="<?php echo URL; ?>/peminjamanRuang">Peminjaman Ruangan</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo URL; ?>/barang">Data Barang</a></li>
                        <li><a href="<?php echo URL; ?>/ruangan">Data Ruangan</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Pengembalian<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>/pengembalianBarang">Pengembalian Barang</a></li>
                                <li><a href="<?php echo URL; ?>/pengembalianRuang">Pengembalian Ruangan</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo URL; ?>/viewUser">User</a></li>
                        <li><a href="<?php echo URL; ?>/login/logout">Logout</a></li>

                    <?php } else if (session::get('bg-akses') == 'ktu') { ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Peminjaman<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>/peminjamanBarang">Peminjaman Barang</a></li>
                                <li><a href="<?php echo URL; ?>/peminjamanRuang">Peminjaman Ruangan</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo URL; ?>/barang">Data Barang</a></li>
                        <li><a href="<?php echo URL; ?>/ruangan">Data Ruangan</a></li>
                        <li><a href="<?php echo URL; ?>/inventaris">Data Inventaris</a></li>
                        <li><a href="<?php echo URL; ?>/login/logout">Logout</a></li>

                    <?php } else if (session::get('bg-akses') == 'kalab') { ?>
                        <li><a href="<?php echo URL; ?>/peminjamanRuang/indexkalab/">Peminjaman Ruangan</a></li>
                        <li><a href="<?php echo URL; ?>/peminjamanRuang/kalab/">Daftar Peminjaman</a></li>

                        <li><a href="<?php echo URL; ?>/login/logout">Logout</a></li>

                    <?php } else { ?>
                        <li><a href="<?php echo URL; ?>/peminjamanBarangUser">Peminjaman Barang</a></li>
                        <li><a href="<?php echo URL; ?>/peminjamanRuangUser">Peminjaman Ruangan</a></li>
                        <?php if (session::get('bg-loggedIn') == false) { ?>
                            <li><a href="<?php echo URL; ?>/login">Login</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo URL; ?>/login/logout">Logout</a></li>
                        <?php } ?>

                    <?php } ?>

                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->
