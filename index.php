<?php include('backend/connect.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Maseno lost and found</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="assets/css/style.min.css" rel="stylesheet">
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar p-4">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="blue-text">LNF</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="about.html" target="_blank">About LNF</a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href=""
              target="_blank">Found items</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4 mt-5" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <!-- <li data-target="#carousel-example-1z" data-slide-to="2"></li> -->
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Maseno find your lost item</strong>
              </h1>

              <p>
                <strong>Best place to giveout that mispalced item || device</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Its not always that we find a device or a mispalced item because we miss or lack that platform
                  to reach out the owner.its now the best time to change that.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">
                Share items here
                <i class="fas fa-share-alt-square ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Maseno find your lost item</strong>
              </h1>

              <p>
                <strong>Best place to giveout that mispalced item || device</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Its not always that we find a device or a mispalced item because we miss or lack that platform
                  to reach out the owner.its now the best time to change that.</strong>
              </p>

              <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-lg">
                Share the found item
                <i class="fas fa-share-alt ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark indigo mb-4">
        <ul class="nav nav-tabs mx-auto " id="myTab" role="tablist">
          <li class="nav-item white">
            <a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all"
              aria-selected="false">all</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="docs-tab" data-toggle="tab" href="#docs" role="tab" aria-controls="docs"
              aria-selected="false">documents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="books-tab" data-toggle="tab" href="#books" role="tab" aria-controls="books"
              aria-selected="false">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="ellects-tab" data-toggle="tab" href="#elects" role="tab" aria-controls="elects"
              aria-selected="false">Electronics</a>
          </li>
        </ul>    
        <!-- Collapsible content -->
      
      </nav>
      <!--/.Navbar-->
      <!--Navbar-->
   
      <!--/.Navbar-->

      <!--Section: Products v.3-->
      <section class="text-center mb-4">
        <div class="tab-content" id="myTabContent">
          <!-- tabs -->
          <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
            <div class="row wow fadeIn">

             
             <?php 
              $allsql="SELECT * FROM items";
              $all_result=$connect->query($allsql);
              if($all_result):
                while($allrows=$all_result->fetch_assoc()):?>
                  <!--Grid column-->
                  <div class="col-lg-3 col-md-6 mb-4">    
                <!--Card-->
                <div class="card">    
                  <!--Card image-->
                  <div class="view overlay" style="height: 150px;">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"  alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->    
                  <!--Card content-->
                  <div class="card-body text-center">
                    <!--Category & Title-->
                    <a href="" class="grey-text">
                      <h5 ><?=$allrows['category']?></h5>
                    </a>
                    <h5>
                      <strong>
                        <a href="" class="dark-grey-text"><?=$allrows['item_name']?> </a>
                      </strong>
                    </h5>
                    <p>
                     Found on <?=  date("Y,m,d",strtotime($allrows['date'])) ?>
                    </p>
                    <a href="item.php?id=1"> see more</a>
    
                  </div>
                  <!--Card content-->
    
                </div>
                <!--Card-->
    
              </div>
                  <!--Grid column-->
              <?php  endwhile;
              else:
                echo "No items found";
              endif;
             ?>            
              
            
    
            </div>

          </div>
          <div class="tab-pane fade" id="docs" role="tabpanel" aria-labelledby="docs-tab">
           <div class="row wow fadeIn">                      
            <?php 
            $allsql="SELECT * FROM items WHERE category='documents'";
            $all_result=$connect->query($allsql);
            if($all_result):
              while($allrows=$all_result->fetch_assoc()):?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">    
              <!--Card-->
              <div class="card">    
                <!--Card image-->
                <div class="view overlay" style="height: 150px;">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"  alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--Card image-->    
                <!--Card content-->
                <div class="card-body text-center">
                  <h5>
                    <strong>
                      <a href="" class="dark-grey-text"><?=$allrows['item_name']?> </a>
                    </strong>
                  </h5>
                  <p>
                    Found on <?=  date("Y,m,d",strtotime($allrows['date'])) ?>
                  </p>
                  <a href="item.php?id=1"> see more</a>

                </div>
                <!--Card content-->

              </div>
              <!--Card-->

            </div>
                <!--Grid column-->
            <?php  endwhile;
            else:
              echo "No items found";
            endif;
            ?> 
            </div>
          </div>
          <div class="tab-pane fade" id="elects" role="tabpanel" aria-labelledby="elects-tab">
          <div class="row wow fadeIn">                      
            <?php 
            $allsql="SELECT * FROM items WHERE category='elects'";
            $all_result=$connect->query($allsql);
            if($all_result):
              while($allrows=$all_result->fetch_assoc()):?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">    
              <!--Card-->
              <div class="card">    
                <!--Card image-->
                <div class="view overlay" style="height: 150px;">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"  alt="">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--Card image-->    
                <!--Card content-->
                <div class="card-body text-center">
                  <h5>
                    <strong>
                      <a href="" class="dark-grey-text"><?=$allrows['item_name']?> </a>
                    </strong>
                  </h5>
                  <p>
                    Found on <?=  date("Y,m,d",strtotime($allrows['date'])) ?>
                  </p>
                  <a href="item.php?id=1"> see more</a>

                </div>
                <!--Card content-->

              </div>
              <!--Card-->

            </div>
                <!--Grid column-->
            <?php  endwhile;
            else:
              echo "No items found";
            endif;
            ?> 
            </div>
          </div>
          <div class="tab-pane fade" id="books" role="tabpanel" aria-labelledby="books-tab">  
          <div class="row wow fadeIn">
            <div class="row wow fadeIn">                      
              <?php 
              $allsql="SELECT * FROM items WHERE category='books'";
              $all_result=$connect->query($allsql);
              if($all_result):
                while($allrows=$all_result->fetch_assoc()):?>
                  <!--Grid column-->
                  <div class="col-lg-3 col-md-6 mb-4">    
                <!--Card-->
                <div class="card">    
                  <!--Card image-->
                  <div class="view overlay" style="height: 150px;">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg" class="card-img-top"  alt="">
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                  </div>
                  <!--Card image-->    
                  <!--Card content-->
                  <div class="card-body text-center">
                    <h5>
                      <strong>
                        <a href="" class="dark-grey-text"><?=$allrows['item_name']?> </a>
                      </strong>
                    </h5>
                    <p>
                      Found on <?=  date("Y,m,d",strtotime($allrows['date'])) ?>
                    </p>
                    <a href="item.php?id=1"> see more</a>

                  </div>
                  <!--Card content-->

                </div>
                <!--Card-->

              </div>
                  <!--Grid column-->
              <?php  endwhile;
              else:
                echo "No items found";
              endif;
              ?> 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Products v.3-->
      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <li class="page-item active">
            <a class="page-link" href="#">1
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">5</a>
          </li>

          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
      <!--Pagination-->

    </div>
  </main>
  <!--Main layout-->
  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"
        role="button">Download MDB
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
        free tutorial
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
