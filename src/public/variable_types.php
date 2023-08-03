<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Variable Types Exercises</title>
</head>
<body>
<a href="./index.php">home</a>
<?php
echo "<h2>Task 1: Store your first name in a variable, then display its value (echo) in a &lt;p&gt; html tag so that the screen shows:</h2>";
$firstName = "John";
echo "<p>&lt;p&gt;Hi! My name is ______.&lt;/p&gt;</p>";
echo "<p>Hi! My name is $firstName.</p>";

echo "<h2>Task 2: Add another variable to contain your age, then display it in a second &lt;p&gt; tag :</h2>";
$age = 30;
echo "<p>&lt;p&gt;I am ____ years old.&lt;/p&gt;</p>";
echo "<p>I am $age years old.</p>";

echo "<h2>Task 3: Add yet another variable that describes the colour of your eyes, then display it in another &lt;p&gt; tag :</h2>";
$eyeColor = "blue";
echo "<p>&lt;p&gt;My eyes are ____&lt;/p&gt;</p>";
echo "<p>My eyes are $eyeColor.</p>";

echo "<h2>Task 4: Add yet another variable that contains the name of all the people in your family. What type of variable would you use for that ? Display the value stored at the first index in another &lt;p&gt; tag :</h2>";
$familyNames = array("John", "Jane", "Alice", "Bob");
echo "<p>&lt;p&gt;The first person in my family is ____&lt;/p&gt;</p>";
echo "<p>The first person in my family is $familyNames[0].</p>";

echo "<h2>Task 5: What type of variable would you use to store the information whether you are hungry or not ?</h2>";
$hungry = true;
echo "<p>&lt;p&gt;I am hungry.&lt;/p&gt;</p>";
if ($hungry) {
    echo "<p>I am hungry.</p>";
} else {
    echo "<p>I am not hungry.</p>";
}
?>

</body>
</html>
