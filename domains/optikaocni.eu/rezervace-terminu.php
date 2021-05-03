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
        <script src="js/kalendar-rezervace.js"></script>
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
            	
                <div class="col-md-12 marbot10">
                    <!-- Content -->
                    <div class="row animatedParent animateOnce" data-sequence='250'>
                       
                      
                      <div id="kalendar"></div>
                      
                      <div id="pridat" class="modal fade"  role="dialog">
                <div class="modal-dialog" role="document" style="width:90%;">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:20px;">
                            <button type="button" style="margin-left:5px;float:left;color:black;border:1px solid black;padding:5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">ZAVŘÍT OKNO</span></button>
                        </div>

                        <form id="form" style="text-align: left;margin: 0">

                            <div class="modal-body">
                            
                            <div class="row">
                            <div class="col-md-6">  
                               <div class="form-group">
                                    <label>Jméno pacienta</label>
                                    <input type="text" name="zjmeno" maxlength="254" class="form-control" id="zjmeno" required>
                                </div>
                                <div class="form-group">
                                    <label>Přijmení pacienta</label>
                                    <input type="text" name="zprijmeni" maxlength="254" class="form-control" id="zprijmeni" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefon </label>
                                    <input type="text" name="ztelefon" maxlength="254" class="form-control" id="ztelefon" required>
                                </div>
                                <div class="form-group">
                                    <label>E-mail </label>
                                    <input type="text" name="zemail" maxlength="254" class="form-control" id="zemail" required>
                                </div>
                             </div>
                             <div class="col-md-6">

                             </div>
                             </div>
                             
                             <hr>

                            <div class="row">
                            <div class="col-md-6">

                                <input type="hidden" name="id" value="0" id="id_event">
                                <input type="hidden" name="technik_id" value="10" id="technik_id">
                                <div class="form-group">
                                    <label>Termín</label>
                                    <input type="text" value="" id="startDate" class="form-control" disabled>
                                    <input type="hidden" name="startDate" id="startDateH" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                <label>Čas</label>
                                <select class="form-control" name="startTime" id="startTime" required>
                                    <option disabled>Vyberte čas</option>
                                    <option value="8:30">8:30</option>
                                    <?php
                                    for ($x = 9; $x <= 16; $x++) {
                                    echo "<option value='$x:00'>$x:00</option>";
                                    echo "<option value='$x:30'>$x:30</option>";
                                           
                                    }
                                    ?>
                                </select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label>Typ zákroku</label>
                                <select class="form-control" name="typ_prace_id" id="select"  required>
                                    <option value="" disabled selected></option>
                                    <?php
                                    foreach ($database->typ_prace->order("poradi") as $typ) {
                                        echo "<option data-des='$typ[cena]' data-dest='$typ[popis]' value='$typ[id]'>$typ[nazev]</option>";
                                    }                   
                                    ?>
                                </select>
                                </div>
                                <div class="form-group">
                                    <label>Středisko</label>
                                        <input type="text" value="Optika Frýdlant nad Ostravicí" id="startDate" class="form-control" disabled>
                                </div>

                                <input type="hidden" name="stredisko_id" value="1" id="selectSt">
                                <input type="hidden" name="stav" value="0" id="stav">

                            </div>
                            
                            </div>

                            </div>
                            <div class="modal-footer">

                                    <button type="submit" class="btn btn-success col-md-2">Objednat termín</button>

                                    <button type="button" class="btn btn-warning  col-md-2" data-dismiss="modal">Zavřít</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
            
            <div id="info" class="modal fade"  role="dialog">
                <div class="modal-dialog" role="document" style="width:90%;">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:20px;">
                            <button type="button" style="margin-left:5px;float:left;color:black;border:1px solid black;padding:5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">ZAVŘÍT OKNO</span></button>
                        </div>
                        
                        <!--text-->
                        <div style="text-align:center;padding:20px;">
                        <img src="assets/images/navod.jpg" width="800px">
                        </div>
                        
                    </div>
                </div>
            </div>
  
                    </div>
                    <!-- Content -->
                    
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