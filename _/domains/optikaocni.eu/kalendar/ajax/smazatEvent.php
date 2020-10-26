<?php

include("../inc/Database.php");

$myPost = filter_input_array(INPUT_POST);

$database->prace->where("id", $myPost['id'])->delete();
