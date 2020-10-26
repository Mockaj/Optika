<?php

include("../inc/Database.php");
$myPost = filter_input_array(INPUT_POST);

$json = [];
foreach ($database->prace->where("technik_id", 10) as $event) {
    $arr = [];
    $arr['id'] = $event['id'];
    $arr['title'] = $event['title'];
    $arr['start'] = $event['start'];
    $arr['end'] = $event['end'];
    $arr['stav'] = $event['stav'];
    $arr['typ_prace_id'] = $event['typ_prace_id'];
    $arr['stredisko_id'] = $event['stredisko_id'];
    $arr['zakaznici_id'] = $event['zakaznici_id'];
    $arr['email'] = "Email: " . $event->zakaznici['email'];
    $arr['telefon'] = "Tel: " . $event->zakaznici['telefon'];
    $arr['zakaznik'] = "Zákazník: " . $event->zakaznici['prijmeni'] . " " . $event->zakaznici['jmeno'];

    //$arr['backgroundColor']=( $event['stredisko_id']=="1" ? "#809fff" : "#ff0066" );
   // $arr['borderColor']=( $event['stav']=="0" ? "#cc0000" : "transparent" );
  //$arr['borderColor'] = "red";
   $arr['backgroundColor']=( $event['stav']=="0" ? "black" : "#003d99" );
   $arr['borderColor']=( $event['stredisko_id']=="2" ? "#ff0066" : "transparent" );

    

    $arr['popis_servis'] = $event['popis_servis'];
    $arr['dokonceno'] = $event['dokonceno'];
    $arr['doklad'] = $event['doklad'];
    $arr['reseni'] = $event['reseni'];
    
    

    
   
    
    $arr['zjmeno'] = $event['zjmeno'];
    $arr['zprijmeni'] = $event['zprijmeni'];
    $arr['ztelefon'] = $event['ztelefon'];
    $arr['zemail'] = $event['zemail'];
    
    
    $json[] = $arr;
    array_push($arr, $json);
}

echo json_encode($json);
