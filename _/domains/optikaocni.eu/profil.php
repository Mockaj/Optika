<?php
require_once 'admin/inc/Database.php';
?>
<?php
                        $zaznam = $database->lekari->where("id", $_GET['id'])->fetch();
                     ?>
<!DOCTYPE html>
<html lang="cs">

<head>
<title><?= $zaznam['jmeno'] ?> - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated"><?= $zaznam['jmeno'] ?></div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="o-nas">O nás</a></li>
                    <li><a href="#"> <?= $zaznam['jmeno'] ?> </a></li>
                </ol>
            </div>
        </div>
</section>


                     

<!--------- Content --------->
<section class="top-bottom-spacing blog grey-bg">
    	<div class="container">
        	<div class="row animatedParent animateOnce">
            	
                <div class="col-md-12 marbot30-md-xs fadeInLeft animated">
            	  <div class="col-md-4">
                <img src="admin/files/personal/full/<?= $zaznam['pic'] ?>" alt=" " class="img-responsive">
                
                </div>
    <style>
                .detailAkt h2{color:#f30651;}
                .detailAkt li{list-style-type: disc;list-style-position: outside;margin-left:20px; margin-bottom:10px;}
                </style>
             
                
                <div class="col-md-8">
                <div class="panel panel-body marbot40 detailAkt">
                
                	<h2><?= $zaznam['jmeno'] ?></h2>
                    
                  <?= $zaznam['obsah'] ?>
                          
                                </div>
                                
                                </div>
                                
                            </div>
                        </div>
                    
                </div>
          	</div>
                
               
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