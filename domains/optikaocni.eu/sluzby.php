<?php
require_once 'admin/inc/Database.php';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
<title>Služby - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated">Služby</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="#"> Služby </a></li>
                </ol>
            </div>
        </div>
</section>

<?php
  $zaznam_a = $database->pages->where("id", 2)->fetch();
  $zaznam_b = $database->pages->where("id", 3)->fetch();
  $zaznam_c = $database->pages->where("id", 4)->fetch();
  $zaznam_d = $database->pages->where("id", 5)->fetch();
?>


<!--------- Content --------->
<section class="top-bottom-spacing grey-bg">
	<div class="container">
    
    	<div class="row"> 
			<div class="clearfix">

        <!-- Left Section -->
            <div class="col-md-3">
        	    <div class="clearfix">
            	    <div class="sidebar-menu marbot40"> 
	            	    <ul class="nav nav-tabs list-type2">
							            <li class="active"><a href="#vysetreni" data-toggle="tab"><i class="fas fa-eye" style="margin-right:10px;"></i>Vyšetření zraku</a></li> 
                        	<li><a href="#aplikace" data-toggle="tab"><i class="fas fa-bullseye" style="margin-right:10px;"></i>Aplikace kontaktních čoček</a></li>
                        	<li><a href="#opravy" data-toggle="tab"><i class="fas fa-glasses" style="margin-right:10px;"></i>Servis obrub</a></li>
                        	<li><a href="#cenik" data-toggle="tab"><i class="fas fa-clipboard-list" style="margin-right:10px;"></i>Ceník služeb</a></li>
                        	<li><a href="rezervace-terminu"><i class="fas fa-hand-point-right" style="margin-right:10px;"></i>Objednejte se k nám</a></li>
                   	  	</ul>
                	</div>
                    
                 
            	</div>
            </div>
        <!-- // Left Section -->

        <!-- Right Section -->
            <div class="col-md-9">
                <div class="clearfix">
                
                    <div class="tab-content animatedParent animateOnce">

		            <!-- Tab 1 -->
                    <div id="vysetreni" class="tab-pane active fadeInUp animated">
                        <div class="row clearfix portfolio">
                           <div class="col-md-12">
                           <h2><?= $zaznam_a['nadpis'] ?></h2>
                           <?= $zaznam_a['obsah'] ?>
                           </div>
                        </div>
                    </div>
                    <!-- // Tab 1 -->
                    
                    <!-- Tab 2 -->
                    <div id="aplikace" class="tab-pane fadeInUp animated">
                        <div class="row clearfix portfolio">
                           <div class="col-md-12">
                          <h2><?= $zaznam_b['nadpis'] ?></h2>
                           <?= $zaznam_b['obsah'] ?>
                           </div>
                        </div>
                    </div>
                    <!-- // Tab 2 -->
                    
                    <!-- Tab 3 -->
                    <div id="opravy" class="tab-pane fadeInUp animated">
                        <div class="row clearfix portfolio">
                           <div class="col-md-12">
                           <h2><?= $zaznam_c['nadpis'] ?></h2>
                           <?= $zaznam_c['obsah'] ?>
                           </div>
                        </div>
                    </div>
                    <!-- // Tab 3 -->
                    
                    
                     <!-- Tab 4 -->
                    <div id="cenik" class="tab-pane fadeInUp animated">
                        <div class="row clearfix portfolio">
                           <div class="col-md-12">
                           <h2><?= $zaznam_d['nadpis'] ?></h2>
                           <?= $zaznam_d['obsah'] ?>
                           </div>
                        </div>
                    </div>
                    <!-- // Tab 3 -->
                     
                
                            
                 
                    
                    </div>
                </div>
            </div>
	        <!-- // Right Section -->
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