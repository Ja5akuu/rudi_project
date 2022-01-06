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
           <form method='post' action='<?= base_url('master/dept/create') ?>' enctype="multipart/form-data">
             <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                   <div class="form-row field_wrapperz">
                       <div class="form-group col-md-6 col-12">
                         <label for="inputEmail4">Dept</label>
                          <input type="text" name="dept" class="form-control" placeholder="Dept" require >
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