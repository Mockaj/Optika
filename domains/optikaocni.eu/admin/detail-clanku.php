<?php
require_once 'ajax/safe.php';
require_once 'inc/Database.php';
$zaznam = $database->novinky->where("id", $_GET['id'])->fetch();
$id = $_GET['id']; 
?>
<h4><?= $zaznam['nadpis'] ?></h4>
<?= $zaznam['obsah'] ?>

<?php foreach ($database->galerie->where("novinka", $_GET['id']) as $loop) { ?>

<img src="<?= $loop['dir'] ?>/<?= $loop['nazev'] ?>" width="20%">

<?php } ?>