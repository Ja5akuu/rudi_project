 <!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-header">
       <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
         <div class="breadcrumb-item"><a href="#">Forms</a></div>
         <div class="breadcrumb-item">Edit Data
         </div>
       </div>
     </div>

     <div class="section-body">
       <div class="row">
         <div class="col-12 col-md-12 col-lg-12">
          <?php
          foreach ($Traininig as $data1) {
                  # code...
            ?>
              <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                 <div class="form-row field_wrapperz">
                  <div class="form-group col-md-4 col-12">
                    <label>Nik :</label>
                    <input type="hidden" name="id" class="form-control" value="<?= $data1->id ?>" require >
                    <input type="text" class="form-control" value="<?= $data1->nik ?> - <?= $data1->nama ?>" placeholder="">
                  </div>
                  <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Dept :</label>
                   <input type="text" class="form-control" value="<?= $data1->dept ?>" >
                 </div>
                 <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Nama Trainer</label>
                   <input type="text" name="namatrainer" class="form-control" value="<?= $data1->nama_trainer ?>" require >
                 </div>
                 <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Trainer</label>
                   <input type="text" name="trainer" class="form-control" value="<?= $data1->trainer ?>" require >
                 </div>
                 <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Training Date :</label>
                   <input type="date" name="trainingdate" class="form-control" value="<?= $data1->training_date ?>" require >
                 </div>
                 <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Total Waktu :</label>
                   <input type="text" name="totalwaktu" class="form-control" value="<?= $data1->total_waktu ?>" require >
                 </div>
                 <?php
                 foreach ($Traininig1 as $data) { ?>
                  <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">
                    Sertifikat
                  </label><br>
                  <a href="<?= base_url('assets/upload/').$data->file1; ?>" target="_blank">
                    <?= $data->file1 ?>
                    </a>
                 </div>
               <?php } ?>
             </div>
             <!-- end coriddor -->
           </div>
         </div>
       </div>
   <?php } ?>
 </div>
</div>
</section>
</div>
