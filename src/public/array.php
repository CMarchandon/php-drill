<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <a href="./index.php">home</a>

    <?php
    $family = array('Marie', 'André', 'Nathan', 'Pierre', 'Louise');
    echo '<pre>';
    print_r($family);
    echo '</pre>';
    echo '</br>';
    $recipes = array('Chicken nuggets','Noodles','Pizza','Potatoes');
    echo '<pre>';
    var_dump($recipes);
    echo '</pre>';
    echo '</br>';
    $films = array('Sucker Punch','Howl\'s Moving Castle','Dune','All Quiet on the Western Front');
    echo '<pre>';
    echo $films[0];
    echo '</pre>';
    echo '</br>';
    $me = array(
        'age'=> 22 ,
        'firstname' => 'Camille' ,
        'lastname'  => 'Marchandon' ,
        'favourite_movies' => array('Sucker Punch', 'Howls Moving Castel', 'All Quiet on the Western Front'),
        'hobbies' => array('travel','bingwatching','videogames')
    );
    $father = array(
        'age'=> 50 ,
        'firstname' => 'Martial' ,
        'lastname'  => 'Marchandon' ,
        'favourite_movies' => array('Dune', 'LOTR', '28 days later'),
        'hobbies' => array('roller','sports','videogames')
    );
    $me['father'] = $father;
    echo '<pre>';
    print_r($me);
    echo '</pre>';
?>

    
</body>
</html>