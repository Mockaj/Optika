<?php

include("../inc/Database.php");

$myPost = filter_input_array(INPUT_POST);

$myPost['start'] = $myPost['startDate'] . " " . $myPost['startTime'] . ":00";
unset($myPost['startDate']);
unset($myPost['startTime']);
if ($myPost['zakaznici_id'] == "null") {
    unset($myPost['zakaznici_id']);
}

$datetime = new DateTime($myPost['start']);
$datetime->modify('+' . $database->typ_prace->where("id", $myPost['typ_prace_id'])->fetch()['delka'] . ' hour +'. $database->typ_prace->where("id", $myPost['typ_prace_id'])->fetch()['minuty'] . ' minutes');
$myPost['end'] = $datetime->format('Y-m-d H:i:s');


var_dump($myPost);
if ($database->prace->where("technik_id", $myPost['technik_id'])
                ->and("start < ? AND end > ? AND id != ?", $myPost['end'], $myPost['start'], $myPost['id'])->count() > 0) {
    echo "error";
    exit;
}


$myPost['title'] = $database->typ_prace->where("id", $myPost['typ_prace_id'])->fetch()['nazev'];

if ($myPost['id'] == 0) {
    unset($myPost['id']);
    $database->prace->insert($myPost);
} else {
    $id = $myPost['id'];
    unset($myPost['id']);
    $database->prace->where("id", $id)->update($myPost);
}