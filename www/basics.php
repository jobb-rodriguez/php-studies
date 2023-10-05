<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Site</title>
</head>
<body>
    <?php
        $characterName = "John";
        $characterQuote = "Do one thing every day that scares you.";
        $characterAge = 22;
        $characterGPA = 3.7;
        $characterIsMale = true;

        echo("<h1>Hello, $characterName!</h1>");
        echo("<hr>");
        echo("<p>You're actually $characterAge years old?!</p>");
    ?>

    <?php
        // strtolower(), strtoupper(), strlen(), var[index], replace(to_replace, replace_with, var), substry(var, begin, count)
        echo $characterQuote;
    ?>

    <?php
        // pow(base, pow), sqrt(), min(), max(), round(), ceil(), floor()
    ?>
    <form action="basics.php" method="get">
        Name: <input type="text" name="name" />
        <input type="submit" value="Submit">
    </form>

    <p>Your name is <?php echo $_GET["name"] ?></p>
</body>
</html>