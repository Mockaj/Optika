<?php
require_once 'admin/inc/Database.php';
?>
<?php
  $obsah = $database->pages->where("id", 6)->fetch();
?>
<!DOCTYPE html>
<html lang="cs">

<head>
<title>Sluneční brýle - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated"><?= $obsah['nadpis'] ?></div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="zbozi"> Zboží </a></li>
                    <li><a href="#"> <?= $obsah['nadpis'] ?> </a></li>
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
                    
                    <h3><?= $obsah['nadpis'] ?></h3>
       	    			
              <div class="col-sm-6 col-md-3" style="padding:5px;">
              <a href="dioptricke-bryle" class="btn btn-type1 btn-sm" style="width:100%;font-size:12px;">Všechny značky</a>
              </div>          
              <?php foreach ($database->znacky as $zaznam) {               
              ?>
              <div class="col-sm-6 col-md-3" style="padding:5px;">
              <a href="?znacka=<?= $zaznam['id'] ?>" class="btn btn-type1 btn-sm" style="width:100%;font-size:12px;"><?= $zaznam['nazev'] ?></a>
              </div>
              <?php } ?>          
                        
              </div>
              
              <div class="clearfix" style="margin-top:30px;">
             
             <?php if (isset($_GET['znacka'])) {  ?>
             
              <?php foreach ($database->produkty->where("kategorie", 2)->where("znacka", $_GET['znacka']) as $zaznam) { 
              $status = ($zaznam['sklad'] == 1 ? '<div style="font-size:10px;color:white;background:#fb1391;padding:7px;position:absolute;margin-top:10px;margin-left:10px;">SKLADEM</div>' : '');              
              ?>
              
                <div class="col-md-4" style="text-align:center;padding:3px;">
                    <a href="detail?id=<?= $zaznam['id'] ?>">
                    <div class="produkt">
                    <div style="width:100%;height:200px;background:url(admin/files/produkty/thumb/<?= $zaznam['pic'] ?>);background-repeat: no-repeat;background-size: contain;background-position:center;background-color: white;">
                    <?= $status ?>
                    </div>
                    <div style="background:white;height:50px;">
                    <h4 style="font-size:14px;"><?= $zaznam['nazev'] ?></h4>
                    </div>
                    <div style="background:white;height:30px;">
                    <strong style="color:black;"><?= $zaznam['cena'] ?> Kč</strong>
                    </div>
                    </div>
                    </a>
                </div>
              
              <?php } ?>
              
              
              <?php } else {?>
              
              <?php foreach ($database->produkty->where("kategorie", 2) as $zaznam) { 
              $status = ($zaznam['sklad'] == 1 ? '<div style="font-size:10px;color:white;background:#fb1391;padding:7px;position:absolute;margin-top:10px;margin-left:10px;">SKLADEM</div>' : '');              
              ?>
              
                <div class="col-md-4" style="text-align:center;padding:3px;">
                    <a href="detail?id=<?= $zaznam['id'] ?>">
                    <div class="produkt">
                    <div style="width:100%;height:200px;background:url(admin/files/produkty/thumb/<?= $zaznam['pic'] ?>);background-repeat: no-repeat;background-size: contain;background-position:center;background-color: white;">
                    <?= $status ?>
                    </div>
                    <div style="background:white;height:50px;">
                    <h4 style="font-size:14px;"><?= $zaznam['nazev'] ?></h4>
                    </div>
                    <div style="background:white;height:30px;">
                    <strong style="color:black;"><?= $zaznam['cena'] ?> Kč</strong>
                    </div>
                    </div>
                    </a>
                </div>
              
              <?php } ?>
              
              <?php } ?>

              </div>
              
              </div>
                
                
         <div class="col-md-3 col-md-offset-1 animatedParent animateOnce" data-sequence='250' data-appear-top-offset='-300'>
               	<div class="row marbot10">
            	   <div style="text-align:justify;">
                   <?= $obsah['obsah'] ?>
                   </div>
                   
                   <?php include_once "include/zb_box_slunecni.php"; ?>  
                
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