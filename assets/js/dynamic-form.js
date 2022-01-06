   $(document).ready(function() {
      var maxField = 50; //Input fields increment limitation
     
      var addButton = $('.add_button');
      var addButtonb = $('.add_buttonb');
       var addButtonc = $('.add_buttonc');
       var addButtond = $('.add_buttond');
       var addButtone = $('.add_buttone');
       var addButtonf = $('.add_buttonf');
       var addButtong = $('.add_buttong');
       var addButtonh = $('.add_buttonh');
       var addButtoni = $('.add_buttoni');
       var addButtonj = $('.add_buttonj');//Add button selector

      var wrapper = $('.field_wrapper');
      var wrapperb = $('.field_wrapperb');
      var wrapperc = $('.field_wrapperc');
      var wrapperd = $('.field_wrapperd');
      var wrappere = $('.field_wrappere');
      var wrapperf = $('.field_wrapperf');
      var wrapperg = $('.field_wrapperg');
      var wrapperh = $('.field_wrapperh');
      var wrapperi = $('.field_wrapperi');
      var wrapperj = $('.field_wrapperj'); //Input field wrapper
      var fieldHTML = ""; //New input field html 
      var x = 1; //Initial field counter is 1

      //Once add button is clicked
      $(addButton).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapper).append(
            "<div class='form-group col-md-2 rm" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantai[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rm" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langit[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rm" + x + "'><label for='inputEmail4'>Lampu Penerangan :</label>"+
            "<select class='form-control' name='lampu[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rm" + x + "'><label for='inputEmail4'>Pilar-pilar :</label>"+
            "<select class='form-control' name='pilar[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rm" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantai1[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rm" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_button'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapper).on('click', '.remove_button', function(e) {
        e.preventDefault();
        $('.rm' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

      // b

         //Once add button is clicked
      $(addButtonb).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapperb).append(
            "<div class='form-group col-md-1 rmb" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaib[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmb" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langitb[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmb" + x + "'><label for='inputEmail4'>Lampu Penerangan :</label>"+
            "<select class='form-control' name='lampub[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmb" + x + "'><label for='inputEmail4'>Pilar-pilar :</label>"+
            "<select class='form-control' name='bpilar[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmb" + x + "'><label for='inputEmail4'>Pintu Kaca :</label>"+
            "<select class='form-control' name='bpintu[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmb" + x + "'><label for='inputEmail4'>Indoor Plant:</label>"+
            "<select class='form-control' name='bindoor[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmb" + x + "'><label for='inputEmail4'>Nomat :</label>"+
            "<select class='form-control' name='bnomat[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmb" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttonb'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperb).on('click', '.remove_buttonb', function(e) {
        e.preventDefault();
        $('.rmb' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

      // c

               //Once add button is clicked
      $(addButtonc).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapperc).append(
            "<div class='form-group col-md-1 rmc" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaic[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmc" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langitc[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmc" + x + "'><label for='inputEmail4'>Lampu Penerangan :</label>"+
            "<select class='form-control' name='lampuc[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmc" + x + "'><label for='inputEmail4'>Dinding :</label>"+
            "<select class='form-control' name='dindingc[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmc" + x + "'><label for='inputEmail4'>Hiasan Dinding :</label>"+
            "<select class='form-control' name='hiasandindingc[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmc" + x + "'><label for='inputEmail4'>Furnuture</label>"+
            "<select class='form-control' name='furniturec[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmc" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantai1c[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmc" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttonc'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperc).on('click', '.remove_buttonc', function(e) {
        e.preventDefault();
        $('.rmc' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

        //d
                  //Once add button is clicked
      $(addButtond).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapperd).append(
            "<div class='form-group col-md-1 rmd" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaid[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmd" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langitd[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmd" + x + "'><label for='inputEmail4'>Lampu Penerangan :</label>"+
            "<select class='form-control' name='lampud[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmd" + x + "'><label for='inputEmail4'>Dinding :</label>"+
            "<select class='form-control' name='dindingd[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmd" + x + "'><label for='inputEmail4'>Hiasan Dinding :</label>"+
            "<select class='form-control' name='hiasandindingd[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmd" + x + "'><label for='inputEmail4'>Furnuture :</label>"+
            "<select class='form-control' name='furnitured[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmd" + x + "'><label for='inputEmail4'>Telepone :</label>"+
            "<select class='form-control' name='teleponed[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmd" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaid1[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmd" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttond'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperd).on('click', '.remove_buttond', function(e) {
        e.preventDefault();
        $('.rmd' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });


              //e
                  //Once add button is clicked
      $(addButtone).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrappere).append(
            "<div class='form-group col-md-1 rme" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaie[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rme" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langite[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rme" + x + "'><label for='inputEmail4'>Lampu Penerangan :</label>"+
            "<select class='form-control' name='lampue[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-1 rme" + x + "'><label for='inputEmail4'>Dinding :</label>"+
            "<select class='form-control' name='dindinge[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rme" + x + "'><label for='inputEmail4'>Hiasan Dinding :</label>"+
            "<select class='form-control' name='hiasandindinge[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rme" + x + "'><label for='inputEmail4'>Tempat Sampah</label>"+
            "<select class='form-control' name='tempatsampahe[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rme" + x + "'><label for='inputEmail4'>Indoor Plant :</label>"+
            "<select class='form-control' name='indoorplante[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rme" + x + "'><label for='inputEmail4'>Electrical Plug :</label>"+
            "<select class='form-control' name='electricale[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rme" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaie1[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rme" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttone'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrappere).on('click', '.remove_buttone', function(e) {
        e.preventDefault();
        $('.rme' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });


      //f

                  //Once add button is clicked
      $(addButtonf).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
     
          $(wrapperf).append(
            "<div class='form-group col-md-2 rmf" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaif[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmf" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langitf[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmf" + x + "'><label for='inputEmail4'>Kap Lampu Penerangan :</label>"+
            "<select class='form-control' name='lampuf[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmf" + x + "'><label for='inputEmail4'>Dinding :</label>"+
            "<select class='form-control' name='dindingf[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmf" + x + "'><label for='inputEmail4'>Cermin :</label>"+
            "<select class='form-control' name='cerminf[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmf" + x + "'><label for='inputEmail4'>Washtafel</label>"+
            "<select class='form-control' name='washtafelf[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmf" + x + "'><label for='inputEmail4'>Urinoir</label>"+
            "<select class='form-control' name='urinoirf[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmf" + x + "'><label for='inputEmail4'>Closet :</label>"+
            "<select class='form-control' name='closetf[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmf" + x + "'><label for='inputEmail4'>Tempat Sampah :</label>"+
            "<select class='form-control' name='tempatsampahf[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmf" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaif1[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmf" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttonf'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperf).on('click', '.remove_buttonf', function(e) {
        e.preventDefault();
        $('.rmf' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

      // G

       $(addButtong).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapperg).append(
            "<div class='form-group col-md-2 rmg" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaig[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmg" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langitg[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmg" + x + "'><label for='inputEmail4'>Kap Lampu Penerangan :</label>"+
            "<select class='form-control' name='lampug[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmg" + x + "'><label for='inputEmail4'>Dinding :</label>"+
            "<select class='form-control' name='dindingg[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmg" + x + "'><label for='inputEmail4'>Cermin :</label>"+
            "<select class='form-control' name='cerming[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmg" + x + "'><label for='inputEmail4'>Washtafel</label>"+
            "<select class='form-control' name='washtafelg[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmg" + x + "'><label for='inputEmail4'>Urinoir</label>"+
            "<select class='form-control' name='urinoirg[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmg" + x + "'><label for='inputEmail4'>Closet :</label>"+
            "<select class='form-control' name='closetg[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmg" + x + "'><label for='inputEmail4'>Tempat Sampah :</label>"+
            "<select class='form-control' name='tempatsampahg[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmg" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaig1[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmg" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttong'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperg).on('click', '.remove_buttong', function(e) {
        e.preventDefault();
        $('.rmg' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

       // H

       $(addButtonh).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapperh).append(
            "<div class='form-group col-md-2 rmh" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lanataih[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmh" + x + "'><label for='inputEmail4'>Relling :</label>"+
            "<select class='form-control' name='rellingh[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmh" + x + "'><label for='inputEmail4'>Lantai :</label>"+
            "<select class='form-control' name='lantaih1[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmh" + x + "'>"+
            "</div>" +
            "<div class='form-group col-md-1 rmh" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttonh'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperh).on('click', '.remove_buttonh', function(e) {
        e.preventDefault();
        $('.rmh' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

      // i

 $(addButtoni).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapperi).append(
            "<div class='form-group col-md-1 rmi" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lanataii[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmi" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langiti[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-2 rmi" + x + "'><label for='inputEmail4'>Dinding :</label>"+
            "<select class='form-control' name='dindingi[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
             "<div class='form-group col-md-2 rmi" + x + "'><label for='inputEmail4'>Hiasan Dinding :</label>"+
            "<select class='form-control' name='hiasandindingi[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmi" + x + "'><label for='inputEmail4'>Tanaman Plastik :</label>"+
            "<select class='form-control' name='tanamanplastiki[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmi" + x + "'><label for='inputEmail4'>Kaca</label>"+
            "<select class='form-control' name='kacai[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmi" + x + "'><label for='inputEmail4'>Furniture</label>"+
            "<select class='form-control' name='furniturei[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmi" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lantaii1[]'>"+
                       "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmi" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttoni'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperi).on('click', '.remove_buttoni', function(e) {
        e.preventDefault();
        $('.rmi' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

      // J

       $(addButtonj).click(function() {
        //Check maximum number of input fields
        if (x < maxField) {
          x++; //Increment field counter
          $(wrapperj).append(
            "<div class='form-group col-md-2 rmj" + x + "'><label for='inputEmail4'>Lantai</label>"+
            "<select class='form-control' name='lanataij[]'>"+
                        "<option>Pilih Lantai</option>"+
                        "<option value='DS'>DS</option>"+
                        "<option value='1'>1</option>"+
                       " <option value='2'>2</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmj" + x + "'><label for='inputEmail4'>Ceilling / langit-langit :</label>"+
            "<select class='form-control' name='langitj[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmj" + x + "'><label for='inputEmail4'>Dinding :</label>"+
            "<select class='form-control' name='dindingj[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-3 rmj" + x + "'><label for='inputEmail4'>Lantai:</label>"+
            "<select class='form-control' name='lantai1j[]'>"+
                        "<option>Pilih</option>"+
                        "<option value='Bersih'>Bersih</option>"+
                        "<option value='Kotor'>Kotor</option>"+
                       " <option value='Kotor Sekali'>Kotor Sekali</option>"+
                      "</select>"+
            "</div>" +
            "<div class='form-group col-md-1 rmj" + x + "'><label for='inputPassword4'>&nbsp;</label><button type='button' id='btn-tambah-form' class='btn btn-danger form-control remove_buttonj'>X</button></div>"); //Add field html
        }
      });

      //Once remove button is clicked
      $(wrapperj).on('click', '.remove_buttonj', function(e) {
        e.preventDefault();
        $('.rmj' + x + '').remove(); //Remove field html
        x--; //Decrement field counter
      });

    });

 
