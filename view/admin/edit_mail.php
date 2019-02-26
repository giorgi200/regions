<!-- http://numeraljs.com/ -->
<?php 
$page = 'main';
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once('./layout/head.php') ?>
<body>

  <!-- ########## START: LEFT PANEL ########## -->
  <?php require_once('./layout/sidebar.php') ?>
  <!-- ########## END: LEFT PANEL ########## -->
  <!-- ########## START: HEAD PANEL ########## -->
  <?php require_once('./layout/header.php') ?>
  <!-- ########## END: HEAD PANEL ########## -->
  <!-- ########## START: RIGHT PANEL ########## -->
  <?php require_once('./layout/r_sidebar.php') ?>
  <!-- ########## END: RIGHT PANEL ########## --->

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="br-mainpanel">
    <div class="br-pageheader">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index.php">მთავარი</a>
        <a class="breadcrumb-item" href="mailbox.php">შეტყობინებები</a>
        <span class="breadcrumb-item active">რედაქტირება</span>
      </nav>
    </div><!-- br-pageheader -->
    <div class="br-pagetitle">
      <i class="icon ion-edit"></i>
      <div>
        <h4>რედაქტირება</h4>
        <!-- <p class="mg-b-0">Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p> -->
      </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
      <div class="br-section-wrapper">

        <div class="form-layout form-layout-7">
          <div class="row no-gutters">
            <div class="col-5 col-sm-4">
              სახელი, გვარი:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8 ">
              <input class="form-control " type="text" name="fullname" >
            </div><!-- col-8 -->
          </div><!-- row -->

          <div class="row no-gutters">

            <div class="col-5 col-sm-4">
              ტელეფონის ნომერი:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" type="text" name="firstname" >
            </div><!-- col-8 -->
          </div><!-- row -->

          <div class="row no-gutters">

            <div class="col-5 col-sm-4">
              პირადი ნომერი :
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" type="text" name="firstname" placeholder="ნომერი არ არის">
            </div><!-- col-8 -->
          </div><!-- row -->


          <div class="row no-gutters">

            <div class="col-5 col-sm-4">
              მუნიციპალიტეტი:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8 pd-0-force">
              <select class="form-control select2" data-placeholder="აირჩიე...">
                <option value=""></option>
                <option value="gurjaani">გურჯაანი</option>
                <option value="telavi">თელავი</option>
              </select>
            </div><!-- col-8 -->
          </div><!-- row -->
          <div class="row no-gutters">

            <div class="col-5 col-sm-4">
              კატეგორია:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8 pd-0-force">
              <select class="form-control select2" data-placeholder="აირჩიე...">
                <option value=""></option>
                <option>წყალმომარაგება</option>
                <option>გზის გაყვანა</option>
                <option>განათების დამონტაჟება</option>

              </select>
            </div><!-- col-8 -->
          </div><!-- row -->

          <div class="row no-gutters">

            <div class="col-5 col-sm-4">
              მისამართი:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
              <input class="form-control" type="text" name="firstname" >
            </div><!-- col-8 -->
          </div><!-- row -->




          <div class="row no-gutters">

            <div class="col-5 col-sm-4">
              შეტყობინება:
            </div><!-- col-4 -->
            <div class="col-7 col-sm-8">
             <textarea rows="8" class="form-control" ></textarea>
           </div><!-- col-8 -->
         </div><!-- row -->

         <div class="row no-gutters">

          <div class="col-5 col-sm-4">
            სურათი:
          </div><!-- col-4 -->
          <div class="col-7 col-sm-8">
            <figure class="overlay wd-400">
              <img src="../../assets/img/img11.jpg" class="img-fluid"  id="forChange">
              <figcaption class="overlay-body d-flex align-items-end justify-content-center">
                <div class="img-option">
                  <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} ფაილი აიტვირთა" >
                  <label for="file" class="tx-white bg-info">
                    <i class="icon ion-ios-upload-outline tx-24"></i>
                    <span>სურათის ატვირთვა.</span>
                  </label>
                </div>
              </figcaption>
            </figure>
          </div><!-- col-8 -->
        </div><!-- row -->


        <div class="form-layout-footer bd pd-20 bd-t-0">
          <button class="btn btn-info">გაზიარება & შენახვა</button>
          <button class="btn btn-secondary">შენახვა</button>
        </div>
      </div><!-- form-layout -->

    </div><!-- br-pagebody -->
  </div>
</div>
<footer class="br-footer">
  <div class="footer-left">
    <div class="mg-b-2">Copyright &copy; 2019. All Rights Reserved.</div>
    <div>Author: Giorgi Qochiashvili</div>
  </div>
</footer>
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>
<script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="../lib/moment/moment.js"></script>
<script src="../lib/jquery-ui/jquery-ui.js"></script>
<script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="../lib/peity/jquery.peity.js"></script>
<script src="../lib/highlightjs/highlight.pack.js"></script>
<script src="../lib/select2/js/select2.min.js"></script>

<script src="../js/bracket.js"></script>
<script>
  $(function(){
    'use strict'


         $( '.inputfile' ).each( function()
        {
          var $input   = $( this ),
            $label   = $input.next( 'label' ),
            labelVal = $label.html();

          $input.on( 'change', function( e )
          {
            var fileName = '';
            $('#forChange').fadeIn().attr('src', URL.createObjectURL(e.target.files[0]))


            if( this.files && this.files.length > 1 )
              fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
            else if( e.target.value )
              fileName = e.target.value.split( '\\' ).pop();

            if( fileName )
              $label.find( 'span' ).html( fileName );
            else
              $label.html( labelVal );
          });

          // Firefox bug fix
          $input
          .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
          .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });

        });





    $('.form-layout .form-control').on('focusin', function(){
      $(this).closest('.form-group').addClass('form-group-active');
    });

    $('.form-layout .form-control').on('focusout', function(){
      $(this).closest('.form-group').removeClass('form-group-active');
    });

        // Select2
        $('#select2-a, #select2-b').select2({
          minimumResultsForSearch: Infinity
        });

        $('#select2-a').on('select2:opening', function (e) {
          $(this).closest('.form-group').addClass('form-group-active');
        });

        $('#select2-a').on('select2:closing', function (e) {
          $(this).closest('.form-group').removeClass('form-group-active');
        });







      });
    </script>

  </body>
  </html>
