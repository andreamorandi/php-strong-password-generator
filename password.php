<?php
require_once __DIR__ . "/partials/functions.php";
require_once __DIR__ . "/partials/data.php";
session_start();
if (isset($_SESSION["strength"])) {
    $permitted_chars = set_permitted_chars($_SESSION["letters"], $_SESSION["numbers"], $_SESSION["symbols"],);
    $password = generate_password($_SESSION["strength"], $permitted_chars, $_SESSION["repetition"]);
    unset($_SESSION["strength"]);
} else {
    header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="alert alert-info password-alert" role="alert">
        <h2 class="text-black"><span class="mx-3">Password:</span> <?php echo $password ?></h2>
    </div>
</body>

</html>