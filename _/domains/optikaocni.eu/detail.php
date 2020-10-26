<?php
require_once 'admin/inc/Database.php';
?>
<?php
  $zaznam = $database->produkty->where("id", $_GET['id'])->fetch();
  $status = ($zaznam['sklad'] == 1 ? '<div style="font-size:10px;color:white;background:#fb1391;padding:7px;margin-top:10px;display:inline;">SKLADEM NA PRODEJNĚ</div> ' : '');
?>
<!DOCTYPE html>
<html lang="cs">

<head>
<title><?= $zaznam['nazev'] ?> - Optika OČNÍ EU</title>
<?php include_once "include/head.php"; ?>
</head>

<style> 
.produkt{border:2px solid white;cursor:pointer;}
.produkt:hover{border:2px solid pink;}
</style>

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
                    <li><a href="zbozi"> Zboží </a></li>
                    
                    <li><a href="#"> <?= $zaznam['nazev'] ?> </a></li>
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
   
              <div class="col-md-4">
                <div style="width:100%;height:200px;background:url(admin/files/produkty/thumb/<?= $zaznam['pic'] ?>);background-repeat: no-repeat;background-size: contain;background-position:center;background-color: white;">
                </div>
              </div>
              
              
              <div class="col-md-8">
                    
                    <?= $status ?>
                    
                    <h3 style="display:block;margin-top:20px;"><?= $zaznam['nazev'] ?></h3>
                    <strong style="font-size:26px;color:black;"><?= $zaznam['cena_sleva'] ?>,00 Kč*</strong><br>
                    <strong style="font-size:14px;color:black;">Standardní cena: <?= $zaznam['cena'] ?>,00 Kč</strong><br><br>
                    <?= $zaznam['popis'] ?>
                        
              </div>
              
              <div class="clearfix">
              <?php foreach ($database->galerie_produkty->where("novinka", $_GET['id']) as $zaznam) { ?>
              
               <div class="col-md-3 col-sm-3 element transition brown-lift <?= $zaznam['kategorie'] ?>" data-category="brown-lift">
            <a href="admin/<?= $zaznam['dir'] ?><?= $zaznam['nazev'] ?>" data-toggle="lightbox">
            	<div class="grid image-effect2">
                   	<figure>
                		<img src="admin/<?= $zaznam['dir'] ?><?= $zaznam['nazev'] ?>" class="img-responsive" />
                        <figcaption><i class="fa flaticon-symbols-1 gallery-icon transition"></i></figcaption>
                    </figure>
                </div>
			      </a>            
        </div>
              
              <?php } ?>
              
              <div class="col-md-12">
              <div style="margin-bottom:30px;margin-top:30px;background:#fb1391;color:white;padding:5px;text-align:center;-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;">
              *Jedná se o akční cenu, která je platná pro zákazníky, kteří si stáhli a využívají naši mobilní aplikaci.
              </div>
              </div>
              
              
              </div>
              
              </div>
                
                
         <div class="col-md-3 col-md-offset-1 animatedParent animateOnce" data-sequence='250' data-appear-top-offset='-300'>
               	<div class="row marbot10">
            	
                   <?php include_once "include/zb_box.php"; ?>  
                
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