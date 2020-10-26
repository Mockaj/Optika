<?php
require_once 'admin/inc/Database.php';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
<title>Aktuality - Optika OČNÍ EU</title>
<?php include_once "include/head.php"; ?>
</head>

<body>
</body>

<!--PRELOADER-->
<?php include_once "include/preloader.php"; ?>
<!--PRELOADER-->

<!-- Wrapper 
=============================-->
<div class="wrapper">

<!-- Header Section -->       
<?php include_once "include/header.php"; ?>    
<!-- // Header Section -->

<section class="animatedParent animateOnce subbanner subbanner-image subbanner-pattern-06 subbanner-type-2 subbanner-type-2-btn">
    	<div class="container">
        	<div class="subbanner-content banner-content">
            	<div class="skew-effect fadeInLeft animated">Aktuality</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="#"> Aktuality </a></li>
                </ol>
            </div>
        </div>
</section>

<!--------- Content --------->
<section class="top-bottom-spacing blog grey-bg">
    	<div class="container">
        	<div class="row">
            	
                <div class="col-md-12 marbot10">
                    <!-- Content -->
                    <div class="row animatedParent animateOnce" data-sequence='250'>
                       
                        
                       <?php
                            foreach ($database->novinky->order("id DESC") as $zaznam) {
                                ?>
                        
                        <!-------------------Změna data-------------------------------->
                        <?php
                        $prevod = new DateTime($zaznam["datum"]);
                        $zaznam["noveDatum"]  = $prevod->format('d.m.Y');
                        $text = $zaznam['popis'];
                        $limit = "80";
                        ?>
                        <!-------------------Změna data-------------------------------->       

                                <div class="col-md-4 fadeInUp animated" data-id='1'>
                                <div class="clearfix marbot30">
                                <div style="width:100%;height:200px;background-image:url('admin/files/clanky/thumb/<?= $zaznam['pic'] ?>');">
                                </div>
                                <div class="panel panel-body marbot0">
                                    <div class="main-title marbot10"><?= $zaznam['nadpis'] ?></div>
                                    <div class="color-light marbot20"><em><?= $zaznam['noveDatum'] ?></em></div>
                                    <p class="fontresize"> <?php
if (strlen($text) <= $limit) {
    echo $text;
} else {
    $text = substr($text, 0, $limit+1);
    $pos = strrpos($text, " "); // v PHP 5 by se dal použít parametr offset
    echo substr($text, 0, ($pos ? $pos : -1)) . "...";
}
?> </p>
                                    <a href="clanek?id=<?= $zaznam['id'] ?>" class="btn btn-type1-reverse btn-sm">Celý článek</a>
                                </div>
                            </div>
                        </div>
                                
                                
                                
                                <?php
                            }
                            ?>  
                        

                        
                    </div>
                    <!-- Content -->
                    
                </div>
                
               
            </div>
        </div>
</section>
<!--------- Content --------->





<!-- Footer Section -->
<?php include_once "include/footer.php"; ?>
<!-- Footer Section -->

</div>
<!-- // Wrapper 
=============================-->

<!-- Java Scripts -->
<?php include_once "include/script.php"; ?>    
<!-- //Java Scripts -->


</body>
</html>