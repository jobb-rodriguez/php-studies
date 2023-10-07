<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including HTML</title>
</head>
<body>
    <?php include "./html/header.html" ?>
    <?php 
        $title = "Harry Potter";
        $author = "J.K. Rowling";
        $wordCount = 50348;

        include "php-templates/article-header.php";
        include "php-tools/computations.php";
    ?>
    <p>The square of 27 is <?php echo square(27) ?>.</p>
    <?php include "./html/footer.html" ?>
</body>
</html>