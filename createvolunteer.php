<?php
 $volunteer_ID = $v_firstName = $v_lastName = $v_email = $v_address1 = $v_address2 ="";
 $v_state = $v_status = $v_telNum = $v_publicInfo = $v_DOR = $v_image =$v_occ= "";

include_once("config.php");
 if (isset($_POST['submit'])) {
 // do post
 if ( isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["ic"]) && isset($_POST["email"]) && isset($_POST["address1"]) && isset($_POST["address2"]) && isset($_POST["state"])&& isset($_POST["status"])&& isset($_POST["tel"])&& isset($_POST["publicinfo"]) && isset($_POST["DOR"])&& isset($_POST["occ"])) {
         $v_firstName = $_POST["name"];
         $v_lastName =  $_POST["lastname"];
         $v_IC = $_POST["ic"];
         $v_email = $_POST["email"];
         $v_address1 = $_POST["address1"];
         $v_address2 = $_POST["address2"];
         $v_state = $_POST["state"];
         $v_status = $_POST["status"];
         $v_telNum = $_POST["tel"];
         $v_publicInfo = $_POST["publicinfo"];
         $v_DOR = $_POST["DOR"];
         $v_occ = $_POST["occ"];
        $imageData = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $imageProperties = getimagesize($_FILES['image']['tmp_name']); 

      if(empty($v_firstName)){
        $errMSG ="Please Enter Your First Name";
      }else if(empty($v_lastName)){
        $errMSG ="Please Enter Your Last Name";
      }else if(empty($v_IC)){
        $errMSG ="Please Enter Your IC";
      }else if(empty($v_email)){
        $errMSG ="Please Enter Your email";
      }else if(empty($v_address1)){
        $errMSG ="Please Enter Your address 1";
      }else if(empty($v_address2)){
        $errMSG ="Please Enter Your address 2";
      }else if(empty($v_state)){
        $errMSG ="Please Enter Your state";
      }
      
   
 } 
 


 if(!isset($errMSG)){
 // insert data to db       
  $sql = "INSERT INTO volunteer(v_firstName,v_lastName,v_IC, v_email, v_address1,v_address2 ,v_state,v_status,v_telNum,v_publicInfo,v_DOR,v_occ,v_image,v_image_type) VALUES ('$v_firstName','$v_lastName','$v_IC', '$v_email', '$v_address1','$v_address2' ,'$v_state','$v_status','$v_telNum','$v_publicInfo','$v_DOR','$v_occ','$imageData','{$imageProperties['mime']}')";
  $insert = $pdo->prepare($sql);
  if($insert ->execute()===true){
 echo "A new record added into the database successfully.<br><br>";
 $last_ID = $pdo->lastInsertId();
header('Location:displayprofile.php?v_ID='.$last_ID);
} else {
     echo "Error: ".$pdo->error."<br><br>";
 }
}
 } 
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Chariteam - Create New Volunteer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="shortcut icon" type="image/png" href="images/620806.png"> 
    
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="projects.html">Chariteam</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="projects.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="meetingreport.html" class="nav-link">Reports</a></li>
          <li class="nav-item active"><a href="listvolunteer.php?page=1" class="nav-link">Volunteers</a></li>
          <li class="nav-item"><a href="userProfileMain.html" class="nav-link">Profile</a></li>
          <li class="nav-item"><a href="login.html" class="nav-link">Log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap" style="background-image: url('images/volunteerheader.jpeg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="listvolunteer.html">Volunteers</a></span><span>Create Volunteer</span></p>
             <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Volunteer</h1>
           
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-gallery">
   
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group "style="margin-left: auto; margin-right: auto; text-align: center;">
          <img class="img-profile img-circle img-responsive center-block" style="margin-left: auto; margin-right: auto; text-align: center;border-radius: 50%"src="images/newvolunteer.jpg" alt="" width="90%" height="90%">
          <ul class="meta list list-unstyled">

              <br> <label class="label label-info">Volunteer</label>
               
              <form  method="post" enctype="multipart/form-data">
              <input style="margin-left: auto; margin-right: auto;text-align: center;"type="file" required="required" name="image" id="fileToUpload" accept="image/*">
             
           </ul>
          
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>New Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                        Please fill up the required(*) forms
                        </div>
                       <?php if(isset($errMSG)){
          ?>
                <div class="alert alert-danger">
                  <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
                <?php
      }?>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">First Name*</label> 
                                <div class="col-8">
                                  <input id="name" name="name" placeholder="First Name" class="form-control here"  type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="lastname" class="col-4 col-form-label">Last Name*</label> 
                                <div class="col-8">
                                  <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here"   type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="ic" class="col-4 col-form-label">IC*</label> 
                                <div class="col-8">
                                  <input id="ic" name="ic"  class="form-control here"  placeholder="123456-00-1234" pattern="[0-9]{6}-[0-9]{2}-[0-9]{4}"  type="text">
                                </div>
                              </div>
                             
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" aria-describedby="emailHelp" placeholder="user@example.com"   class="form-control here"  type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="add1" class="col-4 col-form-label">Address Line 1*</label> 
                                <div class="col-8">
                                  <input id="address1" name="address1" placeholder="Address Line 1" class="form-control here"  type="text">
                                </div>
                              </div>  
                              <div class="form-group row">
                                <label for="add2" class="col-4 col-form-label">Address Line 2*</label> 
                                <div class="col-8">
                                  <input id="address2" name="address2" placeholder="Address Line 2" class="form-control here" type="text">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label" >State*</label> 
                                <div class="col-8">
                                  <select id="select" name="state" class="custom-select">
                                    <option name="Johor">Johor</option>
                                    <option name="Melaka">Melaka</option>
                                    <option name="Negeri Sembilan">Negeri Sembilan</option>
                                    <option name="Terengganu">Terengganu</option>
                                    <option name="Kedah">Kedah</option>
                                    <option name="Perlis">Perlis</option>
                                    <option name="Kuala Lumpur">Kuala Lumpur</option>
                                    <option name="Selangor">Selangor</option>
                                    <option name="Pahang">Pahang</option>
                                    <option name="Perak">Perak</option>
                                    <option name="Pulau Pinang">Pulau Pinang</option>

                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Status</label> 
                                <div class="col-8">
                                  <select id="select" name="status" class="custom-select">
                                    <option value="Single">Single</option>
                                    <option value="Married">Maried</option>
                                    <option value="Widow">Widow</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="tel" class="col-4 col-form-label">Tel.</label> 
                                <div class="col-8">
                                  <input id="tel" name="tel"  placeholder="016-12345678" pattern="[0-9]{3}-[0-9]{7,8}" class="form-control here" type="tel">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="publicinfo" class="col-4 col-form-label">Public Info</label> 
                                <div class="col-8">
                                  <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="occupation" class="col-4 col-form-label">Occupation</label> 
                                <div class="col-8">
                                  <input id="occ" name="occ" placeholder="" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="tel" class="col-4 col-form-label">Date of Registration</label> 
                                <div class="col-8">
                                  <input id="DOR" name="DOR" placeholder="" class="form-control here" type="date">
                                </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Create Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
    </section>

    
    <?php  $pdo ->null;?>

    <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">About Website</h2>
            <p>This is a simple and convenient system that helps Project Managers to manage their charity projects all in just one website</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Upcoming Projects</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="projects.html">Safety Training to Growing Children</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> July 12, 2019</a></div>
                  <div><a href="#"><span class="icon-person" name="Organisation"></span> We Love Earth</a></div>
                 
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="projects.html">Clean Water for Rural Areas</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> November 25, 2019</a></div>
                  <div><a href="#"><span class="icon-person" name="Organisation"></span> Hope Org</a></div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
           <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Site Links</h2>
            <ul class="list-unstyled">
              <li><a href="projects.html" class="py-2 d-block">Projects</a></li>
              <li><a href="meetingreport.html" class="py-2 d-block">Reports</a></li>
              <li><a href="listvolunteer.php" class="py-2 d-block">Volunteers</a></li>
              <li><a href="userProfileMain.html" class="py-2 d-block">Profile</a></li>
              <li><a href="login.html" class="py-2 d-block">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
  
  </body>
</html>