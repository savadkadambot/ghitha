<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ghitha | Dashboard</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="/docs/assets/img/favicon.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>public_html/back_end/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url(); ?>public_html/back_end/docs/assets/img/loader.png" alt="Ghitha Logo" height="60" width="80">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <!-- <ul class="navbar-nav ml-auto"> -->
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li> -->
      <!-- </ul> -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar bg-light  elevation-4">
      <!-- Brand Logo -->
      <div class="info-box d-flex justify-content-center pt-5 pb-3">
        <!-- <a href="index3.html" class="brand-link"> -->
        <img src="<?php echo base_url(); ?>public_html/back_end/docs/assets/img/loader.png" alt="Ghitha Logo" class="" style="width: 50%;">
        <!-- </a> -->
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.html" class="nav-link">
                <i class="fa-solid fa-house-chimney-user"></i>
                <p>Home</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#editbanner" class="nav-link">
                <i class="fa-solid fa-photo-film"></i>
                <p>
                  Edit Banner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#socialmedia" class="nav-link">
                <i class="fa-solid fa-share-nodes"></i>
                <p>Social Media</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#services" class="nav-link">
                <i class="fa-solid fa-handshake"></i>
                <p>Services</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.html#privacypolicy" class="nav-link">
                <i class="fa-solid fa-lock"></i>                
                <p>Privacy Policy</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="newsandmedia.html" class="nav-link">
                <i class="fa-solid fa-newspaper"></i>                
                <p>News and Media</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="fa-solid fa-right-from-bracket"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <!-- <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div> -->
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div id="editbanner" class="col-lg-12 col-12">
              <!-- small box -->
              <div class="card card-dark">
                <div class="card-header" data-card-widget="collapse">
                  <h3 class="card-title">Edit Banner</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- form start -->
                  <div class="row">
                    <div class="col-7 mr-5">
                      <form method="POST" action="" enctype="multipart/form-data">
                        <input type="hidden" name="submit_type" value="upload_banner">
                        <div class="form-group">
                          <label for="addbannerfile">Add Banner file</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" name="banner" class="custom-file-input" id="banner">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <input type="submit" name="submit" value="submit" class="btn btn-warning btn-flat">
                            </div>
                          </div>
                        </div>
                      </form>
                      <p>
                        <span class="text-danger">*</span>
                        The image must be in JPEG file format.
                        <br>
                        <span class="text-danger">*</span>
                        The image must be less than or equal to 1 MB (kilobytes).
                      </p>
                    </div>
                    <div class="col-3">
                      <h6 class="mb-2 text-bold">Banner</h6>
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="">
                              <div class="card mb-2 bg-gradient-dark">
                                <div>
                                  <video class="bg-video" class="card-img-top" preload="auto" autoplay loop muted playsinline data-object-fit="cover">
                    <source src="<?php echo $banner_file_url; ?>" type="video/mp4">
                   <!--  <source src="<?php echo base_url(); ?>public_html/front_end/assets/video/video.webm" type="video/webm">     -->                                
                </video>
                                  <!-- <img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1"> -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <!-- ./col -->
              <div id="socialmedia" class="col-lg-12 col-12">
                <!-- small box -->
                <div class="card card-dark">
                  <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Social Media</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form action="">
                      <div class="row">
                        <div class="col-lg-4">
                          <!-- /input-group -->
                          <label for="">Facebook</label>
                          <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa-brands fa-facebook"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning btn-flat">Save</button>
                            </span>
                          </div>
                          <!-- /input-group -->
                        </div>
                        <div class="col-lg-4">
                          <!-- /input-group -->
                          <label for="">Instagram</label>
                          <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa-brands fa-instagram"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning btn-flat">Save</button>
                            </span>
                          </div>
                          <!-- /input-group -->
                        </div>
                        <div class="col-lg-4">
                          <!-- /input-group -->
                          <label for="">LinkedIn</label>
                          <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa-brands fa-linkedin"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning btn-flat">Save</button>
                            </span>
                          </div>
                          <!-- /input-group -->
                        </div>
                      </div>
                      <div class="row pt-4">
                        <div class="col-lg-4">
                          <!-- /input-group -->
                          <label for="">Facebook</label>
                          <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa-brands fa-facebook"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning btn-flat">Save</button>
                            </span>
                          </div>
                          <!-- /input-group -->
                        </div>
                        <div class="col-lg-4">
                          <!-- /input-group -->
                          <label for="">Instagram</label>
                          <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa-brands fa-facebook"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning btn-flat">Save</button>
                            </span>
                          </div>
                          <!-- /input-group -->
                        </div>
                        <div class="col-lg-4">
                          <!-- /input-group -->
                          <label for="">LinkedIn</label>
                          <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa-brands fa-facebook"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control">
                            <span class="input-group-append">
                              <button type="button" class="btn btn-warning btn-flat">Save</button>
                            </span>
                          </div>
                          <!-- /input-group -->
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <!-- ./col -->
              <div id="services" class="col-lg-12 col-12">
                <!-- small box -->
                <div class="card card-dark">
                  <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Services</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card card-warning">
                          <div class="card-header" data-card-widget="collapse">
                            <h3 class="card-title">Food Items</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool"><i class="fas fa-plus"></i>
                              </button>
                            </div>
                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                              <div class="card-body">
                                <input type="hidden" value="food_items" name="submit_type">
                                <textarea id="summernote1" name="note">
                              <?php
                              echo $food_item; 
                              ?>
                            </textarea>
                              </div>
                              <div class="card-footer">
                                <input type="submit" name="submit" value="submit" class="btn btn-primary">
                              </div>
                            </form>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                      <div class="col-md-6">
                        <div class="card card-warning">
                          <div class="card-header" data-card-widget="collapse">
                            <h3 class="card-title">Non Food Items</h3>
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool"><i class="fas fa-plus"></i>
                              </button>
                            </div>
                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->

                          <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                              <div class="card-body">
                                <input type="hidden" value="non_food_items" name="submit_type">
                                <textarea id="summernote1" name="note">
                              <?php
                              echo $non_food_item; 
                              ?>
                            </textarea>
                              </div>
                              <div class="card-footer">
                                <input type="submit" name="submit" value="submit" class="btn btn-primary">
                              </div>
                            </form>
                          </div>


                          <!-- <div class="card-body">
                            <form action="">
                              <div class="card-body">
                                <textarea id="summernote1">
                              Place <em>some</em> <u>text</u> <strong>here</strong>
                            </textarea>
                              </div>
                              <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                              </div>
                            </form>
                          </div> -->
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <!-- ./col -->
              <div id="privacypolicy" class="col-lg-12 col-12">
                <!-- small box -->
                <div class="card card-dark">
                  <div class="card-header" data-card-widget="collapse">
                    <h3 class="card-title">Privacy policy</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <div>
                      <label for="AddNewNewsandMedia">Edit Privacy Policy</label>
                    </div>
                    <form action="">
                      <div class="card-body col-12">
                        <textarea id="summernote1">
                      Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <!-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div> -->
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url(); ?>public_html/back_end/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>public_html/back_end/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>public_html/back_end/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url(); ?>public_html/back_end/dist/js/pages/dashboard.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      // Summernote
      $('#summernote1,#summernote2').summernote()

      // CodeMirror
      CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
        mode: "htmlmixed",
        theme: "monokai"
      });
    })
  </script>
</body>

</html>