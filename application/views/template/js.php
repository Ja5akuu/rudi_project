<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>
  
 

<script src="<?php echo base_url(); ?>assets/modules/datatables/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>
   <!-- Page Specific JS File -->
  <script src="<?php echo base_url(); ?>assets/js/page/modules-datatables.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

  <script src="<?= base_url(); ?>/assets/modules/izitoast/js/iziToast.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/dynamic-form.js"></script>
  <script type="text/javascript">
       $(document).ready(function() {
          // error = delete , succes = save , info = update
           <?php
              if ($this->session->flashdata('Error')) {
                echo " iziToast.error({title: 'Hello,',message: '".$this->session->flashdata('Error')."',position: 'topRight'}); ";
              }elseif ($this->session->flashdata('Succes')){
                echo " iziToast.success({title: 'Hello,',message: '".$this->session->flashdata('Succes')."',position: 'topRight'}); ";
              }elseif ($this->session->flashdata('Info')){
                echo " iziToast.info({title: 'Hello,',message: '".$this->session->flashdata('Info')."',position: 'topRight'}); ";
              };
            ?>       
        });
  </script>
  

</body>
</html>