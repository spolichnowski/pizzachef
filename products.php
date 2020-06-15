<?php require('process.php')?>
<?php 
    if ($_SESSION['lang']=='en')
        include('en.php');
    else
        include('pl.php'); 
?>
<?php include("./shared/navigation2.php"); ?>
<header class="background-header2">
    <h1 class="m-0 text-white header-position text-shadow"><?php echo $lang['products'];?></h1>
</header>
<div class="container container-margin">
    <img class="right-img"src="images/right-products.jpg"/>
    <?php echo $lang['products_full_content'];?>
</div>
</section>
<?php include("./shared/footer2.php"); ?>
