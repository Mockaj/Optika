<?php
require_once 'inc/Database.php';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
<title>Chci vidět lépe - Optika OČNÍ EU</title>
<?php include_once "include/head.php"; ?>



        <script src="kale/bootstrap.min.js"></script>
        <script src="kale/moment.min.js"></script>
        <script src="kale/fullcalendar.min.js"></script>
        <script src="kale/cs.js"></script>
        <link rel="stylesheet" href="kale/bootstrap.min.css">
        <link rel="stylesheet" href="kale/fullcalendar.css">
        <link href = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel = "stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script src="js/kalendar.js"></script>
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
            	<div class="skew-effect fadeInLeft animated">Rezervace termínu</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="#"> Rezervace termínu </a></li>
                </ol>
            </div>
        </div>
</section>

<!--------- Content --------->
<section class="top-bottom-spacing blog grey-bg">
    	<div class="container">
        	<div class="row">
            	
                <div class="col-md-8 marbot10">
                    <!-- Content -->
                    <div class="row animatedParent animateOnce" data-sequence='250'>
                       
                      
                      <div id="kalendar"></div>
  
                    </div>
                    <!-- Content -->
                    
                </div>
                
                
                
                <div class="col-md-4">
                    <form class="appointment panel panel-body marbot40 panel-grey" method="post" action="objednavka">
                        <h3>Rezervace termínu</h3>
                        <!-- Dropdown List -->
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select style="cursor:pointer;" name="typ_prace_id">
                                      <option value="35">Měření zraku</option>
                                      <option value="34">Aplikace kont. čoček</option>
                                    </select>
                                </div>
                            </div>

                        	<div class="clearfix">
                            <div class="col-md-12">
                                <div class="clearfix form-group">
                                    <label>Jméno</label>
                                    <input name="jmeno" type="text" id="firstname" class="form-control" placeholder="Petr Novák">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="clearfix form-group">
                                    <label>Příjmení</label>
                                    <input name="prijmeni" type="text" id="firstname" class="form-control" placeholder="Petr Novák">
                                </div>
                            </div>
                            
                            <div class="col-md-12">    
                                <div class="form-group">
                                    <label for="emailid">E-mail</label>
                                    <input name="email" type="email" class="form-control" id="emailid" placeholder="petrnovak@seznam.cz">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone-number">Telefonní číslo</label>
                                    <input name="telefon" type="text" class="form-control" id="phone-number" placeholder="+420 000 000 000">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone-number">Datum</label>
                                    <input name="datum" type="date" class="form-control" >
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone-number">Čas</label>
                                    <select class="form-control" name="cas" required>
                                    <option disabled>Vyberte čas</option>
                                    <?php
                                    for ($x = 8; $x <= 16; $x++) {
                                        echo "<option value='$x:00'>$x:00</option>";
                                        echo "<option value='$x:30'>$x:30</option>";
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                           
                            
                            <!--<div class="col-md-12">                                
                                <div class="form-group">
                                    <div class="clearfix marbot20">
                                        <label for="date-time">Preferovaný termín a čas</label>
                                        <div id="datetimepicker" class="input-group date form_datetime" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
                                        <input name="termin" type="text" value="" id="date-time" readonly>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>                
                                        </div>
                                        <input type="hidden" id="dtp_input1" value="" />
                                    </div>
                                </div> 
                            </div> -->
                            
                            
                            </div>
                            
                        </div>
    
                        <div class="row clearfix">
                            <div class="col-md-12">
                                
                                <input type="checkbox" id="podminky" value="" placeholder="Váš e-mail" required="">&nbsp;Souhlasím se zracováním osobních údajů dle <a href="assets/images/gdpr.pdf" target="_blank">obchodních podmínek</a>  <br><br>
                                <button type="submit" class="btn btn-type1-reverse" >Odeslat</button>
                            </div>
                        </div>
                        <!-- // Form Section -->
                    </form>
                    <div id="post_message"><p class="fontresize"> </p></div>
                    
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