  <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title; ?></h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item"><?= $subtitle; ?></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                  	<a href="karyawan/add">
                   		<button class="btn btn-success" ><i class="glyphicon glyphicon-plus"></i> Add</button>
					</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>
                            <th>ID</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>HP</th>
                            <th>Alamat</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                         <?php
                              foreach ($View as $data){
                              ?> 
                        <tbody>                                 
                          <tr>
                            <td><?= $data->id ?></td>
                            <td><?= $data->nik ?></td>
                            <td><?= $data->nama ?></td>
                            <td><?= $data->jkel ?></td>
                            <td><?= $data->hp ?></td>
                            <td><?= $data->alamat ?></td>
                            <td>
                            <a href="<?= base_url('master/karyawan/edit/').$data->id ;?>" class="btn btn-primary">Edit</a>
                            <a href="<?= base_url('master/karyawan/delete/').$data->id ;?>" class="btn btn-danger" onClick="return confirmDialog()">Delete</a>
                            </td>
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