<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <?php $this->load->view('inc/head'); ?>
  
</head>
<body class="skin-blue">
  <!-- wrapper di bawah footer -->
  <div class="wrapper">

    <?php $this->load->view('inc/head2'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <?php $this->load->view('inc/sidebar'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <b>Edit Data Mahasiswa</b>
        </h1>
          <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12">
            <!-- Chat box -->
            <div class="box">
              <div class="box-header">
                <i class="fa fa-plus"></i>
                <h3 class="box-title">Form Edit Mahasiswa</h3>
              </div>
              <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                  <form role="form" action="<?php echo base_url(); ?>karyawan/updatekaryawan" method="POST" enctype="multipart/form-data">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">NIMHS</label>
                        <input type="hidden" class="form-control" value="<?php echo $id_kar; ?>" id="" name="id_kar" placeholder="Isika" required>
                        <input type="hidden" class="form-control" value="<?php echo $tgl_input_kar; ?>" id="" name="tgl_input_kar" placeholder="Isikan" required>
                        <input type="text" class="form-control" value="<?php echo $nippos; ?>" id="" name="nippos" placeholder="" required>
                    </div>

                    <div class="form-group">
                      <label for="">Nama</label>
                        <input type="text" class="form-control" value="<?php echo $nama_kar; ?>" id="" name="nama_kar" placeholder="" required>                        
                    </div>
                    <div class="form-group">
                      <label for="">No HP</label>
                        <input type="text" class="form-control" value="<?php echo $nohp; ?>" id="" name="nohp" placeholder="" required>                        
                    </div>                    
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Jurusan</label>
                        <select name="id_jab" class="form-control" required>
                          <?php foreach($jabatan as $kat){
                            if(!in_array($kat['id_jab'],$label_post)){
                              ?>
                              <option value="<?php echo $kat['id_jab'] ?>"><?php echo $kat['jabatan'] ?></option>
                              <?php } else { ?>
                              <option selected="selected" value="<?php echo $kat['id_jab'] ?>"><?php echo $kat['jabatan'] ?></option>
                              <?php } } ?>
                        </select> 
                    </div>
                    <div class="form-group">
                      <label for="">Semester</label>
                        <input type="text" class="form-control" value="<?php echo $pekerjaan; ?>" id="" name="pekerjaan" placeholder="" required>                        
                    </div>
                    <div class="form-group">
                      <label for="">Foto</label>
                      <input type="hidden" name="foto" value="<?php echo $foto; ?>">
                        <input type="file" class="form-control" value="" id="" name="file_upload" placeholder="">
                        <img style="width:80px;height:80px" src="<?php echo base_url(); ?>assets/upload/<?php echo $foto; ?>" class="img-circl" alt="User Image" />                        
                    </div>
                    
                  </div>
                  </div><!-- /.item -->
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Simpan</button>
                  <a href="<?php echo base_url(); ?>karyawan" class="btn btn-warning btn-block btn-flat">Kembali</a>
                </div><!-- /.col -->
               </form>
               
              </div><!-- /.chat -->
            </div><!-- /.box (chat box) -->
          </section><!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

          </section><!-- right col -->
        </div><!-- /.row (main row) -->

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <!-- <b>Version</b> 2.0 -->
      </div>
      <strong>Copyright &copy; 2016 <a href="#"></a></strong>
    </footer>
  </div><!-- ./wrapper -->
  <!-- page script -->
  

    
    <?php $this->load->view('inc/footer'); ?>
</body>
</html>