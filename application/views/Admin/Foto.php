<!DOCTYPE html>
<html lang="en">

<body>
    <div id="wrapper">

        <!-- Navigation -->
      <!-- Navigation -->
        
           <?php include('navigasiadmin.php');?>
            <!-- /.navbar-header -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url('index.php/C_admin/index') ?>"><i class="fa fa-info fa-fw"></i> Acara</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('index.php/C_admin/Foto') ?>"><i class="fa fa-camera fa-fw"></i> Galeri Foto</a>
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
                    <h1 class="page-header">Foto <a href="<?php echo base_url('index.php/C_Admin/FormFoto');?>" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Tambah Foto</a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Foto
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th id="idcol"">No</th>
                                        <th id="namacol">Nama Acara</th>
                                        <th id="fotocol">Foto</th>
                                        <th id="tglcol">Waktu/Tanggal</th>
                                        <th id="ktgrcol">Kategori</th>
                                        <th id="fungcol">Fungsi Admin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = $this->uri->segment(3)+1; ?>
                                <?php foreach ($foto as $DataFoto) {?>
                                <tr class="odd gradeX">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo "$DataFoto->judul"; ?></td>
                                    <td><img class="media-object img-rounded img-responsive" 
                                    src="<?php echo base_url().'uploads/'.$DataFoto->link; ?>"></td>
                                    <td><?php echo "$DataFoto->tgl"; ?></td>
                                    <td><?php echo "$DataFoto->kategori"; ?></td>
                                    <td>
                                        <a href="<?php echo base_url().'index.php/C_admin/EditFoto/'.$DataFoto->id ?>"  class="btn btn-warning "><i class="fa fa-pencil-square-o" ></i> Edit</a>
                                        <a href="<?php echo base_url().'index.php/C_admin/HapusFoto/'.$DataFoto->id ?>" type="reset" class="btn btn-danger "><i class="fa fa-trash-o"></i> Hapus</a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                            <nav aria-label="Page navigation example">
                              <ul class="pagination justify-content-end">
                                <?php echo $this->pagination->create_links(); ?>
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

</body>

</html>
