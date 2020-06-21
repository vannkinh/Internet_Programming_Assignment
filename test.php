<?php
    $seasons = array(
        "spring" => array("Mar", "Apr", "May"),
        "summer" => array("Jun", "Jul", "Aug"),
        "autumn" => array("Sep", "Oct", "Nov"),
        "winter" => array("Dec", "Jan", "Feb"),
    );
    $month = date("M", strtotime("2020-01-01"));
    switch($month) {
        case in_array($month, $seasons["spring"]):
            echo "this is spring season";
            break;
        case in_array($month, $seasons["summer"]);
            echo "This is autonm season";
            break;
        case in_array($month, $seasons["autumn"]):
            echo "This is autumn season";
            break;
        case in_array($month, $seasons["winter"]):
            echo "This is winter season";
            break;
        default:
            echo "This is impossible";
    }
?>