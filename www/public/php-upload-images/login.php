<?php

$name = $_POST['name'];
$pass = $_POST['password'];


if ($name == "melke" && $pass == "1234") {
    echo $name;
    echo "<br>";
    echo $pass;
} else {
    echo "Wrong Data";
}
