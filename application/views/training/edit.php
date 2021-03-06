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
           <form method='post' action='<?= base_url('Training/update') ?>' enctype="multipart/form-data">
					 <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                   <div class="form-row field_wrapperz">
                        <div class="form-group col-md-4 col-12">
                        <label>Nik :</label>
												<input type="hidden" name="id" class="form-control" value="<?= $data1->id ?>" required >
                        <input type="text" name="nik" class="form-control" value="<?= $data1->nik ?>" required readonly >
                       </div>
                       <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Nama :</label>
                          <input type="text" name="dept" class="form-control" value="<?= $data1->nama ?>" required readonly >
                       </div>
                       <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Dept :</label>
                          <input type="text" name="dept" class="form-control" value="<?= $data1->dept ?>" required readonly >
                       </div>
                        <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Nama Trainer</label>
                          <input type="text" name="namatrainer" class="form-control" value="<?= $data1->nama_trainer ?>" required >
                       </div>
                        <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Trainer</label>
                          <input type="text" name="trainer" class="form-control" value="<?= $data1->trainer ?>" required>
                       </div>
                       <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Training Date :</label>
                          <input type="date" name="trainingdate" class="form-control" value="<?= $data1->training_date ?>" required >
                       </div>
                       <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Total Waktu :</label>
                          <input type="text" name="totalwaktu" class="form-control" value="<?= $data1->total_waktu ?>" required >
                       </div>
                        <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Sertifikat :</label>
                          <input type="file" name="gambar[]" class="form-control" multiple>
                       </div>
                   </div>
                   <!-- end coriddor -->
               </div>
               <div class="card-footer">
                 <button class="btn btn-primary">Submit</button>
               </div>
             </div>
         </div>
         </form>
       <?php } ?>
       </div>
     </div>
   </section>
 </div>
