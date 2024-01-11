<?php include_once './auth/guard.php'; ?>

<?php


if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
}

$username = $_SESSION['username'];





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once './src/components/head/head.php'; ?>
    <title>Document</title>
</head>

<body>

    <?php include_once "./src/components/nav/navbar.php" ?>
    <div class="index-form-wraper">


        <?php echo "<h1 class='welcome-txt'>Welcome $username<h1>"; ?>



        <form action="./auth/logout.php" method="post" class="dashboard-form">
            <input type="submit" value="Log out" class="logout" id="submit">
        </form>


    </div>

</body>

</html>