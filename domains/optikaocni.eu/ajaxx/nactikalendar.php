<?php

include("../inc/Database.php");
$myPost = filter_input_array(INPUT_POST);

$json = [];
foreach ($database->prace->where("technik_id", $myPost['technik_id']) as $event) {
    $arr = [];
    $arr['id'] = $event['id'];
    $arr['title'] = $event['title'];
    $arr['start'] = $event['start'];
    $arr['end'] = $event['end'];
    $arr['kolo'] = $event['kolo'];


    $arr['typ_prace_id'] = $event['typ_prace_id'];
    $arr['zakaznici_id'] = $event['zakaznici_id'];
    $arr['email'] = "Email: " . $event->zakaznici['email'];
    $arr['telefon'] = "Tel: " . $event->zakaznici['telefon'];
    $arr['zakaznik'] = "Zákazník: " . $event->zakaznici['prijmeni'] . " " . $event->zakaznici['jmeno'];
    //$arr['backgroundColor'] = $event->typ_prace['barva'];
    $arr['backgroundColor']=( $event['dokonceno']=="1" ? "#D7D7D7" : $event->typ_prace['barva'] );

    //$arr['borderColor'] = "transparent";
    $arr['borderColor']=( $event['doklad']=="1" ? "transparent" : "black" );
    






    $arr['popis_servis'] = $event['popis_servis'];




    
    $arr['zjmeno'] = $event['zjmeno'];
    $arr['zprijmeni'] = $event['zprijmeni'];
    $arr['ztelefon'] = $event['ztelefon'];
   
    $arr['zemail'] = $event['zemail'];
    
    
    $json[] = $arr;
    array_push($arr, $json);
}

echo json_encode($json);
