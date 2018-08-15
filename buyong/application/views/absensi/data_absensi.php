<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <?php $this->load->view('inc/head'); ?>
  
</head>
<body class="skin-blue">
  <div class="wrapper">

    <?php $this->load->view('inc/head2'); ?>
    <aside class="main-sidebar">
      <?php $this->load->view('inc/sidebar'); ?>
    </aside>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          <b>Data Mahasiswa</b>
          <button type="submit" class="btn btn-success">Lihat Data</button> <button type="submit" class="btn btn-warning"><i class="fa fa-print"> Cetak</i></button>

        </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-title">
                  
                </div><!-- /.box-title -->
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIP POS</th>
                      <th>NAMA</th>
                      <th>JURUSAN</th>
                      <th>TANGGAL</th>
                      <th>JAM</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; foreach($data_absensi as $row) { $no++ ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row['nippos']; ?></td>
                      <td><?php echo $row['nama_kar']; ?></td>
                      <td><?php echo $row['jabatan']; ?></td>
                      <td><?php echo $row['tanggal']; ?></td>
                      <td><?php echo $row['jammasuk']; ?></td>
                      <td><?php if ($row['kodeabsensi'] == 1) { ?>
						<h4><span class="label label-success">Masuk</span></h4>
                      <?php } else { ?>
                      <h4><span style="text-fonts:16px" class="label label-danger">Pulang</span></h4>
                      <?php } ?>
                      </td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
    </div>
      <strong>Copyright &copy; 2016 <a href="#"></a></strong>
    </footer>
  </div>


    
    <?php $this->load->view('inc/footer'); ?>
    <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false


        });
      });

      $(function(){
      $('#pesan-flash').delay(4000).fadeOut();
      $('#pesan-error-flash').delay(5000).fadeOut();
      });
    </script>
</body>
</html>