<?php
$file = fopen('template.tpl', 'r');
$file = file('template.tpl');
if (isset($_POST['sub'])) {
    require_once ('data.html');
    $username = $_POST['username'];
    $number = $_POST['number'];
    $monthnum = $_POST['monthnum'];
    if (empty($username)) {
        echo '<script>alert("Enter USERNAME");</script>';
    } elseif (!preg_match('/^([a-zA-Z]{1,16})$/', $username)) {
        echo '<script>alert("Enter USERNAME, use only latin letters");</script>';
    }
    elseif (empty($number)) {
        echo '<script>alert("Enter NUMBER");</script>';
    }
    elseif (empty($monthnum)) {
        echo '<script>alert("Enter MONTH");</script>';
    } else {
        $exedate = date('d.m.Y');
        $enddate = date_create();
        date_modify($enddate, $monthnum . "month");
        $enddate = date_format($enddate, "d.m.Y");
        $text = "";
        foreach ($file as $value) {
            $value = str_replace("%USERNAME%",$username, $value);
            $value = str_replace("%NUMBER%", $number, $value);
            $value = str_replace("%EXECDATE%", $exedate, $value);
            $value = str_replace("%MONTHNUM%", $monthnum, $value);
            $value = str_replace("%ENDDATE%", $enddate, $value);
            echo $text = "<article class='col-md-6 col-md-offset-3'>".$value . "</article>";
        }
    }
} elseif (isset($argv)) {
    if (!empty($argv[1]) && preg_match('/^([a-zA-Z]{1,16})$/', $argv[1]) && !empty($argv[2]) && !empty($argv[3])) {
        $username = $argv[1];
        $number = $argv[2];
        $monthnum = $argv[3];
        $exedate = date('d.m.Y H:i');
        $enddate = date_create();
        date_modify($enddate, $monthnum . "month");
        $enddate = date_format($enddate, "d.m.Y");
        $text = "";
        foreach ($file as $value) {
            $value = str_replace("%USERNAME%", $username, $value);
            $value = str_replace("%NUMBER%", $number, $value);
            $value = str_replace("%MONTHNUM%", $monthnum, $value);
            $value = str_replace("%EXECDATE%", $exedate, $value);
            $value = str_replace("%ENDDATE%", $enddate, $value);
            echo $text = $value;
        }
    } else {
        echo $text = "Fill all fields and check USERNAME is latin\n";
    }
} else {
    require_once('data.html');
}






