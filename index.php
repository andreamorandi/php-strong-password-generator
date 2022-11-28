<?php
session_start();
$strength = $_GET["strength"] ?? "";
if (!empty($strength)) {
    $_SESSION["strength"] = $strength;
    $_SESSION["repetition"] = $_GET["repetition"];
    $_SESSION["letters"] = $_GET["letters"] ?? false;
    $_SESSION["numbers"] = $_GET["numbers"] ?? false;
    $_SESSION["symbols"] = $_GET["symbols"] ?? false;
    header("Location: ./password.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <main>
        <form action="index.php" method="GET">
            <div>
                <label for="strength">Lunghezza password</label>
                <input type="text" id="strength" name="strength">
            </div>

            <div>
                <input type="radio" id="rep_true" name="repetition" value=true checked>
                <label for="rep_true">Consenti ripetizioni</label><br>
                <input type="radio" id="rep_false" name="repetition" value=false>
                <label for="rep_false">Non consentire ripetizioni</label><br>
            </div>

            <div>
                <input type="checkbox" id="letters" name="letters" value="true">
                <label for="letters"> Lettere</label><br>
                <input type="checkbox" id="numbers" name="numbers" value="true">
                <label for="numbers"> Numeri</label><br>
                <input type="checkbox" id="symbols" name="symbols" value="true">
                <label for="symbols"> Simboli</label><br>
            </div>

            <div>
                <button type="submit">Genera</button>
                <button type="reset">Annulla</button>
            </div>
        </form>
    </main>
</body>

</html>