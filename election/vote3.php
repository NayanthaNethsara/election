<?php 


session_start();


if ($_SESSION['issubmit'] == 1) {
 

$_SESSION['idno3'] = '';

}else{


$_SESSION = array();


            if (isset($_COOKIE[session_name()])) {


                setcookie(session_name(), '', time()-86400,'/');    

                 }

                session_destroy();

                header('location:index.php');
}


 ?><!DOCTYPE html>
<html  >
<head>

  
  <!-- Site made with Mobirise Website Builder v4.9.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo4.png" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Vote3</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-section form3 cid-rv5cFvnRs5" id="form3-9">

    

    

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    VOTE
                </h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Vote 3
                </h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <!---Formbuilder Form--->

                <form method="POST" class="mbr-form form-with-styler" >

                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" >
                            <input type="number" name="idno" placeholder="ID number" class="form-control display-7" id="email-form3-9" style="border-radius: 50px;" max="50" min="1">
                        </div>
                        <div class="col-auto input-group-btn">
                            <button type="submit" name="submit" class="btn btn-primary  display-4">VOTE</button>

                            
                        </div>

             
                    </div>

                             <button type="submit" name="skip" style="background:none; border: none; color: #00a2d1;">Skip Vote</button>


                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<?php 


if (isset($_POST['submit'])) {
 

    if (($_POST['idno']) <= 50 AND ($_POST['idno']) > 0) {
      

          $idno = $_POST['idno'];


            $_SESSION['idno3'] = $idno;

            header('location:vote.php');


    }


}elseif (isset($_POST['skip'])) {
  

    $_SESSION['idno3'] = 51;

    header('location:vote.php');

}


 ?>
  <section class="engine"></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <!--script src="assets/formoid/formoid.min.js"></script-->
  
  
</body>
</html>

