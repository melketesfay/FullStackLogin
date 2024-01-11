<?php
define('DB_HOST', 'mysql_db');
define('DB_USER', 'opportunity');
define('DB_PASS', 'Opport2023');
define('DB_NAME', 'php_mysql_login_db');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
// use for debugging
// echo 'Connected to Database successfully <br>';




$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,

    password VARCHAR(500),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";



if ($conn->query($sql) === TRUE) {

    // //use for debugging else no error means database created successfully
    // print_r("Database successfully created <br>");

} else {
    echo "Error creating table: " . $conn->error;
}


// $name = "jelke";


// $checkuser = "SELECT * FROM users
// WHERE name = '$name'";
// $r = mysqli_query($conn, $checkuser);

// var_dump($r);

// echo "<br>";

// $f = mysqli_fetch_all($r, MYSQLI_ASSOC);

// var_dump($f);

// echo "<br>";

// $s = array_values($f[0]);

// var_dump($s);
// echo "<br>";

// var_dump($s[1]);


// $t = boolval(intval($s[0]));




// // code for sign up if user doesn't exist (to be implemented later with a sign up button in index.php)

// $name = 'selke';
// $pass = 1234;


// $sql = "INSERT INTO users (name, password) VALUES ('$name', '$pass')";



// $checkuser = "SELECT EXISTS(SELECT name FROM users
// WHERE name = '$name')";
// $r = mysqli_query($conn, $checkuser);

// $f = mysqli_fetch_all($r, MYSQLI_ASSOC);

// $s = array_values($f[0]);

// $t = boolval(intval($s[0]));


// var_dump($t);

// echo "<br>";

// var_dump($f[0]);



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







echo "<br>";

// $drop = "DROP TABLE users";

// if (mysqli_query($conn, $drop)) {
//     // success
//     echo "success";
// } else {
//     // error
//     echo 'Error: ' . mysqli_error($conn);
// }
