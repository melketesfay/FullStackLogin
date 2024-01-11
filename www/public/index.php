<?php

if (session_status() === PHP_SESSION_NONE) {
  // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
  session_start();
}

if (isset($_SESSION['username'])) {


  header('Location: /dashboard.php');
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


  <?php include_once "./src/components/nav/navbar.php" ?>
  <div class="index-form-wraper">
    <form action="./auth/login.php" method="post" class="index-form">
      <label for="username" id="username">Username:</label>
      <input type="text" name="username" id="username">

      <label for="password" id="password">Password:</label>
      <input type="password" name="password" id="password">

      <?php echo $_SESSION['message'] ?? "";
      if (session_status() === PHP_SESSION_NONE) {
        // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
        session_start();
      }
      $_SESSION['message'] = ""; ?>
      <input type="submit" value="sign in" name="submit" id="submit" class="submit">
    </form>

    <div class="signup">
      <p class="signup_text">You don't have an account yet?</p>

      <a href="./createAccoutn.php" id="signup_submit" class="signup_submit">create account</a>
      <!-- <a type="submit" value="create account" id="signup_submit" class="signup_submit"> -->
    </div>
  </div>






</body>

</html>