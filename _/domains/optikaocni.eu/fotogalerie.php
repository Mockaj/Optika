<?php
require_once 'admin/inc/Database.php';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
<title>Fotogalerie - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated">Fotogalerie</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="#"> Fotogalerie </a></li>
                </ol>
            </div>
        </div>
</section>

<!--------- Content --------->
<section class="top-bottom-spacing white-bg">
    <div class="container">

        <div id="options">
          <ul id="filters" class="option-set clearfix" data-option-key="filter">
              <li><a href="#" data-option-value="*" class="selected btn btn-type1-reverse">Všechny fotografie</a></li>
            <li><a href="#" data-option-value=".2" class="btn btn-type1-reverse">Prostory optiky</a></li>
          </ul>
        </div>
  
    <div id="portfolio" class="clearfix three-column marbot30">
      
        
        <!-- Foto -->
        <?php
foreach ($database->galerie->order("id DESC") as $zaznam) {
?>
        <div class="element transition brown-lift <?= $zaznam['kategorie'] ?>" data-category="brown-lift">
            <a href="admin/files/galerie/full/<?= $zaznam['pic'] ?>" data-toggle="lightbox">
            	<div class="grid image-effect2">
                   	<figure>
                		<img src="admin/files/galerie/thumb/<?= $zaznam['pic'] ?>" class="img-responsive" />
                        <figcaption><i class="fa flaticon-symbols-1 gallery-icon transition"></i></figcaption>
                    </figure>
                </div>
			      </a>            
        </div>
        <?php } ?> 
        <!-- Foto -->
        
     

        
     </div> <!-- #portfolio -->
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