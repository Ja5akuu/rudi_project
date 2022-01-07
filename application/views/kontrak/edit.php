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
                foreach ($kode as $data) {
                  # code...
                ?>
           <form method='post' action='<?= base_url('master/kontrak/update') ?>' enctype="multipart/form-data">
             <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                   <div class="form-row field_wrapperz">
                        <div class="form-group col-md-4 col-12">
                        <label>Nik :</label>
                        <input type="hidden" name="id" value="<?= $data->id ?>">
                        <select class="form-control select2" name="nik">
                          <?php foreach ($karyawan as $data1) { ?>
                            <option value="<?= $data->nik ?>" <?php  if($data->nik == $data1->nik) { echo "selected" ;} ?> ><?= $data->nik ?> - <?= $data1->nama ?></option>
                          <?php } ?>
                        </select>
                       </div>
                       <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Dept :</label>
                           <select name="dept" class="form-control">
                              <?php foreach ($dept as $data1) { ?>
                                  <option value="<?= $data->dept ?>" <?php  if($data->dept == $data1->dept) { echo "selected" ;} ?>><?= $data->dept ?></option>
                              <?php } ?>
                           </select>
                       </div>
                        <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Kontrak Ke :</label>
                          <input type="text" name="kontrakke" class="form-control" require value="<?= $data->kontrak_ke ?>" >
                       </div>
                       <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Join Date :</label>
                          <input type="date" name="joindate" class="form-control" require value="<?= $data->join_date ?>">
                       </div>
                       <div class="form-group col-md-4 col-12">
                         <label for="inputPassword4">Close Date :</label>
                          <input type="date" name="closedate" class="form-control" require value="<?= $data->close_date ?>">
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