<?php
require_once 'ajax/safe.php';
require_once 'inc/Database.php';
?>
<!DOCTYPE html>
<html lang='cs'>
    <head>
        <title></title>
        <meta charset='utf-8'>
        <!-- <meta http-equiv='X-UA-Compatible' content='IE=edge'> -->

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/moment.min.js"></script>
        <script src="js/fullcalendar.min.js"></script>
        <script src="js/cs.js"></script>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fullcalendar.css">
        <link href = "https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel = "stylesheet" />

        <link rel="stylesheet" href="css/style.css">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
             
  
 

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script src="js/kalendar.js"></script>
        <style>
            .fc-month-view .fc-desc{
                display:none!important;
            }
            
            .wrap-kalendar{
                border: 1px solid grey;
                padding: 25px;
                background: white;
                -webkit-border-radius: 15px;
                -moz-border-radius: 15px;
                border-radius: 15px;
                color: rgb(50,50,50);
                margin-top: 30px;
            }
        </style>
 
    </head>
    <style>
    select {cursor:pointer;}
    </style>
    <body>


           
           
        <div class="container">  
                 
           <?php
            include("_menu.php");
           ?>
           
         

            <div class="row">
                <div class="col-sm-12">
                    <div class="wrap-kalendar">
                        <div id="kalendar"></div> 
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 100px;"></div>
            
            <style>
            a.modal_link{text-align:center;margin:5px;display:block;background:rgb(209,209,209);padding:10px;color:black;text-decoration:none;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;}
            a.modal_link:hover{background:rgb(32,32,32);color:white;}
            </style>

            <div id="pridat" class="modal fade"  role="dialog">
                <div class="modal-dialog" role="document" style="width:90%;">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:20px;">
                            <button type="button" style="margin-left:5px;float:left;color:black;border:1px solid black;padding:5px;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">ZAVŘÍT OKNO</span></button>

                            <!--<h4 class="modal-title">Přidat</h4>-->
                            
                            
                            
                            
                            
                           
                        </div>
                        
                      
                        
                        
                        <form id="form" style="text-align: left;margin: 0">
                           
                           
                            <div class="modal-body">
                            
                            <div class="row">
                            <div class="col-md-6">  
                               <div class="form-group">
                                    <label>Jméno pacianta</label>
                                    <input type="text" name="zjmeno" maxlength="254" class="form-control" id="zjmeno">
                                </div>
                                <div class="form-group">
                                    <label>Přijmení pacienta</label>
                                    <input type="text" name="zprijmeni" maxlength="254" class="form-control" id="zprijmeni">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefon </label>
                                    <input type="text" name="ztelefon" maxlength="254" class="form-control" id="ztelefon">
                                </div>
                                <div class="form-group">
                                    <label>E-mail </label>
                                    <input type="text" name="zemail" maxlength="254" class="form-control" id="zemail">
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
                                    <option value='8:30'>8:30</option>
                                    <?php
                                    for ($x = 9; $x <= 15; $x++) {
                                        
                                        echo "<option value='$x:00'>$x:00</option>";
                                        echo "<option value='$x:30'>$x:30</option>";
                                        
                                    }
                                    ?>
                                    <option value='16:00'>16:00</option>
                                </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Potvrzení termínu</label>
                               <select class="form-control" name="stav" id="stav">
                              <option value="" disabled selected></option>
                              <option value="1" style="color:green;">Potvrzeno</option>
                              <option value="0" style="color:red;">Nepotvrzeno</option>
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
                                    <label>Zadávající středisko</label>
                                <select class="form-control" name="stredisko_id" id="selectSt"  required>
                                    <option value="" disabled selected></option>
                                    <?php
                                    foreach ($database->stredisko->order("id") as $typ) {
                                        echo "<option value='$typ[id]'>$typ[nazev]</option>";
                                    }                   
                                    ?>
                                </select>
                                </div>
                                
                                   
                               
                            </div>
                            
                            </div>
                            
                            
                            <hr>
                            
                            <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                    <label>Soukromá poznámka</label>  
                                    <textarea name="popis_servis" id="popis_servis" class="form-control" rows="3"></textarea>
                                </div>
                            </div>    
                            </div>
                            
                            
                            

                            
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success col-md-2">Uložit</button>
                                <button type="button" class="btn btn-warning col-md-3" id="potvrdit">Uložit s potvrzením klientovi</button>
                                <button type="button" class="btn btn-danger  col-md-2" id="delete" >Smazat</button>
                                <button type="button" class="btn btn-default  col-md-2" data-dismiss="modal">Zavřít</button>
                                                                

                               <!-- <a id="id_link" href="">doklad</a> -->
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div> 
        
      
    
    </body>
</html>