<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($width, $height) {
            return $width * $height;
        }

        // Example values for width and height
        $width = 4;
        $height = 2;

        // Call the function and store the result
        $area = calculateArea($width, $height);
    ?>

    <p>
        <?php 
            echo "The area of a rectangle with a width of $width and $height is $area."; 
        ?>
    </p>
</body>
</html>
