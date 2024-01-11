<?php

if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once './src/components/head/head.php' ?>
    <title>PHP Include Exercise</title>
</head>

<?php

if (isset($_SESSION['username'])) {


    header('Location: /dashboard.php');
}



function sanitizeUsername($username)
{
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (!empty($_POST["username"]) && !empty($_POST["password"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (name, password) VALUES ('$username', '$password')";



        $checkuser = "SELECT EXISTS(SELECT name FROM users
    WHERE name = '$username')";
        $r = mysqli_query($conn, $checkuser);

        $f = mysqli_fetch_all($r, MYSQLI_ASSOC);

        $s = array_values($f[0]);

        $t = boolval(intval($s[0]));


        var_dump($t);

        echo "<br>";

        var_dump($f[0]);



        if (!$t) {
            if (mysqli_query($conn, $sql)) {
                // success
                echo "Successfully created user" . $username . "<br>";

                header('Location: /accountCreated.php');
            } else {
                // error
                echo 'Error: ' . mysqli_error($conn);
            }
        } else {
            echo "user already exists";
        }
    } else {
        echo "empty fields";
    }
}



// // select all users from table users and print them to the browser
// $sql = 'SELECT * FROM users';
// $result = mysqli_query($conn, $sql);
// $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);

// foreach ($feedback as $key => $value) {
//   print_r($value["name"] . '=>' . $value["password"]);
//   echo "<br>";
// }



?>

<body>
    <?php //include_once "./src/components/nav/navbar.php" 
    ?>
    <div class="index-form-wraper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="index-form">
            <label for="username" id="username">Username:</label>
            <input type="text" name="username" id="username">
            <label for="password" id="password">Password:</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="create account" name="submit" id="submit" class="submit">
        </form>


    </div>






</body>

</html>