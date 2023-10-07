<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URLS</title>
</head>
<body>
    <form action="urls.php" method="get">
        Name: <input type="text" name="name" />
        <input type="submit" value="Submit">
    </form>

    <p>Your name is <?php echo $_GET["name"] ?>. You're <?php echo $_GET["age"] ?>, right?</p>
    <!-- url?name=value&...&name=value -->
    <!-- post does not display information in the URL parameter -->
</body>
</html>