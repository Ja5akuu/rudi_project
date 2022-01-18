<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Dashboard</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Karyawan Laki-laki</h4>
            </div>
            <?php foreach ($laki as $data) { ?>
              <div class="card-body">
               <?= $data->id; ?>
             </div>
           <?php } ?>
         </div>
       </div>
     </div>
     <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Karyawan Perempuan</h4>
          </div>
          <?php foreach ($perempuan as $data) { ?>
            <div class="card-body">
             <?= $data->id; ?>
           </div>
         <?php } ?>
       </div>
     </div>
   </div>
   <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Kontrak Habis</h4>
        </div>
        <?php foreach ($closedate as $data) { ?>
          <div class="card-body">
           <?= $data->id; ?>
         </div>
       <?php } ?>
     </div>
   </div>

 </div>
 <div class="col-lg-3 col-md-6 col-sm-6 col-12">
  <div class="card card-statistic-1">
    <div class="card-icon bg-warning">
      <i class="far fa-user"></i>
    </div>
     <div class="card-wrap">
        <div class="card-header">
          <h4>Kontrak</h4>
        </div>
        <?php foreach ($kontrak as $data) { ?>
          <div class="card-body">
           <?= $data->id; ?>
         </div>
       <?php } ?>
     </div>
  </div>
</div>
</div>

<div class="section-body">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header">
          <h4>Karyawan Kontrak</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table table-striped" id="table-1">
          <thead>                                 
            <tr>
              <th>ID</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Dept</th>
              <th>Join Date</th>
              <th>Close Date</th>
              <th>Kontrak Ke</th>
            </tr>
          </thead>
          <?php
          foreach ($KontrakKaryawan as $data){
            ?> 
            <tbody>                                 
              <tr>
                <td><?= $data->id ?></td>
                <td><?= $data->nik ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->dept ?></td>
                <td><?= $data->join_date ?></td>
                <td><?= $data->close_date ?></td>
                <td><?= $data->kontrak_ke ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
       <div class="card-header">
        <h4>Karyawan Habis Kontrak -7 Hari</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
         <table class="table table-striped" id="table-2">
          <thead>                                 
            <tr>
              <th>ID</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>Dept</th>
              <th>Join Date</th>
              <th>Close Date</th>
              <th>Kontrak Ke</th>
            </tr>
          </thead>
          <?php
          foreach ($HabisKontrak as $data){
            ?> 
            <tbody>                                 
              <tr>
                <td><?= $data->id ?></td>
                <td><?= $data->nik ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->dept ?></td>
                <td><?= $data->join_date ?></td>
                <td><?= $data->close_date ?></td>
                <td><?= $data->kontrak_ke ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</section>
</div>