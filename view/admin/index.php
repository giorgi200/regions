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
    <div class="br-pagetitle">
      <i class="icon ion-ios-home-outline"></i>
      <div>
        <h4>მთავარი გვერდი</h4>
        <!-- <p class="mg-b-0">Do bigger things with Bracket plus, the responsive bootstrap 4 admin template.</p> -->
      </div>
    </div><!-- d-flex -->

    <div class="br-pagebody">
      <div class="row row-sm">

        <div class="col-sm-6 col-xl-2">
          <div class="bg-info rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
              <i class="ion ion-person tx-60 lh-0 tx-white op-7"></i>
              <div class="mg-l-20">
                <p class="tx-12 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">მომხმარებლების რაოდენობა</p>
                <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">175</p>
              </div>
            </div>
            <div id="ch1" class="ht-30 tr-y-1"></div>
          </div>
        </div><!-- col-3 -->

        <div class="col-sm-6 col-xl-2">
          <div class="bg-indigo rounded overflow-hidden">
            <div class="pd-x-20 pd-t-20 d-flex align-items-center">
              <i class="ion ion-chatboxes tx-60 lh-0 tx-white op-7"></i>
              <div class="mg-l-20">
                <p class="tx-12 tx-spacing-1 tx-mont tx-semibold tx-uppercase tx-white-8 mg-b-10">შემოსული შეტყობინებები </p>
                <p class="tx-24 tx-white tx-lato tx-bold mg-b-0 lh-1">47</p>
              </div>
            </div>
            <div id="ch1" class="ht-30 tr-y-1"></div>
          </div>
        </div><!-- col-3 -->
      </div><!-- row -->

      

    </div><!-- br-pagebody -->
    <footer class="br-footer">
      <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; 2019. All Rights Reserved.</div>
        <div>Author: Giorgi Qochiashvili</div>
      </div>
    </footer>
  </div><!-- br-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <script src="../../assets/lib/jquery/jquery.js"></script>
  <script src="../../assets/lib/popper.js/popper.js"></script>
  <script src="../../assets/lib/bootstrap/bootstrap.js"></script>
  <script src="../../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="../../assets/lib/moment/moment.js"></script>
  <script src="../../assets/lib/jquery-ui/jquery-ui.js"></script>
  <script src="../../assets/lib/jquery-switchbutton/jquery.switchButton.js"></script>
  <script src="../../assets/lib/peity/jquery.peity.js"></script>
  <script src="../../assets/lib/d3/d3.js"></script>
  <script src="../../assets/lib/rickshaw/rickshaw.min.js"></script>
  <script src="../../assets/lib/Flot/jquery.flot.js"></script>
  <script src="../../assets/lib/Flot/jquery.flot.resize.js"></script>
  <script src="../../assets/lib/flot-spline/jquery.flot.spline.js"></script>
  <script src="../../assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
  <script src="../../assets/lib/echarts/echarts.min.js"></script>
  <script src="../../assets/lib/select2/js/select2.full.min.js"></script>
  <script src="../../assets/lib/gmaps/gmaps.js"></script>

  <script src="../../assets/js/bracket.js"></script>
  <script src="../../assets/js/ResizeSensor.js"></script>
  <script src="../../assets/js/dashboard.js"></script>
  <script>
    $(function(){
      'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
  </body>
  </html>
