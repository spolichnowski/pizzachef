<?php require('process.php')?>
<?php 
    if ($_SESSION['lang']=='en')
        include('en.php');
    else
        include('pl.php'); 
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Pizza Chef.</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
   crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header class="background-header d-flex justify-content-center">
    <div class="row align-self-center">
      <p class="box col-md-12 text-center">P I Z Z A &nbsp; C H E F&nbsp;.</p>
      <a href="#content" id="arrow" class="col-md-12 text-center">
        <i class="glyphicon glyphicon-chevron-down"></i>
      </a>
    </div>
  </header>
  <section id="content">
    <nav class="navbar navbar-expand-md navbar-dark rounded-0 sticky-top">
      <a class="navbar-brand h1 m-0">PIZZA CHEF.</a>
      <button type="button" class="navbar-toggle ml-auto" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false"
       aria-label="Toggle navigation" aria-controls="collapse-1">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapse-1">
        <ul class="navbar-nav text-center">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="arrow" href="#content" id="arrow">Bio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="arrow" href="#oferta">
              <?php echo $lang['offer']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://www.ppolichnowski.pl/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mailto:ppolichnowski@gmail.com">
              <?php echo $lang['email']; ?>
            </a>
          </li>
          <li class="display-none2 social-icons">
            <a target="_blank" href="https://www.instagram.com/piotrpolichnowski/">
              <i class="fa fa-instagram i-size-nav i"></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/in/piotr-polichnowski-47365ab0/">
              <i class="fa fa-linkedin-square i-size-nav i"></i>
            </a>
          </li>
          <li class="display-none2 flag">
            <a href="index.php?lang=<?php 
                    if ($_SESSION['lang'] == 'en') { 
                        echo 'pl';    
                    } else {
                        echo 'en';   
                    }
                    ?>">
              <img src="images/<?php
                            if ($_SESSION['lang'] == 'pl' ) 
                                echo 'uk.jpg';
                            else
                                echo 'pl.png'; 
                    ?>" alt="Flag" />
            </a>
          </li>
        </ul>
      </div>
      <div class="nav ml-auto-social social-icons display">
        <a target="_blank" href="https://www.instagram.com/piotrpolichnowski/">
          <i class="fa fa-instagram i-size-nav i"></i>
        </a>
        <a target="_blank" href="https://www.linkedin.com/in/piotr-polichnowski-47365ab0/">
          <i class="fa fa-linkedin-square i-size-nav i"></i>
        </a>
      </div>
      <div class="nav ml-auto-social flag display pl-3 pt-2">
        <a href="index.php?lang=<?php 
                    if ($_SESSION['lang'] == 'en') { 
                        echo 'pl';    
                    } else {
                        echo 'en';   
                    }
                    ?>">
          <img src="images/<?php
                        if ($_SESSION['lang'] == 'pl') 
                            echo 'uk.jpg';
                        else
                            echo 'pl.png'; 
                   ?>" alt="Flag" />
        </a>
      </div>
    </nav>
    <div class="background-introduction pb-5 mb-5">
      <div class="container h-100 d-flex">
        <div class="row align-self-center">
          <div class="col-sm-4 align-self-center margin-mobile">
            <img class="piter rounded-circle" src="images/Piotrek.jpeg" alt="Piotrek" />
          </div>
          <div class="col-sm-8 col-12 align-self-center">
            <p class="text-style text-justify">
              <?php echo $lang['intro_content'] ?>
            </p>
            <div class="color-a mr-0">
              <a href="intro.php" class="float-right btn btn-primary">
                <?php echo $lang['read_more'];?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="parallax1 d-flex justify-content-center">
      <div class="row align-self-center">
        <h1 class="col-md-12 text-center text-white">
          ''Pizza that's just what I need''
        </h1>
      </div>
    </div>
    <div class="color-bg">
      <div class="container justify-content-center pt-4 pb-5" id="oferta">
        <div class="row pt-5 pb-5 mt-5 mb-5">
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 pt-5 pb-5">
            <div class="text-center">
              <h2 class="text-center">
                <?php echo $lang['business']; ?>
              </h2>
              <span>
                <?php echo $lang['business_content']; ?>
              </span>
              <div class="pt-3 text-center">
                <a href="business.php" class="btn btn-primary">
                  <?php echo $lang['read_more'];?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-md-6 col-sm-6 pt-5 pb-5">
            <div class="text-center">
              <h2 class="text-center">
                <?php echo $lang['tech']; ?>
              </h2>
              <span>
                <?php echo $lang['tech_content']; ?>
              </span>
              <div class="pt-3 text-center">
                <a href="technology.php" class="btn btn-primary">
                  <?php echo $lang['read_more'];?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-12 col-md-6 col-sm-6 pt-5 pb-5">
            <div class="align-self-center text-center">
              <h2 class="text-center">
                <?php echo $lang['products']; ?>
              </h2>
              <span>
                <?php echo $lang['products_content']; ?>
              </span>
              <div class="pt-3 text-center">
                <a href="products.php" class="btn btn-primary">
                  <?php echo $lang['read_more'];?>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-3 col-12 col-md-6 col-sm-6 pt-5 pb-5">
            <div class="align-self-center text-center">
              <h2 class="text-center">
                <?php echo $lang['consulting']; ?>
              </h2>
              <span>
                <?php echo $lang['consulting_content']; ?>
              </span>
              <div class="pt-3 text-center">
                <a href="consulting.php" class="btn btn-primary">
                  <?php echo $lang['read_more'];?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="baner">
        <img src="./images/bgp.png" alt="The European Pizza and Pasta show."/>
    </div>
    <!--<div class="parallax d-flex justify-content-center">
      <div class="row align-self-center">
        <h1 class="col-md-12 text-center text-white">
        </h1>
      </div>
    </div>-->
    <section class="m-5 p-5">
      <div class="h-100 d-flex justify-content-center mb-5 mt-5 pt-5 pb-5 ml-0 mr-0">
        <div class="row1 row align-self-center justify-content-center m-0">
          <div class="column align-self-center">
            <img src="images/p1.jpg" alt="pizza" onclick="openImg(this);">
          </div>
          <div class="column align-self-center">
            <img src="images/p2.jpg" alt="pizza" onclick="openImg(this);">
          </div>
          <div class="column align-self-center">
            <img src="images/p3.jpg" alt="pizza" onclick="openImg(this);">
          </div>
          <div class="column align-self-center">
            <img src="images/p4.jpg" alt="pizza" onclick="openImg(this);">
          </div>
          <div class="column align-self-center">
            <img src="images/p5.jpg" alt="pizza" onclick="openImg(this);">
          </div>
          <div class="column align-self-center">
            <img src="images/p6.jpg" alt="pizza" onclick="openImg(this);">
          </div>
          <div class="column align-self-center">
            <img src="images/p7.jpg" alt="pizza" onclick="openImg(this);">
          </div>
          <div class="column align-self-center">
            <img src="images/p8.jpg" alt="pizza" onclick="openImg(this);">
          </div>
        </div>
      </div>
      <div class="container1 text-center ">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img id="expandedImg" class="expandedImg display-none">
      </div>
      </div>
    </section>
    <a target="_blank" href="https://www.pizzapastashow.com/">
        <img src="./images/partner1.jpg" alt="Partner1" />
    </a>
    <?php include("./shared/footer.php"); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>


  $('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

   function openImg(imgs) {
     var expandImg = document.getElementById("expandedImg");
     expandImg.src = imgs.src;
     expandImg.parentElement.style.display = "block";
}
  $(document).ready(function () {
      // Add scrollspy to <body>
      $('body').scrollspy({ target: ".navbar", offset: 50 });

      // Add smooth scrolling on all links inside the navbar
      $(".navbar a").on('click', function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                  scrollTop: $(hash).offset().top
              }, 800, function () {

                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
              });
          }  // End if
      });
    $("#arrow").on('click', function (event) {
          if (this.hash !== "") {
              event.preventDefault();
              var hash = this.hash;

              $('html, body').animate({
                  scrollTop: $(hash).offset().top
              }, 800, function () {

                  window.location.hash = hash;
              });
          }
      });
  });
</script>
</body>
</html>