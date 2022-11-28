<?php
require_once __DIR__ . "/partials/functions.php";
require_once __DIR__ . "/partials/data.php";
session_start();
// if (empty($_SESSION["letters"])) {
//     $_SESSION["letters"] = false;
// }
// if (empty($_SESSION["numbers"])) {
//     $_SESSION["numbers"] = false;
// }
// if (empty($_SESSION["symbols"])) {
//     $_SESSION["symbols"] = false;
// }
$permitted_chars = set_permitted_chars($_SESSION["letters"], $_SESSION["numbers"], $_SESSION["symbols"],);
$password = generate_password($_SESSION["strength"], $permitted_chars, $_SESSION["repetition"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password</title>
</head>

<body>
    <h2><?php echo $password ?></h2>
</body>

</html>