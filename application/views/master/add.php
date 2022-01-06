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
           <form method='post' action='<?= base_url('gedung/create') ?>' enctype="multipart/form-data">
             <div class="card">
               <div class="card-body">
                 <!-- connection corridor -->
                   <div class="form-row field_wrapperz">
                       <div class="form-group col-md-2">
                         <label for="inputEmail4">Code Dok</label>
                          <input type="text" name="kodedoc" class="form-control" value="FR.01/GKB/PTM" readonly>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Type Dok :</label>
                          <input type="text" name="typedoc" class="form-control" value="FORMULIR" readonly>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Level Dok :</label>
                           <input type="text" name="leveldoc" class="form-control" value="III" readonly>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Revisi Status :</label>
                          <input type="text" name="revisistatus" class="form-control" value="01" readonly>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Effectife Date</label>
                          <input type="text" name="effectifdate" class="form-control" value="02/01/2016" readonly>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Page</label>
                          <input type="text" name="page" class="form-control" value="1 of 1" readonly>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Kode Cheeksit</label>
                          <input type="text" name="kodecheksit" class="form-control" value="<?= $kode_barang; ?>" readonly>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Area Gedung</label>
                          <select name="areagedung" class="form-control">
                            <option value="Selatan">Selatan</option>
                            <option value="Tengah">Tengah</option>
                            <option value="Utara">Utara</option>
                          </select>
                       </div>
                        <div class="form-group col-md-2">
                         <label for="inputPassword4">Tanggal</label>
                          <input type="date" name="tanggal" class="form-control" required>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Shift</label>
                          <input type="text" name="shift" class="form-control" required>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">jam</label>
                          <input type="time" name="jam" class="form-control" required>
                       </div>
                   </div>
                   <!-- end coriddor -->
                   <br>
                 <div class="alert alert-primary">A. CONNECTING CORRIDOR</div>
                 <br>
                   <div class="form-row field_wrapper">
                       <div class="form-group col-md-2">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantai[]">
                            <option>Pilih</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langit[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Lampu Penerangan :</label>
                          <select class="form-control" name="lampu[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Pilar-pilar :</label>
                         <select class="form-control" name="pilar[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Lantai</label>
                         <select class="form-control" name="lantai1[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_button">+</button>
                       </div>
                   </div>
                   <!-- end coriddor -->
                   <br>
                   <!-- teras / main lobby -->
                   <div class="alert alert-primary">B. TERAS MAIN LOBBY</div>
                   <br>
                   <div class="form-row field_wrapperb">
                       <div class="form-group col-md-1">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantaib[]">
                            <option>Pilih</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langitb[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Lampu Penerangan :</label>
                          <select class="form-control" name="lampub[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Pilar-pilar :</label>
                         <select class="form-control" name="bpilar[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Pintu Kaca :</label>
                         <select class="form-control" name="bpintu[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Indoor Plant :</label>
                         <select class="form-control" name="bindoor[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Nomat :</label>
                         <select class="form-control" name="bnomat[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttonb">+</button>
                       </div>
                   </div>
                   <!-- end ters -->
                   <br>
                   <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">C. RUANG TUNGGU</div>
                    <br>
                    <div class="form-row field_wrapperc">
                       <div class="form-group col-md-1">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantaic[]">
                            <option>Pilih</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langitc[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Lampu Penerangan :</label>
                          <select class="form-control" name="lampuc[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Dinding :</label>
                         <select class="form-control" name="dindingc[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Hiasan Dinding :</label>
                         <select class="form-control" name="hiasandindingc[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Furniture :</label>
                         <select class="form-control" name="furniturec[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Lantai :</label>
                         <select class="form-control" name="lantai1c[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttonc">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->
                   <br>
                    <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">D. COUNTER OPERATOR TELEPON</div>
                    <br>
                    <div class="form-row field_wrapperd">
                       <div class="form-group col-md-1">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantaid[]">
                            <option>Pilih</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langitd[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Lampu Penerangan :</label>
                          <select class="form-control" name="lampud[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Dinding :</label>
                         <select class="form-control" name="dindingd[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">Hiasan Dinding :</label>
                         <select class="form-control" name="hiasandindingd[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Furniture :</label>
                         <select class="form-control" name="furnitured[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Telepone :</label>
                         <select class="form-control" name="teleponed[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                         <div class="form-group col-md-1">
                         <label for="inputPassword4">Lantai :</label>
                         <select class="form-control" name="lantaid1[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttond">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->
                     <br>
                    <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">E. KORIDOR</div>
                    <br>
                    <div class="form-row field_wrappere">
                       <div class="form-group col-md-1">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantaie[]">
                            <option>Pilih</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langite[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Lampu Penerangan :</label>
                          <select class="form-control" name="lampue[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">Dinding :</label>
                         <select class="form-control" name="dindinge[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">Hiasan Dinding :</label>
                         <select class="form-control" name="hiasandindinge[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Tempat Sampah :</label>
                         <select class="form-control" name="tempatsampahe[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Indor Plant :</label>
                         <select class="form-control" name="indoorplante[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Electrical Plug:</label>
                         <select class="form-control" name="electricale[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">Lantai :</label>
                         <select class="form-control" name="lantaie1[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttone">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->
                    <br>
                    <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">F. TOILET PRIA </div>
                    <br>
                    <div class="form-row field_wrapperf">
                       <div class="form-group col-md-2">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantaif[]">
                            <option>Pilih</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langitf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">kap Lampu Penerangan :</label>
                          <select class="form-control" name="lampuf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Dinding :</label>
                         <select class="form-control" name="dindingf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Cermin :</label>
                         <select class="form-control" name="cerminf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-2">
                         <label for="inputPassword4">Washtafel :</label>
                         <select class="form-control" name="washtafelf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-3">
                         <label for="inputPassword4">Urinoir:</label>
                         <select class="form-control" name="urinoirf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-3">
                         <label for="inputPassword4">Closet:</label>
                         <select class="form-control" name="closetf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Tempat Sampah :</label>
                         <select class="form-control" name="tempatsampahf[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                         <div class="form-group col-md-1">
                         <label for="inputPassword4">Lantai :</label>
                         <select class="form-control" name="lantaif1[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttonf">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->
                    <br>
                    <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">G. TOILET WANITA </div>
                    <br>
                    <div class="form-row field_wrapperg">
                       <div class="form-group col-md-2">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantaig[]">
                            <option>Pilih</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langitg[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">kap Lampu Penerangan :</label>
                          <select class="form-control" name="lampug[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Dinding :</label>
                         <select class="form-control" name="dindingg[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Cermin :</label>
                         <select class="form-control" name="cerming[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-2">
                         <label for="inputPassword4">Washtafel :</label>
                         <select class="form-control" name="washtafelg[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-3">
                         <label for="inputPassword4">Urinoir:</label>
                         <select class="form-control" name="urinoirg[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-3">
                         <label for="inputPassword4">Closet:</label>
                         <select class="form-control" name="closetg[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Tempat Sampah :</label>
                         <select class="form-control" name="tempatsampahg[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                         <div class="form-group col-md-1">
                         <label for="inputPassword4">Lantai :</label>
                         <select class="form-control" name="lantaig1[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttong">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->

                   <br>
                    <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">H. Tangga</div>
                    <br>
                    <div class="form-row field_wrapperh">
                       <div class="form-group col-md-2">
                         <label for="inputEmail4">Lantai :</label>
                          <select class="form-control select2" name="lantaih[]">
                            <option>Pilih </option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Relling :</label>
                         <select class="form-control" name="rellingh[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Lantai :</label>
                          <select class="form-control" name="lantaih1[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                        
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttonh">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->

                   <br>
                    <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">I. FUNCTION ROOM 4 SEKAWAN</div>
                    <br>
                    <div class="form-row field_wrapperi">
                       <div class="form-group col-md-1">
                         <label for="inputEmail4">Lantai</label>
                          <select class="form-control select2" name="lantaii[]">
                            <option>Pilih Lantai</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Ceilling / langit-langit :</label>
                         <select class="form-control" name="langiti[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Dinding :</label>
                          <select class="form-control" name="dindingi[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-2">
                         <label for="inputPassword4">Hiasan Dinding :</label>
                         <select class="form-control" name="hiasandindingi[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">Tanaman Plastik :</label>
                         <select class="form-control" name="tanamanplastiki[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Kaca :</label>
                         <select class="form-control" name="kacai[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-1">
                         <label for="inputPassword4">Furniture:</label>
                         <select class="form-control" name="furniturei[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                         <div class="form-group col-md-1">
                         <label for="inputPassword4">Lantai :</label>
                         <select class="form-control" name="lantaii1[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttoni">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->

                   <br>
                    <!-- Ruang Tunggu -->
                      <div class="alert alert-primary">J. Mushola</div>
                    <br>
                    <div class="form-row field_wrapperj">
                       <div class="form-group col-md-2">
                         <label for="inputEmail4">Lantai :</label>
                          <select class="form-control select2" name="lantaij[]">
                            <option>Pilih Lantai</option>
                            <option value="DS">DS</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Celling / Langit-langit :</label>
                         <select class="form-control" name="langitj[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                        <div class="form-group col-md-3">
                         <label for="inputPassword4">Dinding :</label>
                         <select class="form-control" name="dindingj[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Lantai :</label>
                          <select class="form-control" name="lantaij[]">
                            <option>Pilih</option>
                            <option value="Bersih">Bersih</option>
                            <option value="Kotor">Kotor</option>
                            <option value="Kotor Sekali">Kotor Sekali</option>
                          </select>
                       </div>
                       <div class="form-group col-md-1">
                         <label for="inputPassword4">&nbsp;</label>
                         <button type="button" id="btn-tambah-form" class="btn btn-success form-control add_buttonj">+</button>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->

                    <br>
                    <!-- Ruang Tunggu -->
                    <div></div>
                    <br>
                    <div class="form-row field_wrapperx">
                       <div class="form-group col-md-2">
                         <label for="inputEmail4">Lantai :</label>
                          <input type="file" id="image" name="image" class="form-control">
                       </div>
                       <div class="form-group col-md-3">
                         <label for="inputPassword4">Ket</label>
                         <textarea class="form-control" name="ket"></textarea>
                       </div>
                   </div>
                   <!-- end ruang tunggu -->

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