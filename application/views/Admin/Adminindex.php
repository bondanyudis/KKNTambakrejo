<!DOCTYPE html>
<html lang="en">

<body>
    <div id="wrapper">

        <!-- Navigation -->
      <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Selamat Datang Admin!</a>

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
                    <h1 class="page-header">Acara Desa <a href="<?php echo base_url('index.php/C_Admin/FormAcara');?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Tambah Acara</a></h1>
                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Acara
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama Acara</th>
                                        <th>Foto</th>
                                        <th>Tanggal</th>

                                        <th>Kategori</th>
                                        <th>Kategori</th>

                                        <th>Fungsi Admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                <?php foreach ($event as $DataAcara) {?>
                                <tr class="odd gradeX">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo "$DataAcara->judul"; ?></td>
                                    <td><img class="media-object img-rounded img-responsive"  
                                    src="<?php echo base_url().'uploads/'.$DataAcara->link; ?>"></td>
                                    <td><?php echo "$DataAcara->tgl"; ?></td>
                                   
                                    <td>
                                        <a href="<?php echo base_url().'index.php/C_admin/EditAcara/'.$DataAcara->id ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url().'index.php/C_admin/HapusAcara/'.$DataAcara->id ?>" type="reset" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <?php $i++;} ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                            <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                  <a class="page-link" href="#">Next</a>
                                </li>
                              </ul>
                            </nav>

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

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
