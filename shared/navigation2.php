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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section id="content">
        <nav class="navbar navbar-expand-md navbar-dark rounded-0 mb-0 sticky-top">
            <a class="navbar-brand h1 m-0">PIZZA CHEF.</a>
            <button type="button" class="navbar-toggle ml-auto" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse-1">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#content">Bio</a>
                    </li>
               
                    <li class="nav-item">
            <a class="nav-link" id="arrow" href="index.php#oferta">
              <?php echo $lang['offer']; ?>
            </a>
          </li>
                  <li class="nav-item">
            <a class="nav-link" href="http://www.ppolichnowski.pl/">Blog</a>
          </li>
                    <li class="display-none2 social-icons">
                    <a target="_blank" href="https://www.instagram.com/piotrpolichnowski/">
                    <i class="fa fa-instagram i-size-nav i"></i>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/piotr-polichnowski-47365ab0/">
                    <i class="fa fa-linkedin-square i-size-nav i"></i>
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
        </nav>
