<?php

include("inc/Database.php");

$myPost = filter_input_array(INPUT_POST);

var_dump($myPost);
if ($myPost['zakaznici_id'] == "null") {
    unset($myPost['zakaznici_id']);
}
$id = $myPost['id'];
unset($myPost['id']);

$database->prace->where("id", $id)->update($myPost);
