<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Loops</title>
</head>
<body>
    <a href="./index.php">home</a>

    <?php
    $pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');
    foreach ($pronouns as $pronoun) {
        if ($pronoun === 'He/She') {
            echo $pronoun . " codes </br>";
        } else {
            echo $pronoun . " code </br>";
        }
    }
    ?>

    </br>
    </br>

    <?php   
    $number = 1;
    while ($number <= 120) {
        echo $number . " ";
        $number++;
    }

    ?>

    </br>
    </br>


    <?php
    for ($x = 0; $x <= 120; $x++) {
        echo $x . " ";
    }
    ?>

    </br>
    </br>


    <?php
    $nameOfPeoples = array ('Abdoulaye','Adeline','Camille','Cédric','Clara','Jason','Manon','Nathan','Pietro','Sam','Youssef');
    foreach ($nameOfPeoples as $nameOfPeople) {
        echo $nameOfPeople . " ";
    }
    ?>

    </br>
    </br>

    <?php
// Create an associative array of countries with ISO codes as keys and country names as values
$countries = array(
    'US' => 'United States',
    'CA' => 'Canada',
    'GB' => 'United Kingdom',
    'FR' => 'France',
    'DE' => 'Germany',
    'JP' => 'Japan',
    'AU' => 'Australia',
    'BR' => 'Brazil',
    'IN' => 'India',
    'CN' => 'China'
);

$selectHtml = '<select name="country">';
foreach ($countries as $iso => $country) {
    $selectHtml .= '<option value="' . $iso . '">' . $country . '</option>';
}
$selectHtml .= '</select>';

echo '<form>';
echo $selectHtml;
echo '<input type="submit" value="Submit">';
echo '</form>';
?>




</body>
</html>