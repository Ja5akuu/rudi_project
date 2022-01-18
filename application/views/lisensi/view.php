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
          foreach ($Lisensi as $data1) {
                  # code...
            ?>
            <form method='post' action='<?= base_url('Lisensi/update') ?>' enctype="multipart/form-data">
               <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                 <div class="form-row field_wrapperz">
                  <div class="form-group col-md-4 col-12">
                    <label>Training :</label>
                     <input type="hidden" name="id" class="form-control" require value="<?= $data1->id ?>">
                    <select class="form-control select2" name="trainer">
                      <?php foreach ($Lisensi as $data) { ?>
                        <option value="<?= $data->trainer ?>" <?php  if($data1->trainer == $data1->trainer) { echo "selected" ;} ?>><?= $data->trainer ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>Nama Trainer :</label>
                    <select class="form-control select2" name="nama_trainer">
                      <?php foreach ($trainer as $data) { ?>
                        <option value="<?= $data->nama_trainer ?>"><?= $data->nama_trainer ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-12">
                    <label>Karyawan :</label>
                    <select class="form-control select2" name="nik">
                      <?php foreach ($trainer as $data) { ?>
                        <option value="<?= $data->nik ?>"><?= $data->nik ?> - <?= $data->nama ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Dept :</label>
                   <select name="dept" class="form-control">
                    <?php foreach ($dept as $data) { ?>
                      <option value="<?= $data->dept ?>"><?= $data->dept ?></option>
                    <?php } ?>
                  </select>
                </div>
               <div class="form-group col-md-4 col-12">
                 <label for="inputPassword4">Exp Date :</label>
                 <input type="date" name="expdate" class="form-control" require value="<?= $data1->expdate ?>">
               </div>
             </div>
             <!-- end coriddor -->
           </div>
         </div>
       </div>
       </div>
     </form>
   <?php } ?>
 </div>
</div>
</section>
</div>
