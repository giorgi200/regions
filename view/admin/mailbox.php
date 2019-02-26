<?php 
  $page = 'mailbox';
?>
<html lang="en">
  <?php require_once('./layout/head.php') ?>
<body class="collapsed-menu email">

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
<div class="br-subleft">
  <nav class="nav br-nav-mailbox flex-column">
    <a href="" class="nav-link active">
      <i class="icon ion-ios-filing-outline"></i> ყველა წერილი
    </a>
    <a href="" class="nav-link">
      <i class="icon ion-ios-folder-outline"></i> ნანახი
    </a>
    <a href="" class="nav-link">
      <i class="icon ion-ios-paperplane-outline"></i> გამოქვეყნებული
    </a>
    <a href="" class="nav-link">
      <i class="icon ion-ios-trash-outline"></i> დაწუნებული
    </a>
  </nav>
</div>
<?php require_once('./layout/mails.php') ?>
<?php require_once('./layout/mailbox.php') ?>



<!-- ########## END: MAIN PANEL ########## -->

<script src="../../assets/lib/jquery/jquery.js"></script>
<script src="../../assets/lib/popper.js/popper.js"></script>
<script src="../../assets/lib/bootstrap/bootstrap.js"></script>
<script src="../../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="../../assets/lib/moment/moment.js"></script>
<script src="../../assets/lib/jquery-ui/jquery-ui.js"></script>
<script src="../../assets/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="../../assets/lib/peity/jquery.peity.js"></script>

<script src="../../assets/js/bracket.js"></script>
<script>
  $(function(){
    'use strict';

        // show only the icons and hide left menu label by default
        $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

        $(document).on('mouseover', function(e){
          e.stopPropagation();
          if($('body').hasClass('collapsed-menu')) {
            var targ = $(e.target).closest('.br-sideleft').length;
            if(targ) {
              $('body').addClass('expand-menu');

              // show current shown sub menu that was hidden from collapsed
              $('.show-sub + .br-menu-sub').slideDown();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.removeClass('d-lg-none');
              menuText.removeClass('op-lg-0-force');

            } else {
              $('body').removeClass('expand-menu');

              // hide current shown menu
              $('.show-sub + .br-menu-sub').slideUp();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.addClass('op-lg-0-force');
              menuText.addClass('d-lg-none');
            }
          }
        });

        $('.br-mailbox-list').perfectScrollbar();

        $('#showMailBoxLeft').on('click', function(e){
          e.preventDefault();
          if($('body').hasClass('show-mb-left')) {
            $('body').removeClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-left').addClass('fa-arrow-right');
          } else {
            $('body').addClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-right').addClass('fa-arrow-left');
          }
        });
      });
    </script>
  </body>
  </html>