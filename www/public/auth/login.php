<?php // include $_SERVER['DOCUMENT_ROOT'] . "/config/database.php"; 
?> 

<?php




if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
}




function login($username, $password)
{

    //search database for username and password
    //DB


    include_once "../config/database.php";







    $checkuser = "SELECT * FROM users
    WHERE name = '$username'";
    $r = mysqli_query($conn, $checkuser);



    $f = mysqli_fetch_all($r, MYSQLI_ASSOC);

    $s = array_values($f[0]);

    $name_db = $s[1];

    $pass_db = $s[2];

    $t = boolval(intval($s[0]));


    var_dump($t);

    echo "<br>";

    var_dump($f[0]);



    // if (!$t) {
    //     if (mysqli_query($conn, $sql)) {
    //         // success
    //         echo "success";
    //     } else {
    //         // error
    //         echo 'Error: ' . mysqli_error($conn);
    //     }
    // } else {
    //     echo "user already exists";
    // }


    //DB






    if ($username == $name_db && $password == $pass_db) {
        return true;
    }
    return false;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];


        if (login($username, $password)) {
            $_SESSION['username'] = $username;
            header("Location: /dashboard.php");
        } else {


            header("Location: /index.php");
        }
    } else {

        $_SESSION["message"] = "<p class='wrong_input_data_alert'>wrong input data</p>";
        echo "no empty fields allowed";
        header("Location: /index.php");
    }
}
