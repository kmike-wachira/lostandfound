<?php 
include('backend/connect.php');
   $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="assets/css/style.min.css" rel="stylesheet">
</head>

<body>
<?php include('includes/navbar.php') ?>

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
      <!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <?php 
         $itemsql="SELECT * FROM items WHERE id=${_GET['id']}";
         $item_result=$connect->query($itemsql);
         $category="";
         if($item_result):
           while($itemrows=$item_result->fetch_assoc()):   $category=$itemrows['category']?>
         
        <div class="col-md-6 mb-4">
          <img src="<?= "images/".$itemrows['image'] ?>" class="img-fluid" alt="<?=$itemrows['item_name']?>">
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-6 mb-4">
          <!--Content-->
          <div class="p-4">
            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1"><?=$itemrows['category']?></span>
            <p class="lead font-weight-bold"><?=$itemrows['item_name']?></p>

              </a>            
            </div>

            <p class="lead">
              <span class="mr-1">
                <strong> Found on </strong>
              </span>
              <span><?=  date('M j<\s\up>S</\s\up> Y',strtotime($itemrows['date'])) ?></span>
            </p>
            <p class="lead font-weight-bold">Description</p>
            <p><?= $itemrows['description']?></p>

            <form class="d-flex justify-content-left">
              <!-- Default input -->
              <button class="btn btn-primary btn-md my-0 p" type="submit">Claim item
                <i class="fas fa-hands-helping ml-1"></i>
              </button>
            </form>
          </div>
          <!--Content-->

        </div>
        <!--Grid column-->
        <?php
           endwhile;
          else:
            echo "item not found";
          endif;
        ?>

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

          <h4 class="my-4 h4">Related items</h4>

          <p>This are also some items related to the product you are about claim.Please help us get contact to the owners</p>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn"> 
        <?php 
         $relateditemsql="SELECT * FROM items WHERE category='$category' limit 3";
         $relateditem_result=$connect->query($relateditemsql);
         if($relateditem_result):
           while($relateditemrows=$relateditem_result->fetch_assoc()):?>
           
            <div class="col-lg-4 col-md-12 mb-4">
              <img src="<?="images/".$relateditemrows['image'] ?>" class="img-fluid" alt="">
            </div>
            <?= $itemrows['category'];?>
        <?php
           endwhile;
          else:
            echo "No related item";
          endif;
        ?>

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
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
<?php
      include('modal.php');
?>