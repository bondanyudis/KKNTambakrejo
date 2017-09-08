<!DOCTYPE html>
<html lang="en">
<body>

    <div id="wrapper">

         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('index.php/C_admin/index') ?>">Selamat Datang Admin!</a>
            </div>
            <!-- /.navbar-header -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/C_admin/index') ?>"><i class="fa fa-info fa-fw"></i> Acara</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-image fa-fw"></i> Galeri<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/C_admin/Foto') ?>"><i class="fa fa-camera fa-fw"></i> Foto</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/C_admin/video') ?>"><i class="fa fa-video-camera fa-fw"></i> Video</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('index.php/C_admin/Homestay') ?>"><i class="fa fa-home fa-fw"></i> Homestay</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/C_admin/Profil') ?>"><i class="fa fa-edit fa-fw"></i> Profil</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Foto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Tambah Foto
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form"  action="<?php  echo base_url('index.php/C_admin/ProsesEditFoto/').$gambar['id']  ?>" method='post'  enctype="multipart/form-data">
                                            <div class="form-group">
                                            <label>Nama Acara</label>
                                            <input class="form-control" placeholder="Masukan Nama Acara" name="NamaFoto" value="<?php echo $gambar['judul'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Foto</label>
                                            <input type="file" name="foto">
                                        </div>
                                        <div class="form-group">
                                            <label>Pilih Kategori</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="kategori" id="optionsRadios1" value="Pantai Sendiki" checked>Pantai Sendiki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="kategori" id="optionsRadios2" value="Pantai Tamban">Pantai Tamban
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="kategori" id="optionsRadios3" value="Pantai Tamban">Acara Desa
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                                        </div> 
                                        <a href="<?php  echo base_url().'index.php/C_admin/Foto'  ?>" type="reset" class="btn btn-danger pull-right">
                                        <i class="fa fa-times"></i> Batal </a>
                                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-floppy-o"></i> Simpan</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
