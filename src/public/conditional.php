<!DOCTYPE html>
<html>
<head>
    <title>Conditional</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <a href="./index.php">home</a>
    <?php
        echo '<h2>
        Change the condition so that it becomes: "if the temperature is greater or equal to 15 degrees".
        </h2>';
        ECHO '<p> Look at the code</p> ';
        $temperature = 18;

        if ($temperature >= 15) {
            // code to execute if the condition results TRUE
            $clothes = "T-shirt";
            $should_i_wear_a_scarf = false;
        } else {
            // code to execute if the condition results FALSE
            $clothes = "Pull-over";
            $should_i_wear_a_scarf = true;
        }

        if ($should_i_wear_a_scarf == true) {
            // this is a "fake" function for the sake of the example
            // that function is only executed if the condition is true
            function grab_scarf_from_door_hanger()
            {
                echo "Grabbing scarf from door hanger...";
            }

            grab_scarf_from_door_hanger();
        }

        // The following function will be executed every time,
        // but its $clothes argument changes according to the result
        // of our previous conditional structure
        function cover_my_chest_with($clothes)
        {
            echo "<p>Covering my chest with " . $clothes . ".</p>";
        }

        cover_my_chest_with($clothes);
    ?>
</body>
</html>
