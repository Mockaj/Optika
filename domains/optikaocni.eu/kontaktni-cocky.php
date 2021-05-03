<?php
require_once 'admin/inc/Database.php';
?>
<?php
  $zaznam = $database->pages->where("id", 8)->fetch();
?>
<!DOCTYPE html>
<html lang="cs">

<head>
<title>Kontaktní čočky - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated"><?= $zaznam['nadpis'] ?></div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="zbozi"> Zboží </a></li>
                    <li><a href="#"> <?= $zaznam['nadpis'] ?> </a></li>
                </ol>
            </div>
        </div>
</section>

<!--------- Content --------->

<br>


<section class="hospital bottom-spacing white-bg">
    	<div class="container">
        	<div class="row">
                 
            <div class="clearfix marbot20">
			<!-- Content -->
        		<div class="col-md-8" style="text-align:justify;">
                    
              <div class="clearfix">
                	
                    
                    <h3><?= $zaznam['nadpis'] ?></h3>
       	    			<?= $zaznam['obsah'] ?>
                        
               		</div>
                </div>
                
                
         <div class="col-md-3 col-md-offset-1 animatedParent animateOnce" data-sequence='250' data-appear-top-offset='-300'>
               	<div class="row marbot10">
            	<div class="clearfix">
                   <?php include_once "include/zb_box.php"; ?>  
                

                        
                   
                              
                </div> 
            </div>
            </div>       
		<!--  Content -->
               
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