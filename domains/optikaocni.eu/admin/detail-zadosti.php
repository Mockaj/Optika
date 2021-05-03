<?php
require_once 'ajax/safe.php';
require_once 'inc/Database.php';
$zaznam = $database->zadosti->where("id", $_GET['id'])->fetch();
?>

<style>
td.first{width:45%;font-weight:600;}
</style>

<table style="width:100%;">
<tr>
<td class="first">Název/Jméno</td>
<td><?= $zaznam['jmeno'] ?></td>
</tr>

<tr>
<td class="first">Ulice</td>
<td><?= $zaznam['ulice'] ?></td>
</tr>

<tr>
<td class="first">Místo</td>
<td><?= $zaznam['misto'] ?></td>
</tr>

<tr>
<td class="first">PSČ</td>
<td><?= $zaznam['psc'] ?></td>
</tr>

<tr>
<td class="first">IČ</td>
<td><?= $zaznam['ic'] ?></td>
</tr>

<tr>
<td class="first">Kontaktní osoba (jméno příjmení)</td>
<td><?= $zaznam['kontaktniosoba'] ?></td>
</tr>

<tr>
<td class="first">Telefon</td>
<td><?= $zaznam['telefon'] ?></td>
</tr>

<tr>
<td class="first">Email</td>
<td><?= $zaznam['email'] ?></td>
</tr>

<tr>
<td class="first">www</td>
<td><?= $zaznam['www'] ?></td>
</tr>
</table>

<table style="width:100%;">
<tr>
<td class="first">Název</td>
<td><?= $zaznam['nazevprojektu'] ?></td>
</tr>

<tr>
<td class="first">Anotace projektu</td>
<td><?= $zaznam['anotace'] ?></td>
</tr>

<tr>
<td class="first">Předpokládaný počet čidel</td>
<td><?= $zaznam['pocetcidel'] ?></td>
</tr>

<tr>
<td class="first">Předpokládaný počet zpráv/1 čidlo/24hod</td>
<td><?= $zaznam['pocetzprav'] ?></td>
</tr>

<tr>
<td class="first">Umístění čidel</td>
<td><?= $zaznam['umisteni'] ?></td>
</tr>

<tr>
<td class="first">Pevné čidla</td>
<td><?= $zaznam['pevne'] ?></td>
</tr>

<tr>
<td class="first">Mobilní čidla</td>
<td><?= $zaznam['mobilni'] ?></td>
</tr>

<tr>
<td class="first">Datum zahájení projektu</td>
<td><?= $zaznam['datumzahajeni'] ?></td>
</tr>
</table>
