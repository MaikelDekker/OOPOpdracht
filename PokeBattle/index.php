<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Poke Battle</title>
</head>
<body>
    <form method="post">
        <h3>Pikachu name:</h3>
        <input id="PikachuName" name="PikachuName" required>
        <h3>Charmeleon name:</h3>
        <input id="CharmeleonName" name="CharmeleonName" required>
        <input type="submit" id="submit"></button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'Pokemon.php';
    require 'Pikachu.php';
    require 'Charmeleon.php';
    require 'Attacks.php';
    require 'Resistance.php';
    require 'Weakness.php';
    $pikachu = new Pikachu($_POST['PikachuName']);
    print_r('<pre>'. $pikachu . '</pre>');
    $charmeleon = new Charmeleon($_POST['CharmeleonName']);
    print_r('<pre>'. $charmeleon . '</pre>');
    print_r('<pre>'. $charmeleon->name . ' Health: ' . $charmeleon->health . '</pre>');
    print_r('<pre>'. $pikachu->name . ' Health: ' . $pikachu->health . '</pre>');
    print_r('<pre>'. $pikachu->name . ' Attacks with Electric Ring</pre>');
    $pikachu->Attack($charmeleon, 'Electric Ring');
    print_r('<pre>'. $charmeleon->name . ' Health: ' . $charmeleon->health . '</pre>');
    print_r('<pre>'. $charmeleon->name . ' Attacks with Flare'. '</pre>');
    $charmeleon->Attack($pikachu, 'Flare');
    print_r('<pre>'. $pikachu->name . ' Health: ' . $pikachu->health . '</pre>');
}
?>