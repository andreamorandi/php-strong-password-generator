<?php
session_start();
$strength = $_GET["strength"] ?? "";
$alert = false;
if (!empty($strength) && $strength >= 8 && $strength <= 35) {
    $_SESSION["strength"] = $strength;
    $_SESSION["repetition"] = $_GET["repetition"];
    $_SESSION["letters"] = $_GET["letters"] ?? false;
    $_SESSION["numbers"] = $_GET["numbers"] ?? false;
    $_SESSION["symbols"] = $_GET["symbols"] ?? false;
    header("Location: ./password.php");
} else if (isset($_GET["strength"])) {
    $alert = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <h1 class="text-center my-4">Strong Password Generator</h1>
        <h2 class="text-white text-center my-4">Genera una password sicura</h2>
    </header>
    <main>
        <div class="container">
            <?php
            if ($alert) {
                echo '
                        <div class="alert alert-info" role="alert">
                            Inserire lunghezza compresa tra 8 e 35 caratteri
                        </div>
                    ';
            }
            ?>
            <form action="index.php" method="GET">
                <div class="d-flex justify-content-between">
                    <label for="strength" class="form-label">Lunghezza password:</label>
                    <input type="text" id="strength" name="strength" class="form-control strength-input">
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                    <div class="form-check password-features">
                        <input type="radio" id="rep_true" name="repetition" value="true" checked class="form-check-input">
                        <label for="rep_true" class="form-label">Sì</label><br>
                        <input type="radio" id="rep_false" name="repetition" value="false" class="form-check-input">
                        <label for="rep_false" class="form-label">No</label><br>
                        <input type="checkbox" id="letters" name="letters" value="true" class="form-check-input">
                        <label for="letters" class="form-check-label"> Lettere</label><br>
                        <input type="checkbox" id="numbers" name="numbers" value="true" class="form-check-input">
                        <label for="numbers" class="form-check-label"> Numeri</label><br>
                        <input type="checkbox" id="symbols" name="symbols" value="true" class="form-check-input">
                        <label for="symbols" class="form-check-label"> Simboli</label><br>
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Genera</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>