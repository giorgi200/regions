
<!DOCTYPE html>
<html lang="en">
  <head>
 
    <title>ADMIN - LOGIN</title>

    <!-- vendor css -->
    <link href="../../assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../lib/assets/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../assets/css/bracket.css">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center ht-100v">
      <img src="../../assets/img/village.jpg" class="wd-100p ht-100p object-fit-cover" alt="">
      <div class="overlay-body bg-black-6 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bd bd-white-2 bg-black-7">
            
            <div class="signin-logo tx-center tx-28 tx-bold tx-white mg-b-30">
                <span class="tx-normal">
                    [</span> ADMIN <span class="tx-info">Panel</span> <span class="tx-normal">]
                </span>
            </div>
            <?php    if(isset($_GET['verifed'])){ ?>
                <div class="tx-white-5 tx-18 tx-center mg-b-20">პაროლი გაიგზავნა მეილზე...</div>
            <?php } else{?>
            <div class="form-group">
                <input type="text" class="form-control fc-outline-dark" placeholder="ელ.ფოსტა">
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">აღდგენა</button>
            <?php } ?>
            <?php    if(isset($_GET['verifed'])){ ?>
                <a href="login.php" class=" btn btn-info btn-block tx-12 d-block wd-200 mx-auto">უკან დაბრუნება</a>
            <?php } ?>
        </div><!-- login-wrapper -->
      </div><!-- overlay-body -->
    </div><!-- d-flex -->

    <script src="../../assets/lib/jquery/jquery.js"></script>
    <script src="../../assets/lib/popper.js/popper.js"></script>
    <script src="../../assets/lib/bootstrap/bootstrap.js"></script>

  </body>
</html>
