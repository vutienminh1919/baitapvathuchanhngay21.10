<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<textarea name="phone">
</textarea>
<input type="submit" value=" click me">
</body>
</html>
<?php
include_once "phone.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $array = explode(",", $input);
    foreach ($array as $item) {
        if (check($item) === 1) {
            echo "is Viettel";
        } else if (check($item) == 2) {
            echo "is Mobiphone";
        } else if (check($item) == 3) {
            echo " is Vinaphone";
        }
    }
}