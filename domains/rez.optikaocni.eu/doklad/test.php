<?php
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



        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
        <script src="js/kalendar.js"></script>
       
    </head>
    
    <body>
    
       <?php
                            $id = (int) $_GET['id'];
                            foreach ($database->prace->where("id", $id) as $loop) {
                                ?>
                                
                                
                           <?= $loop["title"] ?>     
                                
                                
                                
                                
                                <?php
                            }
                            ?>
    
    
    </body>
    </html>