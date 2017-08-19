<!-- Navigation -->
    <header class="nav-type-1">
    
      <nav class="navbar navbar-static-top">
        <!--<div class="navigation" id="sticky-nav">-->
        <div class="navigation">
          <div class="container relative">

            <div class="row">

              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div> <!-- end navbar-header -->

              <div class="header-wrap">
                <div class="header-wrap-holder">

                  <!-- Search -->
                  <div class="nav-search hidden-sm hidden-xs">
                    <form method="get" name="cari" action="index.php">
                      <input type="text" name="judul" class="form-control" placeholder="Cari judul buku">
                      <button name="cari" type="submit" class="search-button">
                        <i class="icon icon_search"></i>
                      </button>
                    </form>
                  </div>

                  <!-- Logo -->
                  <div class="logo-container">
                    <div class="logo-wrap text-center">
                      <a href="index.php">
                        <!--<img class="logo" src="img/logo_dark.png" alt="logo">-->
                        <h4 class="logo"><b>ZURIN BOOKSTORE</b><h4>
                      </a>
                    </div>
                  </div>

                  <!-- Cart -->
                  <div class="nav-cart-wrap hidden-sm hidden-xs">
                    &nbsp;
                  </div> <!-- end cart -->

                </div>
              </div> <!-- end header wrap -->

              <div class="nav-wrap">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                  
                  <ul class="nav navbar-nav">

                    <li id="mobile-search" class="hidden-lg hidden-md">
                      <form method="get" name="cari" action="index.php" class="mobile-search relative">
                        <input type="text" name="judul" class="form-control" placeholder="Cari...">
                        <button name="cari" type="submit" class="search-button">
                          <i class="icon icon_search"></i>
                        </button>
                      </form>
                    </li>

                    <li class="dropdown">
                      <a href="index.php">Beranda</a>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori Buku</a>
                      <ul class="dropdown-menu megamenu">
                        <li>
                          <div class="megamenu-wrap">
                            <div class="row">
                              <?php 
                                $kat = "SELECT id_kategori FROM tb_kategori";
                                $result = mysqli_query($konek, $kat);
                                $i = 0;
                                while(mysqli_fetch_assoc($result)){
                                  $sql[$i] = "SELECT id_kategori, judul_kategori FROM tb_kategori ORDER BY judul_kategori LIMIT $i, 4";
                                  $hasil = mysqli_query($konek, $sql[$i]);
                                  if($i%4==0){
                              ?>
                                <div class="col-md-3 megamenu-item">
                                  <ul class="menu-list">
                                    <?php while($row = mysqli_fetch_assoc($hasil)){ ?>
                                    <li><a href="?p=buku&id_kat=<?php echo $row['id_kategori']; ?>&halaman=1"><?php echo $row['judul_kategori']; ?></a></li>
                                    <?php } ?>
                                  </ul>
                                </div>
                              <?php } $i++; } ?>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li> <!-- end categories -->

                    <li class="dropdown">
                      <a href="?p=buku&halaman=1">Koleksi Buku</a>
                    </li>

                    <li class="dropdown">
                      <a href="#">Informasi</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="?p=about">Tentang Kami</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#">Bantuan</a>
                      <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown"></i>
                      <ul class="dropdown-menu">
                        <li><a href="?p=contact">Kontak Kami</a></li>
                        <li><a href="?p=faq">F.A.Q</a></li>
                      </ul>
                    </li>
                    
                  </ul> <!-- end menu -->
                </div> <!-- end collapse -->
              </div> <!-- end col -->
          
            </div> <!-- end row -->
          </div> <!-- end container -->
        </div> <!-- end navigation -->
      </nav> <!-- end navbar -->
    </header> <!-- end navigation -->