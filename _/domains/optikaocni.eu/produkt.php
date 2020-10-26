<?php
require_once 'admin/inc/Database.php';
?>

<?php
                        $zaznam = $database->produkty->where("id", $_GET['id'])->fetch();
                     ?>

<!DOCTYPE html>
<html lang="cs">

<head>
<title><?= $zaznam['nazev'] ?> - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated"><?= $zaznam['nazev'] ?></div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="zbozi">Zboží</a></li>
                    <li><a href="#"> <?= $zaznam['nazev'] ?> </a></li>
                    
                </ol>
            </div>
        </div>
</section>


                     

<!--------- Content --------->
<section class="top-bottom-spacing blog grey-bg">
    	<div class="container">
        	<div class="row animatedParent animateOnce">
            	
                <div class="col-md-12 marbot30-md-xs fadeInLeft animated">
            	  
                <div class="col-md-5" style="background:white;border-radius:5px;">
                <a href="admin/files/produkty/full/<?= $zaznam['pic'] ?>" data-toggle="lightbox"><img src="admin/files/produkty/full/<?= $zaznam['pic'] ?>" alt=" " class="img-responsive" style="margin-top:30px;margin-bottom:30px;cursor: zoom-in;" data-toggle="tooltip" data-placement="bottom" title="Zobrazit detailní náhled"></a>                
                </div>
                
                
                <div class="col-md-7">
                <div class="panel panel-body marbot40">
                
                	<h2><?= $zaznam['nazev'] ?></h2>
                    
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