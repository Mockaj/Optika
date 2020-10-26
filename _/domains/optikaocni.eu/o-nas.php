<?php
require_once 'admin/inc/Database.php';
?>
<?php
  $zaznam = $database->pages->where("id", 1)->fetch();
?>
<!DOCTYPE html>
<html lang="cs">

<head>
<title>O nás - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated">O nás</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="#"> O nás </a></li>
                </ol>
            </div>
        </div>
</section>

<!--------- Content --------->

<section class="hospital top-bottom-spacing white-bg">
    	<div class="container">
        	<div class="row">
                 
            <div class="clearfix marbot20">
			<!-- Left Content -->
        		<div class="col-md-7" style="text-align:justify;">
                    
              <div class="clearfix">
                	
                    
                    <h3><?= $zaznam['nadpis'] ?></h3>
       	    			<?= $zaznam['obsah'] ?>
                        
               		</div>
                </div>
		<!-- Left Content -->
            
        <!-- Right Content -->
            <div class="col-md-4 col-md-offset-1 animatedParent animateOnce" data-sequence='250' data-appear-top-offset='-300'>
               	<div class="row marbot10">
            	<div class="clearfix">
              
              <div class="col-md-12 col-sm-12 fadeInRight animated" data-id='2'>
<a class="zl-facility-url" href="https://www.znamylekar.cz/zarizeni/optika-ocni-eu" rel="nofollow" data-zlw-facility="optika-ocni-eu" data-zlw-type="certificate">Optika OČNÍ EU</a><script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//www.docplanner-platform.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>
              </div> 
                        
                    <div class="col-md-12 col-sm-12 fadeInRight animated" data-id='2' style="margin-top:10px;">
                    	<a href="assets/images/o-nas/2.jpg" data-toggle="lightbox" data-gallery="about-gallery" data-title="Optika OČNÍ EU" data-footer="Vstup od optiky">
							<div class="grid image-effect2 marbot30">
                            	<figure>
                                	<img src="assets/images/o-nas/2.jpg" alt=" " class="img-responsive fullwidth">
                                	<figcaption><i class="fas fa-search-plus gallery-icon transition"></i></figcaption>
                            	</figure>
                        	</div>
                        </a>                    </div>        
                
                
                
                       
                        
                              
                </div> 
            </div>
            </div>
          <!-- Right Content -->
              
        	</div>
            
            </div>
            
  
        </div>
</section>


<section class="top-bottom-spacing white-bg">
	<div class="container">

		<div class="clearfix marbot10 animatedParent animateOnce" data-sequence='250'>
            
            <div class="row">
            <div class="col-md-3 marbot30 fadeInRight animated" data-id='1'>
                    <div class="text-center">
                        <div class="grid">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/n2.jpg" alt=" " class="img-responsive">
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Rudolf Vasilčo</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Manažer společnosti</span> </em></p>
                        <!--    <a href="profil?id=3" class="btn btn-type1-reverse btn-sm">Zobrazit životopis</a> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='3'>
                    <div class="text-center">
                        <div class="grid ">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/3.jpg" alt=" " class="img-responsive">

                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">MUDr. Michaela Hustá</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Oční lékař</span> </em></p>
                            <a href="profil?id=1" class="btn btn-type1-reverse btn-sm">Životopis</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='2'>
                    <div class="text-center">
                        <div class="grid">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/2.jpg" alt=" " class="img-responsive">
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Mudr. Petra Pospíšilová</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Oční lékař</span> </em></p>
                            <a href="profil?id=2" class="btn btn-type1-reverse btn-sm">Životopis</a>
                        </div>
                    </div>
                </div>
                
                
            </div>
            
            
            
            <div class="row">
            <div class="col-md-3 marbot30 fadeInRight animated" data-id='1'>
                    <div class="text-center">
                        <div class="grid">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/1.jpg" alt=" " class="img-responsive">
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Michaela Dürrerová</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Oční optik, optometrista</span> </em></p>
                            <a href="profil?id=3" class="btn btn-type1-reverse btn-sm">Životopis</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='3'>
                    <div class="text-center">
                        <div class="grid ">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/n4.jpg" alt=" " class="img-responsive">

                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Ivana Albertová</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Oční optik, optometrista</span> </em></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='2'>
                    <div class="text-center">
                        <div class="grid">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/n5.jpg" alt=" " class="img-responsive">
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Bc. Jaromír Bortel</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Optometrista</span> </em></p>

                        </div>
                    </div>
                </div>
                
                
            </div>
            
            
            
            <div class="row">
            
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='1'>
                    <div class="text-center">
                        <div class="grid">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/n1.jpg" alt=" " class="img-responsive">
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Lenka Tomašáková</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Oční optik</span> </em></p>

                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='3'>
                    <div class="text-center">
                        <div class="grid ">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/4.jpg" alt=" " class="img-responsive">

                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Petr Klosik</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Oční optik</span> </em></p>
                            <a href="profil?id=4" class="btn btn-type1-reverse btn-sm">Životopis</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='2'>
                    <div class="text-center">
                        <div class="grid">
                            <a href="">
                                <figure>
                                    <img src="assets/images/personal/n3.jpg" alt=" " class="img-responsive">
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details">
                            <h3 class="marbot0" style="font-size:15px;">Marek Kašík</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="color:black;">Asistent prodeje Vratimov</span> </em></p>

                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 marbot30 fadeInRight animated" data-id='3'>
                    
                </div>
                
            </div>
            
            <div class="row">
        	
            
            </div>
            
        </div>
    </div>
</section>





<div class="top-strip grey-bg">
    	<div class="container">
            <div class="row vertical-align">
                    
                <div class="col-md-6 vertical-middle visible-block-sm-xs marbot30-sm-xs">
                    <div class="text-center marbot0 media">
                        <h2 style="margin-bottom:0px;font-style:italic;">„Dobře vidět znamená lépe žít!“</h2>
                        <!--<img src="assets/images/moto.png" style="width:700px;">-->
                    </div> 
                </div>
                

            </div>
        </div>
    </div>
    
    
    
 <section class="subbanner-pattern-07 top-bottom-spacing">
        <div class="container">
        	
            
            <ul class="club-logo four-column clearfix marbot30">
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/1.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/2.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/3.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/4.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/5.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/6.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/7.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/8.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/9.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
                <li>
                    <div class="client-logo-background transition">
                        <img src="assets/images/partneri/10.png" alt=" " class="img-responsive center-block vertical-center transition">
                    </div>
                </li>
            </ul>
            
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