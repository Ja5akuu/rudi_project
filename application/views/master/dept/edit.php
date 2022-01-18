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
         <div class="col-6 col-md-6 col-lg-6">
         <?php
                foreach ($kode as $data) {
                  # code...
                ?>
           <form method='post' action='<?= base_url('master/dept/update') ?>' enctype="multipart/form-data">
             <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                   <div class="form-row field_wrapperz">
                       <div class="form-group col-md-4 col-6">
                         <label for="inputEmail4">Dept</label>
                          <input type="hidden" name="id" class="form-control" value="<?= $data->id; ?>">
                          <input type="text" name="dept" class="form-control" value="<?= $data->dept; ?>" require >
                       </div>
                   </div>
               </div>
               <div class="card-footer">
                 <button class="btn btn-primary">Update</button>
               </div>
             </div>
         </div>
         </form>
         <?php } ?>
       </div>
     </div>
   </section>
 </div>