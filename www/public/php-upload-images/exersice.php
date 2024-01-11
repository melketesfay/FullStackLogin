<?php


// $name = "Melke";
// $alter = 30;
// $isStudent = true;




// echo "<h1 style = 'color:red;'> Hallo $name du bist $alter Jahre alt und $isStudent </h1>";

// $geburtsJahr = "1989";

// $berechnetesAlter = date("Y") - 1989;

// $myArr = [$name, $alter];



// echo "<h1 style='color:yellow;'>Name: $name Alter: $berechnetesAlter Geburtsjahr: $geburtsJahr type:  </h1>";

// print_r("<pre>");
// print_r($myArr);

// print_r("</pre>");


// $zahl = "15";

// print_r(gettype($zahl));

// echo intval($zahl);

// $intValue = intval($zahl);

// print_r(gettype($zahl));

// print_r(gettype($intValue));

// echo "<br>";

// print_r(boolval($intValue) == 1);

// echo "<br>";

// var_dump((bool)$intValue);

// $a = 5;
// $b = "5";
// $resultat = $a === $b ? 'korrekt' : 'inkorrekt';

// echo $resultat;


// function concat(...$args)
// {

//     $str = "";
//     foreach ($args as $i) {
//         $str = $str . $i . "<br>";
//     }

//     return $str;
// }

// $age = 30;

// print_r(concat("Hallo Leser:in", "\n", "Ich bin bereits", $age, "Jahre alt."));


// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// $i = count($arr);

// $summe = 0;
// for ($j = 0; $j < $i; $j++) {

//     // global $summe;
//     // global $arr;

//     $summe += $arr[$j];
//     # code...
// }

// echo $summe;

// echo "<br>";

// print_r($arr[count($arr) - 1] . count($arr));

// 

// $assocArray = ["name" => "Max", "alter" => 25, "stadt" => "Berlin"];

// $item = ["hobby" => "php"];

// $assocArray = array_merge($assocArray, $item);

// print_r(array_merge($assocArray, $item));

// echo "<br>";

// print_r($assocArray);

// print_r($item);

// echo "<br>";

// $assocArray += $item;

// print_r($assocArray);

// $secItem = array_shift($assocArray);

// print_r($secItem);

// echo "<br>";


// print_r($assocArray);

// echo "<br>";

// array_unshift($assocArray, $secItem);
// print_r($assocArray);

// echo "<br>";

// array_pop($assocArray);
// print_r($assocArray);

// array_push($assocArray, $item);


// echo "<br>";

// print_r($assocArray);


// $assocArray = ["name" => "Max", "alter" => 25, "stadt" => "Berlin"];

// $item = ["hobby" => "php"];

// $assocArray += $item;

// $keys = array_keys($assocArray);

// print_r($keys);

// $keys[3] = "me";

// print_r("<br>");

// print_r($keys);

// echo "<br>";

// $numbers = [4, 3, 2, 1];
// sort($numbers);
// print_r($numbers);


// echo "<br>";


// rsort($numbers);
// print_r($numbers);

// echo "<br>";

// krsort($assocArray);

// print_r($assocArray);

// echo "<br>";

// $return = array_key_exists("name", $assocArray);

// var_dump((bool)$return);


// function double($n)
// {
//     return $n % 2 == 0;
// };

// print_r(array_filter($numbers, "double"));


// $filme = [
//     ["Titel" => "Inception", "Genre" => "Sci-Fi", "Bewertung" => 9],
//     ["Titel" => "The Shawshank Redemption", "Genre" => "Drama", "Bewertung" => 10],
//     ["Titel" => "The Dark Knight", "Genre" => "Action", "Bewertung" => 9],
//     ["Titel" => "Pulp Fiction", "Genre" => "Crime", "Bewertung" => 8],
//     ["Titel" => "Forrest Gump", "Genre" => "Drama", "Bewertung" => 8],
// ];


// $topFilme = array_filter($filme, fn ($n) => $n["Bewertung"] >= 9);



// function duchschnitt($arr)
// {
//     $n = 0;
//     foreach ($arr as $key) {


//         $n += $key["Bewertung"];
//     }

//     return $n / count($arr);
// }


// print_r(duchschnitt($filme));

// print_r("<br>");

// $alleBewertungen = array_column($filme, 'Bewertung');

// print_r($alleBewertungen);


// print_r("<br>");

// print_r("<pre>");

// usort($filme, fn ($a, $b) => $a["Bewertung"] - $b["Bewertung"]);

// print_r($filme);


// $schulNoten = [
//     "Schueler1" => [
//         "Name" => "Max Mustermann",
//         "Noten" => [
//             "Mathematik" => 85,
//             "Deutsch" => 90,
//             "Englisch" => 78
//         ]
//     ],
//     "Schueler2" => [
//         "Name" => "Anna Schmidt",
//         "Noten" => [
//             "Mathematik" => 92,
//             "Deutsch" => 88,
//             "Englisch" => 95
//         ]
//     ],
//     "Schueler3" => [
//         "Name" => "Melke Tesfay",
//         "Noten" => [
//             "Mathematik" => 100,
//             "Deutsch" => 99,
//             "Englisch" => 99
//         ]
//     ]
// ];

// print_r("<pre>");

// print_r($schulNoten);

// function duchschnitt($arr, $schuler = true)
// {
//     $schulerNoten = array_filter($arr, fn ($e) => $e["Name"] == $schuler);

//     $notenArr = array_column($schulerNoten, "Noten");

//     $noten = 0;

//     foreach ($notenArr[0] as $key => $value) {
//         $key;
//         $noten += $value;
//     }


//     return $noten / count($notenArr[0]);
// }

// print_r("<pre>");

// $melke = duchschnitt($schulNoten, "Melke Tesfay");

// print_r($melke);

// echo "<br>";

// $all = duchschnitt($schulNoten);

// print_r($all);


// function begrussung($name = "Gast")
// {
//     return "Hallo " . $name;
// }

// print_r(begrussung());

// echo "<br>";


// $arr = array('Hello', 'World!', 'Beautiful', 'Day!');

// $str = implode(" ", $arr);

// print_r($str);

// echo "<br>";

// $secArr = explode(" ", $str);

// print_r($secArr);

// echo "<br>";

// $thirdArr = str_split($str);

// print_r($thirdArr[6]);


// function facultaet($n)
// {
//     if ($n == 1) {
//         return 1;
//     } else {
//         return $n * facultaet($n - 1);
//     }
// }

// print_r(facultaet(5));

// function isEven($n)
// {
//     return $n % 2 == 0 ? "even" : "odd";
// }


// $test = isEven(facultaet(1));


// print_r($test);


// $add = fn ($a, $b) => $a + $b;


// print_r($add(2, 3));

#this in php

// session_start();

// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";


// echo "Session variables" . $_SESSION['favcolor'];

// echo "<br>";

// echo "test";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!isset($_POST['submit'])) {
            echo "Form not submitted";
        } else {

            $name = $_POST['name'];
            $pass = $_POST['password'];


            if ($name == "melke" && $pass == "1234") {
                header('Location: /login.php');
            } else {
                echo "wrong Data";
            }

            var_dump($name);
            var_dump($pass);

            echo "<pre>";
        }
    } else {
        echo "wrong request_method";
    }







    if (isset($_POST['submitup'])) {
        $img = $_FILES["upload"];

        var_dump($img);
    }


    echo "<br>";
    echo "Melke"






    ?>

    <form action="exersice.php" method="post">

        Name: <input type="text" name="name" id="name">
        Password: <input type="password" name="password" id="password">

        <input type="submit" value="submit" name="submit">
    </form>



    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>


    <?php phpinfo(); ?>
</body>

</html>