<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chariteam - Charity Projects</title>
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
  <link rel="stylesheet" href="css/custom.css">
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
          <li class="nav-item active"><a href="projects.html" class="nav-link">Projects</a></li>
          <li class="nav-item"><a href="meetingreport.html" class="nav-link">Reports</a></li>
          <li class="nav-item"><a href="listvolunteer.html" class="nav-link">Volunteers</a></li>
          <li class="nav-item"><a href="userProfileMain.html" class="nav-link">Profile</a></li>
          <li class="nav-item"><a href="login.html" class="nav-link">Log Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap" style="background-image: url('images/prj_1dark.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="font-weight-bold">Projects</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Charity Projects</h1>
        </div>
      </div>
    </div>
  </div>

  <!--  <div class="container">
</div> -->

  <section class="ftco-section">
    <div class="container">
      <div class="row py-4">
        <div class="col-md-6">
          <h3 class="">Current Charity Projects</h3>
        </div>
        <div class="col-md-6">
          <div class="float-right">
            <h3 class="d-inline mr-2 text-info">Add a Project</h3>
            <a href="addProject.html" type="button" class="float-right btn btn-info btn-lg" aria-label="Add Project">
              <span class="oi oi-plus" aria-hidden="true">
              </span>
            </a>
          </div>
        </div>
      </div>
      <?php
        include_once("scripts/config.php");
        try {
          $pdo->beginTransaction();
          $sql = "SELECT * FROM project";
          $result = $pdo->query($sql);
          while ($res = $result->fetch()) {
            $projectID = $res["project_ID"];
            $projectName = $res["p_name"];
            $summary = $res["p_summary"];
            $description = $res["p_description"];
            $target = $res["p_target"];
            $image = $res["p_image"];
          }
        } catch (Exception $e) {
          echo "Error: " . $e;
        }
        $pdo = null;
        ?>

      <div class="row d-flex" id="page1">
      
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#modal1" class="img" style="background-image: url(images/cause-1.jpg);" data-toggle="modal"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#modal1" data-toggle="modal">Clean Water for Rural Areas</a></h3>
              <p>Provide countries with clean water to help them overcome dehydration and maintain positive hygiene.</p>
              <span class="donation-time mb-3 d-block">Last donation 3d ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$22,306 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/cause-2.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Safety Training to Growing Children</a></h3>
              <p>Raise awareness to children about the threats they are facing as well as ways to avoid them.</p>
              <span class="donation-time mb-3 d-block">Last donation 3w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,004 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/cause-3.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Blankets For Those Without Shelter</a></h3>
              <p>Get them through the freezing night with warm, cozy blankets and proper clothings.</p>
              <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$17,032 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/cause-4.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Medical Care for War Victims</a></h3>
              <p>Enable healthcare for victims of war who were affected physically and psychologically</p>
              <span class="donation-time mb-3 d-block">Last donation 2d ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 49%" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$14,548 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/cause-5.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Care for Refugees In Foreign Countries</a></h3>
              <p>Help refugees who are lost in a different environment to survive by providing necessities.</p>
              <span class="donation-time mb-3 d-block">Last donation 6d ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 34%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$10,212 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/cause-6.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Education for The Poverty-Stricken</a></h3>
              <p>Allow access to primary and secondary education for those who are unable to afford them.</p>
              <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$17,471 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-none" id="page2">
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/image_10.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Forest and Wildlife Conservation</a></h3>
              <p>Help save the forest and wildlife from destruction so that it may survive for centuries more.</p>
              <span class="donation-time mb-3 d-block">Last donation 3d ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$22,306 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/image_7.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Medical Funding for Cancer Patients</a></h3>
              <p>Help patients facing hardships battle against cancer by funding their medical fees.</p>
              <span class="donation-time mb-3 d-block">Last donation 3w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$12,004 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/image_8.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Procure Tools for Covid-19 Research</a></h3>
              <p>Provide researchers and scientists with the required tools to aid in their research.</p>
              <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$17,032 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/image_9.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Poverty Food Rescue</a></h3>
              <p>Help food banks and food rescue activities ensure hunger-relief among those who are facing poverty.</p>
              <span class="donation-time mb-3 d-block">Last donation 2d ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 49%" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$14,548 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/image_11.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Provide Shelter</a></h3>
              <p>Assist in building shelter for the homeless who are barely scraping through their lives.</p>
              <span class="donation-time mb-3 d-block">Last donation 6d ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 34%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$10,212 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="cause-entry">
            <a href="#" class="img" style="background-image: url(images/image_12.jpg);"></a>
            <div class="text p-3 p-md-4">
              <h3><a href="#">Save The Ocean</a></h3>
              <p>Contribute to saving the ocean and the aquatic life by funding those who preserve them.</p>
              <span class="donation-time mb-3 d-block">Last donation 1w ago</span>
              <div class="progress custom-progress-success">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <span class="fund-raised d-block">$17,471 raised of $30,000</span>
              <div class="text-center">
                <a href="editProject.html" type="button" class="float-center btn btn-info" aria-label="Edit Project">
                  <span class="oi oi-pencil" aria-hidden="true">
                  </span>
                </a>
                <a href="" type="button" class="btn-center btn btn-info" data-toggle="modal" data-target="#deleteModal" aria-label="Delete Project">
                  <span class="oi oi-minus" aria-hidden="true">
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <!-- <li><a href="#">&lt;</a></li> -->
              <li><button class="btn btn-warning" onclick="showPage('page1'); return false;">1</button></li>
              <li><button class="btn btn-warning" onclick="showPage('page2'); return false;">2</button></li>
              <li><button class="btn btn-warning" onclick="showPage('page2'); return false;">3</button></li>
              <li><button class="btn btn-warning" onclick="showPage('page2'); return false;">4</button></li>
              <li><button class="btn btn-warning" onclick="showPage('page2'); return false;">5</button></li>
              <!-- <li><a href="#">&gt;</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Confirm Deletion Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you would like to delete the project?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Clean Water for Rural Areas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <img class="img-fluid" src="images/cause-1.jpg" alt="Cause One">
        <div class="modal-body">
          According to the World Water Assessment Program, today, half the world’s population lives in urban centers, compared to less than 15 percent in 1900. The world’s urban areas present unique water management challenges, but they also provide some opportunities.
          <br><br>
          When millions of people live in close proximity, localized sources are not always able to match high-volume water demand. Good management of regional watersheds to provide an adequate water supply can be quite difficult—technically and politically—in rapidly urbanizing areas.
          <br><br>
          Many of the world cities are growing exponentially and unchecked development is spawning slum neighborhoods that lack water infrastructures. Where proper sanitation is lacking, untreated human waste is disposed of in open ditches, streams, and rivers. These waste products are a serious health hazard, and they dramatically increase the spread of waterborne and sanitation-related diseases like diarrhea and parasitic infections.
          <br><br>
          The poor bear the brunt of these burdens. Some 180 million slum dwellers worldwide lack access to clean drinking water. In areas poorly served with water and sanitation, the child mortality rate is many times higher than in areas with adequate water and sanitation services.
          <br><br>
        </div>
        <div class="modal-footer">
          <a href="project-volunteers.html" class="btn btn-primary">Manage Volunteers</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

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
              <li><a href="listvolunteer.html" class="py-2 d-block">Volunteers</a></li>
              <li><a href="userProfileMain.html" class="py-2 d-block">Profile</a></li>
              <li><a href="login.html" class="py-2 d-block">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


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
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADPWVyNFbG-E0rpvNF6qnL6XBdIy48L94&sensor=false"></script>
<script src="js/google-map.js"></script> -->
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>