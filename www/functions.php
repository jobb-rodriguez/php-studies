<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        function sayHi($name){
            echo "Hello there, $name!";
        }
        sayHi("Antonio");
    ?><br />
    <?php
        function cube($base) {
            return $base * $base * $base;
        }
        echo cube(3);
    ?>
</body>
</html>