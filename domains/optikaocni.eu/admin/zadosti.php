<?php
require_once 'inc/Database.php';
require_once 'ajax/safe.php';
?>
<!doctype html>
<html class="no-js h-100" lang="cs">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Netist.cz - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extra.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
           
  </head>
  
  <style>
  .dataTables_length{margin-top: 5px;margin-left: 5px;}
  .dataTables_filter{margin-top: 5px;margin-right: 5px;}
  .btn-sm{padding:6px !important;}
  .table td, .table th {
    padding: .35rem;}
  </style>
  
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        
        <?php include_once "_sidebar.php"; ?>
        
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
        
        
          <?php include_once "_mainNavbar.php"; ?>
          
          <div class="main-content-container container-fluid px-4">


          <?php if (isset($_GET['upravit'])) { 
          $edit = $database->zadosti->where("id", $_GET['id'])->fetch();
          ?>
          
         <div class="row" style="margin-top:10px;">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-body p-10 pb-3 text-center">
                  <form method="post" action="update?upravit-clanek">
                  <input type="hidden" name="id" value="<?= $edit['id'] ?>">
            <div class="form-group">
              <strong style="float:left;">Nadpis</strong><br style="clear:both;">
              <input type="text" name="nadpis" class="form-control" value="<?= $edit['nadpis'] ?>" placeholder="Nadpis článku">
            </div>
            <div class="form-group">
              <strong style="float:left;">Obsah stránky</strong><br style="clear:both;">
              <textarea name="obsah" id="editor1" class="form-control"><?= $edit['obsah'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-success">Uložit změny</button>
            <a href="novinky" class="btn btn-secondary">Zpět</a>
                  </form>  
                  </div>
                </div>
              </div>
            </div>
          
          <?php } else {?>

          <div class="row" style="margin-top:10px;">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h6 class="m-0" style="float:left;">Žádosti</h6>
                  </div>
                  <div class="card-body p-10 pb-3 text-center">
                    <table class="table mb-0" id="myTable">
                      <thead class="bg-light">
                        <tr>
                          <th scope="col" class="border-0">ID</th>
                          <th scope="col" class="border-0">Žadatel</th>
                          <th scope="col" class="border-0">Telefon</th>
                          <th scope="col" class="border-0">Email</th>
                          <th scope="col" class="border-0"></th>
                          <th scope="col" class="border-0"></th>
                        </tr>
                      </thead>
                      <tbody>
                      
                        <?php foreach ($database->zadosti->order("id ASC") as $zaznam) { 
                        ?>
                        <tr>
                          <td><?= $zaznam['id'] ?></td>
                          <td><?= $zaznam['jmeno'] ?></td>
                          <td><?= $zaznam['telefon'] ?></td>
                          <td><?= $zaznam['email'] ?></td>
                          <td><a href="javascript:void(0);" data-href="detail-zadosti?id=<?= $zaznam['id'] ?>" class="openPopup btn btn-info btn-sm">Detail</a></td>
                          <td><a href="update?smaz-zadost&id=<?= $zaznam['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Opravdu si přejete žádost číslo <?= $zaznam['id'] ?> smazat?')">Smazat</a></td>
                        
                        </tr>
                        <?php } ?>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <?php } ?>
          
           </div>
          
          <?php include_once "_footer.php"; ?>
        </main>
      </div>
    </div>
    <script type="text/javascript">  
	   CKEDITOR.replace( 'editor1' );
       CKEDITOR.replace( 'editor2' ); 
    </script>
   

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script> 
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 
    
    <script type="text/javascript">
           $(document).ready( function () {
    $('#myTable').DataTable({
                    "language": {
            "lengthMenu": "Počet záznamů na stránce _MENU_",
            "zeroRecords": "Nic nenalezeno - omlouváme se",
            "info": "Zobrazena strana _PAGE_ z _PAGES_",
            "infoEmpty": "Žádné záznamy nejsou k dispozici",
            "infoFiltered": "(Prohledáno _MAX_ total záznamů)",
            "sLoadingRecords": "Načítám...",
          	"sProcessing":     "Provádím...",
          	"sSearch":         "Hledat:",
            "oPaginate": {
                        		"sFirst":    "První",
                        		"sLast":     "Poslední",
                        		"sNext":     "Další",
                        		"sPrevious": "Předchozí"
                        	},
                    },
                    "pageLength": 500,
                    "order": [[0, "asc"]],
                    "aoColumnDefs": [
                        {'bSortable': false, 'aTargets': [4,5,6,7]}
                    ]
                });
} );
        </script>
  
<script>
$(document).ready(function(){
    $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-obsah').load(dataURL,function(){
            $('#myModal').modal({show:true});
        });
    }); 
});
</script> 


<!-- Modal detail uzvatele-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document" style="max-width:700px;">
        <!-- Modal content-->
        <div class="modal-content" style="">
            <div class="modal-header">
        <h5 class="modal-title">Detail žádosti</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-obsah" style="padding:10px;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Zavřít okno</button>
            </div>
        </div>
        </div>
    </div>


 <style>
 .form-group {
    margin-bottom: .3rem !important;
}
</style>
	 
  </body>
</html>