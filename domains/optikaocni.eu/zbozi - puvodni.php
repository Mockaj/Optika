                                                      <?php
require_once 'admin/inc/Database.php';
?>

<!DOCTYPE html>
<html lang="cs">

<head>
<title>Zboží - Optika OČNÍ EU</title>
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
            	<div class="skew-effect fadeInLeft animated">Zboží</div>
                <ol class="breadcrumb text-left fadeInRight animated">
                    <li><a href="index">Optika OČNÍ EU</a></li>
                    <li><a href="#"> Zboží </a></li>
                </ol>
            </div>
        </div>
</section>

<style>
#filters li{display:table;}
#filters li input{margin-right:10px;cursor:pointer;}
#filters{text-align:left;}
input[type="button"] { width: 120px; display: block;border:none;border-radius:5px;background:#449d44 !important;color:white;}
input[type="button"]:hover{background:#2a732a !important;}
i{margin-right:10px;}
.divButton{background:#0e4d7b;padding:15px;border-radius:5px;text-align:center;color:white;font-weight:600;margin-bottom:5px;}
.divButton:hover{background:#082c46;}
</style>

<!--------- Content --------->
<section class="top-bottom-spacing white-bg" style="padding: 40px 0 25px;">
	<div class="container">
  

		<div class="clearfix marbot10 animatedParent animateOnce" data-sequence='250'>
            <div class="row">

            <div class="col-md-2"><a href=""><div class="divButton"><i class="fas fa-glasses"></i>Dioptrické brýle</div></a></div>
            <div class="col-md-2"><a href=""><div class="divButton"><i class="fas fa-glasses"></i>Sluneční brýle</div></a></div>
            <div class="col-md-2"><a href=""><div class="divButton"><i class="fas fa-bullseye"></i>Kontakní čočky</div></a></div>
            <div class="col-md-2"><a href=""><div class="divButton"><i class="fas fa-tint"></i>Roztoky</div></a></div>
            <div class="col-md-2"><a href=""><div class="divButton"><i class="fas fa-eye-dropper"></i>Oční kapky</div></a></div>
            </div>
    </div>
  </div>
</section>            


<section class="top-bottom-spacing grey-bg" style="padding-top:30px;">
	<div class="container">
  

		<div class="clearfix marbot10 animatedParent animateOnce" data-sequence='250'>
            <div class="row">
            
            
       <div id='filters' class='col-md-3' style="background:white;padding:20px;border-radius:5px;">
      <div class='filter-attributes'>
        <h4><i class="fas fa-user-alt"></i>Pohlaví</h4>
        <ul class="vyber">
        <li><input type='checkbox' name='pohlavi' id='zena' value='zena' >Dámské</input></li>
        <li><input type='checkbox' name='pohlavi' id='muz' value='muz' >Pánské</input></li>
        </ul>
      </div>
      <div class='filter-attributes'>
        <h4><i class="fas fa-paint-brush"></i>Barva</h4>
        <ul>
        <li><input type='checkbox' name='barva' id='bila' value='bila' >Bílá</input></li>
        <li><input type='checkbox' name='barva' id='cerna' value='cerna' >Černá</input></li>
        <li><input type='checkbox' name='barva' id='modra' value='modra' >Modrá</input></li>
        </ul> 
      </div>
      <div class='filter-attributes'>
        <h4><i class="fas fa-random"></i>Značka</h4>
        <ul>
        <li><input type='checkbox' name='znacka' id='prada' value='prada' >Prada</input></li>
        <li><input type='checkbox' name='znacka' id='dolce' value='dolce' >Dolce&Gabanna</input></li>
        </ul>
      </div>
      <div>
        <br>
        <input type='button' id='none' value='Zrušit filtrování' class="button"></input>
      </div>
    </div>
            
            

                <div class='col-md-9'>
                
                <?php
                            foreach ($database->produkty->order("id DESC") as $zaznam) {
                                ?>
                
                
                <!-------- Produkt --------->
                <div class="col-md-4 marbot30 fadeInRight animated grid-products" data-id='1' data-pohlavi='<?= $zaznam['pohlavi'] ?>' data-barva='<?= $zaznam['barva'] ?>' data-znacka='<?= $zaznam['znacka'] ?>'>
                    <div class="text-center">
                        <div class="grid image-effect2">
                            <a href="produkt?id=<?= $zaznam['id'] ?>">
                                <figure>
                                    <div style="width:100%;height:200px;background:white url('admin/files/produkty/thumb/<?= $zaznam['pic'] ?>'); background-position:center;background-size: 70%;background-repeat: no-repeat;"></div>
                                    <figcaption><i class="fa flaticon-link-1 gallery-icon transition"></i></figcaption>
                                </figure>
                            </a>
                        </div>
                        <div class="panel panel-body marbot0 clearfix doctor-details" style="padding:5px;background: #f7f7f7;">
                            <h3 class="marbot0" style="font-size:15px;"><?= substr($zaznam['nazev'], 0, 25) ?>...</h3>
                            <p class="fontresize marbot10 color-light"><em> <span class="fw-500" style="font-size:13px;"><?= substr($zaznam['popis'], 0, 60) ?>...</span> </em></p>
                        </div>

                    </div>
                </div>
                <!-------- Produkt --------->
                
                   <?php
                            }
                            ?> 
                

              </div>  
               
                
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