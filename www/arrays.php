<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $friends = array("John", "Jim", "Dwight");
        echo $friends[0];
        $friends[1] = 2350;
        echo $friends[1];
        echo count($friends);
    ?>
    <!-- checkboxes: name="fruits[]" -->
    <br />
    <form action="arrays.php" method="post">
        Student: <input type="text" name="student" />
        <input type="submit" value="Submit">
    </form>
    <?php
        $grades = array("John"=>"A+", "Jim"=>"B-", "Dwight"=>"A");
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>