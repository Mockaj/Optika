<?php
require_once 'admin/inc/Database.php';
?>
<?php
  $zaznam = $database->slunecni_bryle->fetch();
?>
<!DOCTYPE html>
<html lang="cs">

<head>
<title>Sluneční brýle - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated">Akční leták</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="zbozi"> Zboží </a></li>
                    <li><a href="#"> Akční leták</a></li>
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
                	
                    
                   <!-- <h3>Slevový poukaz</h3>
                    
                    <p>
                    Využijte v optice náš slevový poukaz v hodnotě 200 Kč. Poukaz si prosím vytiskněte a přineste s sebou. Poukaz lze uplatnit pouze na sluneční a dioptrické brýle. 
                    </p>
                    <p style="text-align:center;">
                    <a href="assets/images/poukaz-tisk.pdf" target="_blank" class="btn btn-type1 btn-sm"><i class="fas fa-hand-point-right" style="margin-right:10px;"></i>ZOBRAZIT PDF K TISKU</a>
                    </p>        -->
       	    			
                  <img src="assets/images/letakAkce.jpg" style="width:100%;">
                        
               		</div>
                </div>
                
                
         <div class="col-md-3 col-md-offset-1 animatedParent animateOnce" data-sequence='250' data-appear-top-offset='-300'>
               	<div class="row marbot10">
            	<div class="clearfix">
                   <?php include_once "include/kupon_box.php"; ?>  
                

                        
                   
                              
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