<?php require('process.php')?>
<?php 
    if ($_SESSION['lang']=='en')
        include('en.php');
    else
        include('pl.php'); 
?>
<?php include("./shared/navigation2.php"); ?>
<header class="background-header2">
    <h1 class="m-0 text-white header-position text-shadow"><?php echo $lang['intro'];?></h1>
</header>
<div class="container container-margin">
<img class="right-img"src="images/pizzachef.jpg"/>
<?php echo $lang['full_intro']; ?>
<span class="float-right"><?php echo $lang['welcome']; ?></span><br/><br/>
<i class="float-right">Piotr Polichnowski – Pizza Chef.</i>
</div>
</section>
<?php include("./shared/footer.php"); ?>