<section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $nama; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li>
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-home"></i> <span>Dashboard</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>jabatan">
                <i class="fa fa-tag"></i> <span>Jurusan</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>karyawan">
                <i class="fa fa-photo"></i> <span>Mahasiswa</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>absensi">
                <i class="fa fa-print"></i> <span>Absensi</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>login/logout">
                <i class="fa fa-sign-out"></i> <span>Keluar</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
            
            <li class="header">Ini merupakan halaman Dosen pengelola absen</li>

          </ul>
        </section>