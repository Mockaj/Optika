<?php
require_once 'admin/inc/Database.php';
?>
<!DOCTYPE html>
<html lang="cs">

<head>
<title>Optika OČNÍ EU - Dobře vidět znamená lépe žít</title>
<?php include_once "include/head.php"; ?>


</head>

<body>

<!--PRELOADER-->
<?php include_once "include/preloader.php"; ?>
<!--PRELOADER-->

<!-- POP UP WINDOW -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLabel" style="color:#000000;font-weight: bold">COVID-19 Update</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body" style="font-size:16px">
          Milé klientky, milí klienti,<br>
            <br>
          naše obě optiky jsou stále v provozu a <b>otevřené bez omezení</b>.
          Pokud cestujete do naši optiky z jiného okresu, je nezbytné vytisknout a vyplnit <b>Čestné prohlášení</b>.
          Formulář čestného prohlášení je ke stažení <a href="https://www.vlada.cz/assets/media-centrum/aktualne/Cestne_prohlaseni___vzor.pdf" style="color:blue">ZDE</a>.
          <br>
          Těšíme se na Vaši návštěvu.
          <br>
          Váš tým Optika Oční EU 😊
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#exampleModal").modal('show');
    });
</script>
<!-- END OF POP UP WINDOW-->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v3.2&appId=152230178257250&autoLogAppEvents=1"></script>
<style>
@media (min-width: 768px){.modal-dialog {
    width: 400px !important;
    margin: 30px auto;
}} 
</style>

    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" style="text-align:center;">Sledujte nás na Facebooku. Děkujeme za Váš <i class="far fa-thumbs-up"></i></h4>
      </div>
      <div class="modal-body" style="padding:0px;">
<div class="fb-page" data-href="https://www.facebook.com/O%C4%8CN%C3%8D-EU-Optika-2059195947474810/" data-width="396" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/O%C4%8CN%C3%8D-EU-Optika-2059195947474810/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/O%C4%8CN%C3%8D-EU-Optika-2059195947474810/">OČNÍ EU Optika</a></blockquote></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default nothanks" data-dismiss="modal">Zavřít</button>
      </div>
    </div>

  </div>
</div>



<!-- Wrapper 
=============================-->
<div class="wrapper">


<!-- Header Section -->       
<?php include_once "include/header.php"; ?>    
<!-- // Header Section --> 


<!-- Banner Section
=============================-->

<section class="home">
<!-- Home Slider Banner -->
		
		<div id="" class="slider1 slider-light">
			<!--
			#################################
				- THEMEPUNCH BANNER -
			#################################
			-->
			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>	<!-- SLIDE  -->
                        <li data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="250" >
                            <!-- MAIN IMAGE -->
                            <img src="assets/images/dneye.jpg"  alt="DNEye scanner"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS  -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption large_bold_white skewfromrightshort customout"
                                 data-x="-300" data-y="200"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                 data-speed="500" data-start="1200"
                                 data-easing="Back.easeOut"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 data-captionhidden="on"
                                 style="z-index: 4; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);">
                                Individuální brýlové čočky </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption miami_content_light customin ltl"
                                 data-x="-100" data-y="275"
                                 data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="1000" data-start="1500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="400"
                                 data-endeasing="Back.easeIn" style="z-index: 14;">Revoluční měření zraku pomocí DNEye scanneru</div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme start"
                                 data-x="50" data-y="345"
                                 data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="1000" data-start="2000"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="400"
                                 data-endeasing="Back.easeIn" style="z-index: 14;"><a class="btn btn-type1" href="https://www.optikaocni.eu/clanek?id=112">VÍCE INFORMACÍ</a>                            </div>
                        </li>
          
           
          
          
          
          
          
          
						<li data-transition="3dcurtain-horizontal" data-slotamount="7" data-masterspeed="500" >
							<!-- MAIN IMAGE -->
							<img src="assets/images/banner03.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS  -->
							
							<!-- LAYER NR. 1 -->
							<div class="tp-caption large_bold_white skewfromrightshort customout" 
                            	data-x="310" data-y="201"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                data-speed="500" data-start="1200" 
                                data-easing="Back.easeOut" 
                                data-endspeed="500" 
                                data-endeasing="Power4.easeIn" 
                                data-captionhidden="on" style="z-index: 4; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5)">3D měření zraku </div>
 
                        <!-- LAYER NR. 2 -->
                            <div class="tp-caption miami_content_light customin ltl" 
                            	data-x="420" data-y="275" 
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                            	data-speed="1000" data-start="1500" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;">Moderní technologie a vybavení</div>
                             
                        <!-- LAYER NR. 3 -->
                            <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme start" 
                            	data-x="500" data-y="345" 
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                data-speed="1000" data-start="2000" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;"><a class="btn btn-type1" href="sluzby">VÍCE INFORMACÍ</a>                            </div>							
					  </li>
						<!-- SLIDE  -->
						<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
							<!-- MAIN IMAGE -->
							<img src="assets/images/banner02.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
                            
							<!-- LAYER NR. 1 -->
                            <div class="tp-caption large_bold_white skewfromrightshort customout" 
                            	data-x="100" data-y="200" 
                            	data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                data-speed="500" data-start="1200" 
                                data-easing="Back.easeOut" 
                                data-endspeed="500" 
                                data-endeasing="Power4.easeIn" 
                                data-captionhidden="on" style="z-index: 4; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);">Aplikace kontaktních čoček   </div>
                             
                        <!-- LAYER NR. 2 -->
                            <div class="tp-caption miami_content_light customin ltl" 
                            	data-x="340" data-y="275" 
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                data-speed="1000" data-start="1500" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;">Široká nabídka nejen značkového sortimentu                         </div>
                             
                        <!-- LAYER NR. 3 -->
                            <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme start" 
                            	data-x="470" data-y="345"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                data-speed="1000" data-start="2000" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;"><a class="btn btn-type1" href="sluzby">VÍCE INFORMACÍ</a>                            </div> 
                      </li>
                        
						<!-- SLIDE  -->
						<li data-transition="curtain-1" data-slotamount="7" data-masterspeed="600" >
							<!-- MAIN IMAGE -->
							<img src="assets/images/banner01.jpg" style='background-color:#b2c4cc' alt=" "  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
                            <div class="tp-caption large_bold_white skewfromrightshort customout" 
                            	data-x="350" data-y="200" 
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                data-speed="500" data-start="1200" 
                                data-easing="Back.easeOut" 
                                data-endspeed="500" 
                                data-endeasing="Power4.easeIn" 
                                data-captionhidden="on" style="z-index: 4;text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);">Akční nabídka</div>
                             
                        <!-- LAYER NR. 2 -->
                            <div class="tp-caption miami_content_light customin ltl" 
                            	data-x="370" data-y="275" 
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                data-speed="1000" data-start="1500" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;">Podívejte se na aktuální akční nabídku                                     </div>
                             
                        <!-- LAYER NR. 3 -->
                            <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme start" 
                            	data-x="490" data-y="345"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                data-speed="1000" data-start="2000" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14"><a class="btn btn-type1" href="akcni-nabidka">VÍCE INFORMACÍ</a>                            </div>
                      </li>
						
						<!-- SLIDE  -->
						<li data-transition="flyin" data-slotamount="7" data-masterspeed="800" >
							<!-- MAIN IMAGE -->
							<img src="assets/images/banner04.jpg" style='background-color:#b2c4cc' alt=" "  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
							<!-- LAYERS -->
							<!-- LAYER NR. 1 -->
                            <div class="tp-caption large_bold_white skewfromrightshort customout" 
                            	data-x="150" data-y="200" 
                            	data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                                data-speed="500" data-start="1200" 
                                data-easing="Back.easeOut" 
                                data-endspeed="500" 
                                data-endeasing="Power4.easeIn" 
                                data-captionhidden="on" style="z-index: 4; text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);">Značkové brýle a doplňky   </div>
                             
                        <!-- LAYER NR. 2 -->
                            <div class="tp-caption miami_content_light customin ltl" 
                            	data-x="340" data-y="275" 
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                data-speed="1000" data-start="1500" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;">Široká nabídka nejen značkového sortimentu                         </div>
                             
                        <!-- LAYER NR. 3 -->
                            <div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme start" 
                            	data-x="470" data-y="345"
                                data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" 
                                data-speed="1000" data-start="2000" 
                                data-easing="Back.easeInOut" 
                                data-endspeed="400" 
                                data-endeasing="Back.easeIn" style="z-index: 14;"><a class="btn btn-type1" href="zbozi">ZOBRAZIT PRODUKTY</a>                            </div> 
                      </li>
					</ul>
					<div class="tp-bannertimer"></div>
			  </div>
			</div>
			<div class="banner-thumbs visible-md visible-lg">
				<div class="container" >
					<!-- slide-buttons -->
					<ul class="slider-thumbnails">
						
            <li>
							<a href="akcni-nabidka">
								<span><i class="fas fa-glasses"></i></span>
                                <h3>Akční nabídka</h3>
                                <p class="fontresize">Akce, slevy, poukazy</p>	</a>						</li>           
            <li class="active">
							<a href="sluzby" class="slide-thumbs" id="" data-slide="">
								<span><i class="fas fa-eye"></i></span>
                                <h3>Vyšetření zraku</h3>
                                <p class="fontresize">ZDARMA pro každého</p>	</a>						</li>
						<li>
							<a href="sluzby" class="slide-thumbs" id="" data-slide="">
								<span><i class="fas fa-bullseye"></i></span>
                                <h3>Aplikace čoček </h3>
                                <p class="fontresize">Aplikujeme a poradíme</p>	</a>						</li>
						
						<li>
							<a href="zbozi" class="slide-thumbs" id="" data-slide="">
								<span><i class="fas fa-glasses"></i></span>
                                <h3>Zboží</h3>
                                <p class="fontresize">Brýle, čočky a doplňky</p>	</a>						</li>
					</ul>
				</div>
			</div>
		</div>
  <!-- END REVOLUTION SLIDER -->
    
<!-- // Home Slider Banner -->
</section>

<!-- // Banner Section
=============================-->  

<section class="top-bottom-spacing blog">
    	<div class="container">
        	<div class="row">
            
            <div class="col-md-5">
                <h3>Brýle světových značek skladem</h3>
                <p>Věříme, že náš sortiment uspokojí i ty nejnáročnější z vás. Můžete se podívat, jaké u nás najdete <a href="slunecni-bryle">sluneční</a> nebo <a href="dioptricke-bryle">dioptrické</a> brýle.</p>
            </div>
            
            
            <div class="col-md-7">


<?php foreach ($database->znacky as $znacky) { ?>
    <a href="znacka?id=<?= $znacky['id'] ?>">
    <div class="col-md-2 col-sm-6">
        <div class="homeZnacky">
            <img src="admin/files/znacky/<?= $znacky['pic'] ?>" width="100%">
        </div>    
    </div>
    </a>
<?php } ?>

            </div>
            
            


            </div>
        </div>
</section>            


<!-- Content Section
================================================== -->
<section class="top-bottom-spacing blog grey-bg">
    	<div class="container">
        	<div class="row">
            	
                <div class="col-md-12 marbot10">
                    <!-- Content -->
                    <div class="row animatedParent animateOnce" data-sequence='250'>
                    
                    
                       
                       
                        
                       <?php
                            foreach ($database->novinky->order("id DESC")->limit(3) as $zaznam) {
                                ?>
                                
                        <!-------------------Změna data-------------------------------->
                        <?php
                        $prevod = new DateTime($zaznam["datum"]);
                        $zaznam["noveDatum"]  = $prevod->format('d.m.Y');
                        $text = $zaznam['popis'];
                        $limit = "60"; 
                        
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
<!-- Content Section
================================================== -->




<!-- Footer Section -->
<?php include_once "include/footer.php"; ?>
<!-- Footer Section -->



</div>
<!-- // Wrapper 
=============================-->


<!-- Java Scripts -->
<?php include_once "include/script.php"; ?>    
<!-- //Java Scripts -->





<script src="https://lekarskaestetika.cz/assets/js/jquery.bpopup.min.js"></script>
<script>
//$( document ).ready(function() {
//    $('#popup_this').bPopup();
//});
</script>

 <!--<div id="popup_this">
    <span class="button b-close">
        <span>X</span>
    </span>
    <h3 style="color:black;font-weight:600;">Upozornění!</h3>
    <p>Pracoviště Optiky je otevřeno denně od 9.00 do 15.00 hod.<br><br> 

Naše pracoviště splňuje nejpřísnější hygienická nařízení vydané Ministerstvem zdravotnicví ČR v rámci zamezení šíření corona viru, jsme vybaveni veškerými ochrannými pomůckami a nejúčinnější dezinfekcí.
<br><br>
Těšíme se na Vás.</p>

</div> -->

<style>
#popup_this {
    top: 30%;
    left: 50%;
    max-width:700px;
    text-align:center;
    margin-top: -50px;
    margin-left: -100px;
    position: fixed;
    background: #fff;
    padding: 30px;
    z-index:9999;
}
.b-close {
    position: absolute;
    right: 0;
    top: 0;
    cursor: pointer;
    color: #fff;
    background: #ff0000;
    padding: 5px 10px;
}
/* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style> 


</body>
</html>
