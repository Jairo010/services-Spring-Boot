<?php
    $arrayassoc = array("name"=>"Mateo","lastName"=>"Perez","Age"=>21);
    print_r($arrayassoc);
    echo("<br>");
    //JSON ENCODE -> data php to json
    //Array asociativo to json
    $phptojson = json_encode($arrayassoc);
    echo($phptojson);
    echo("<br>");
    echo($arrayassoc['name']);
    echo("<br>");

    //Array to json

    $array = array("Monday","Tuesday","Wednesday","Thursday","Friday");
    print_r($array);
    echo("<br>");

    $phptojson1 = json_encode($array);
    echo($phptojson1);
    echo("<br>");

    //Object php to json
    $object = new StdClass();
    $object->name="Jose";
    $object->lastName="Flores";
    $object->age=20;

    $phptojson2 = json_encode($object);
    echo($phptojson2);
    echo("<br>");

    //JSON DECODE -> json to php

    $person='{
        "name":"Joel",
        "lastName":"Espinoza",
        "age":25
    }';

    $var = json_decode($person);

    print_r($var->age);
    echo("<br>");

    $array = json_decode($person,true);

    print_r($array);
    echo("<br>");

    echo(json_decode($phptojson2)->lastName);

    //Js
    // How to convert diferent types' dates to json and viceversa
    //php
    // How to convert diferent types' dates to json and viceversa
?>