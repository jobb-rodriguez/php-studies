<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <?php
        class Book {
            public $title;
            private $author;
            private $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }

            function displayQuote() {
                echo "I solemnly swear I am up to no good.";
            }

            // use getters and setters
            // inheritance: class Child extends Parent {}
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 346);
        echo $book1->title;
    ?>
    <p><?php $book1->displayQuote(); ?></p>
</body>
</html>