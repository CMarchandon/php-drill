<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Function</title>
</head>
<body>

<?php
$str = 'This is going to be shuffled !';
$str = str_shuffle($str);
 
echo $str;
echo "<p> Ok, this is funny </p>";

$strWords = 'This is going to be shuffled !';
$strWords = explode(" ", $strWords);

foreach ($strWords as $word){
    echo str_shuffle($word) . " ";
}

?>
    
</body>
</html>