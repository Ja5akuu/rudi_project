 <!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-header">
       <div class="section-header-breadcrumb">
         <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
         <div class="breadcrumb-item"><a href="#">Forms</a></div>
         <div class="breadcrumb-item">Add Data
         </div>
       </div>
     </div>

     <div class="section-body">
       <div class="row">
         <div class="col-12 col-md-12 col-lg-12">
           <form method='post' action='<?= base_url('master/karyawan/create') ?>' enctype="multipart/form-data">
             <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                 <div class="form-row field_wrapperz">
                   <div class="form-group col-md-4 col-12">
                     <label for="inputEmail4">NIK</label>
                     <input type="text" name="nik" class="form-control" placeholder="NIK" require >
                   </div>
                   <div class="form-group col-md-4 col-12">
                     <label for="inputPassword4">Nama :</label>
                     <input type="text" name="nama" class="form-control" placeholder="Nama"  require>
                   </div>
                   <div class="form-group col-md-4 col-12">
                     <label for="inputPassword4">Jenis Kelamin :</label>
                     <select name="jkel" class="form-control">
                       <option value="Laki-laki">Laki-laki</option>
                       <option value="Perempuan">Perempuan</option>
                     </select>
                   </div>
                   <div class="form-group col-md-4 col-12">
                     <label for="inputPassword4">Tlp/HP :</label>
                     <input type="number" name="hp" class="form-control" placeholder="02745135658" require >
                   </div>
                   <div class="form-group col-md-4 col-12">
                     <label for="inputPassword4">Alamat</label>
                     <textarea class="form-control" name="alamat" placeholder="Jl.demo"  ></textarea>
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
                   <label for="inputPassword4">Join Date :</label>
                   <input type="date" name="joindate" class="form-control" require >
                 </div>
                 <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Close Date :</label>
                   <input type="date" name="closedate" class="form-control" require >
                 </div>
                 <div class="form-group col-md-4 col-12">
                   <label for="inputPassword4">Kontrak Ke :</label>
                   <input type="text" name="kontrakke" class="form-control" require >
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
     </div>
   </div>
 </section>
</div>