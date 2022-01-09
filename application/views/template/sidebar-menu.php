<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url(); ?>dist/index">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">St</a>
          </div>
          <ul class="sidebar-menu">
           
            <li class="dropdown <?php echo $this->uri->segment(1) == 'master' ? 'active' : ''; ?>">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Master</span></a>
              <ul class="dropdown-menu">
              <li  class="<?php echo $this->uri->segment(2) == 'user' ? 'active' : ''; ?>"><a class="nav-link"  href="<?php echo base_url(); ?>master/karyawan">User</a></li>
                <li  class="<?php echo $this->uri->segment(2) == 'karyawan' ? 'active' : ''; ?>"><a class="nav-link"  href="<?php echo base_url(); ?>master/karyawan">Karyawan</a></li>
                <li  class="<?php echo $this->uri->segment(2) == 'Dept' ? 'active' : ''; ?>"><a class="nav-link"  href="<?php echo base_url(); ?>master/dept">Dept</a></li>
              </ul>
            </li>
            <li class="<?php echo $this->uri->segment(1) == 'Kontrak' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Kontrak"><i class="fas fa-user"></i> <span>Kontrak Karyawan</span></a></li>
            <li class="<?php echo $this->uri->segment(1) == 'Training' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Training"><i class="fas fa-book"></i> <span>Training Karyawan</span></a></li>
            <li class="<?php echo $this->uri->segment(1) == 'Lisensi' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>Lisensi"><i class="fas fa-book"></i> <span>Lisensi Karyawan</span></a></li>
          </ul>

          <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div> -->
        </aside>
      </div>
