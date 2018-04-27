<?php

include ('function.php');


if (isset($_POST['username'])) $username = $_POST['username'];
else $username = "(Not entered)";

if (isset($_POST['number'])) $number = $_POST['number'];
else $number = "(Not entered)";


if (isset($_POST['monthnum'])) $monthnum = $_POST['monthnum'];
else $monthnum = 0;


$today = date("d.m.Y");


$time = strtotime("+$monthnum months");
$enddate = date("d.m.Y", $time);



$page = include('template.tpl');

$marker = array('{USERNAME}', '{NUMBER}', '{MONTHNUM}', '{TODAY}', '{ENDDATE}');
$marker_info = array($username, $number, $monthnum, $today, $enddate);

$page = str_replace($marker, $marker_info, $page);

echo $page;


?>







