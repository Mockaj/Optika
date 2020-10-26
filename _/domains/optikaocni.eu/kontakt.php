<?php
require_once 'admin/inc/Database.php';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
<title>Kontakt - Optika OČNÍ EU</title>
<?php include_once "include/head.php"; ?>
</head>

<body>
<style>
@media only screen and (max-width: 1000px) {
    .qr{display:none;}
    .box-ods{margin-top:30px;}
}
</style>
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
            	<div class="skew-effect fadeInLeft animated">Kontakt</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="#"> Kontakt </a></li>
                </ol>
            </div>
        </div>v
</section>

<!--------- Content --------->
<section class="top-bottom-spacing blog white-bg">
    	<div class="container">
        	<div class="row">
        
        <?php if (isset($_GET['odeslani-ok'])) { ?>    
            <div class="col-md-12 marbot10">  
                <p style="padding:10px;text-align:center;background:#6cb54e;color:white;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;">Děkujeme, zpráva byla v pořádku odeslána</p>
              </div>
         <?php } ?>   	
              <div class="col-md-12 marbot10" style="padding-left:30px;">  
                <h2>OPTIKA OČNÍ EU</h2>
              </div>  
                <div class="col-md-12 marbot10">
                    <!-- Content -->
                    <div class="row animatedParent animateOnce" data-sequence='250'>
                    
                    
                    
                    <div class="col-md-6">
                      <div class="col-md-12">
                      <img src="assets/images/vstup.jpg" class="contantImg"> 
                     </div>  
            <div class="col-md-12" style="margin-top:20px;">        
            
            <div class="col-md-6">
                     <h4><span>Frýdlant nad Ostravicí</span></h4>
                <p>Školní 117<br />Frýdlant nad Ostravicí, 739 11</p>
                <p>
                <strong><i class="fas fa-phone" style="margin-right:8px;"></i></strong>&nbsp;<a href="">+420 730 164 014</a>
                <br />
                <strong><i class="fas fa-at" style="margin-right:8px;"></i></strong> <a href="mailto:frydlant@ocni.eu">info@optikaocni.eu</a> 
                <!--<br />
                <strong><i class="fab fa-facebook" style="margin-right:8px;"></i>Facebook:</strong> <a href="mailto:">odkaz_na_facebook</a>
                --></p>
                 <p><a href="https://www.google.com/maps?ll=49.591509,18.35983&z=17&t=m&hl=cs-CZ&gl=CZ&mapclient=embed&cid=4138169133389934295" target="_blank" class="btn btn-type1 btn-sm">ZOBRAZIT NA MAPĚ</a></p>
            </div>
            <div class="col-md-6"  style="margin-bottom:20px;"> 
                <img src="https://optikaocni.eu/assets/images/qr_frydlant.png" width="100%" class="qr">
                               
                
             </div>
  
  
            </div>
            <div class="col-md-12">     
                
                	<div class="panel panel-body panel-dark-grey bottom-right marbot0">
                        <div class="panel-title" style="padding:0px;">
                            <h3 class="text-left">Otevírací doba</h3>
                        </div>

                        <div class="working-hours working-hours-type1">
                            <dl class="dl-horizontal">
                              <dt> Pondělí </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Úterý </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Středa </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Čtvrtek </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Pátek </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                                                    
                        </div>
                    </div>
                    
             </div>       
                    
                    
                </div>
                
                
                
                
                
                
                <div class="col-md-6 box-ods">
                     <div class="col-md-12">
                      <img src="assets/images/vstup_vr.jpg" class="contantImg"> 
                     </div> 
            <div class="col-md-12" style="margin-top:20px;">        
            
            <div class="col-md-6">
                     <h4><span>Vratimov</span></h4>
                <p>Frýdecká 936/59<br />739 32 Vratimov</p> 
                <p>
                <strong><i class="fas fa-phone" style="margin-right:8px;"></i></strong>&nbsp;<a href="">+420 703 173 089</a>
                <br />
                <strong><i class="fas fa-at" style="margin-right:8px;"></i></strong> <a href="mailto:frydlant@ocni.eu">vratimov@optikaocni.eu</a> 
                <!--<br />
                <strong><i class="fab fa-facebook" style="margin-right:8px;"></i>Facebook:</strong> <a href="mailto:">odkaz_na_facebook</a>
                --></p>
                 <p><a href="https://www.google.cz/maps/place/Fr%C3%BDdeck%C3%A1+936%2F59,+739+32+Vratimov/@49.7696442,18.3083041,17z/data=!3m1!4b1!4m5!3m4!1s0x4713fb05992a21c7:0x96ece5832c0840b1!8m2!3d49.7696408!4d18.3104928" target="_blank" class="btn btn-type1 btn-sm">ZOBRAZIT NA MAPĚ</a></p>
            </div>
            <div class="col-md-6"  style="margin-bottom:20px;">    

                <img src="https://optikaocni.eu/assets/images/qr_vratimov.png" width="100%" class="qr">
             </div>
  
  
            </div>
            <div class="col-md-12">     
                
                	<div class="panel panel-body panel-dark-grey bottom-right marbot0">
                        <div class="panel-title" style="padding:0px;">
                            <h3 class="text-left">Otevírací doba</h3>
                        </div>

                        <div class="working-hours working-hours-type1">
                            <dl class="dl-horizontal">
                              <dt> Pondělí </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Úterý </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Středa </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Čtvrtek </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                            <dl class="dl-horizontal">
                              <dt> Pátek </dt>
                              <dd>8:30 - 17:00 hod.</dd>
                            </dl>
                                                    
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
 <section class="top-bottom-spacing blog white-bg" style="background:rgb(255 255 255) !important;">
    	<div class="container">
        	<div class="row">           
                    
              <div class="col-md-12">
                    <div class="col-md-6">
                        <h4><strong>OČN&Iacute; EU OPTIKA S.R.O.</strong></h4>
<p>&Scaron;koln&iacute; 117<br />Fr&yacute;dlant nad Ostravic&iacute;, 739 11</p>
<p><strong>IČO:</strong> 06848826<br /><strong>DIČ:</strong> CZ06848826</p>
<p><strong>Bankovn&iacute; spojen&iacute;:</strong> 282734319 / 0300 (ČSOB)</p>
<p><strong>Statut&aacute;rn&iacute; z&aacute;stupci:</strong> MUDr. Michaela Hust&aacute;, Rudolf Vasilčo</p>
<p>OČN&Iacute; EU Optika s.r.o. zapsan&aacute; v obchodn&iacute;m rejstř&iacute;ku veden&eacute;ho Krajsk&yacute;m soudem v Ostravě odd&iacute;l C vložka 73540.</p>
<p><strong>Identifik&aacute;tor datov&eacute; schr&aacute;nky:</strong> jtf22zz</p>
                  </div>
                  
                  <style>
                  .form-input, textarea{border:1px solid silver;width:100%;margin-bottom:5px;padding:8px;background:rgb(255 255 255) !important;-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;}
                   .form-input:hover, textarea:hover{border:1px solid grey;}
                  </style>
                  
                  <div class="col-md-6">
                  <h4><span>Pošlete nám zprávu</span></h4>  
                    <form method="post" action="posli.php">
                        <label>Jméno a příjmení</label>
                        <input type="text" class="form-input" name="jmeno" placeholder="Vaše jméno" required>
                        <label>Předmět zprávy</label>
                        <input type="text" class="form-input" name="predmet" placeholder="Předmět" required>
                        <label>Váš e-mail</label>
                        <input type="text" class="form-input" name="email" placeholder="E-mail" required>
                        <label>Text</label>
                        <textarea name="text" placeholder="Text vaší zprávy.." style="height:100px;"></textarea>
                        
                        <button tyoe="submit" class="btn btn-type1 btn-sm">Odeslat zprávu</button>
                    </form>
                  </div>
                  
                  
                </div>     
                    
                    
                    
                    
                    
                    
                    <!-- Content -->
                    
                </div>
                
                
                
                
               
            </div>
        </div>
</section>
<!--------- Content --------->






<section class="uk-section" style="padding-bottom:0px;padding-top:0px;">
    
<iframe frameborder="0" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1011.6741150768287!2d18.35909043930965!3d49.59135742795472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713f585641f3f29%3A0x396dbae6e0316ed7!2sO%C4%8CN%C3%8D+EU+OPTIKA+s.r.o.!5e0!3m2!1scs!2scz!4v1531286334282" style="border:0" width="100%"></iframe>

    
</section>




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