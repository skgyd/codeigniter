<?php require('lib/print.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            print_title();
            ?>
        </title>
    </head>
    <body>
        <h1><a href="CRUD.php">WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>
        </ol>
        <a href="create.php">Create</a>
        <form action="create_process.php" method="POST">
            <p>
                <input type="text" name="title" placeholder="Title">
            </p>
            <p>
                <textarea name="description" placeholder="Description"></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </body>
</html>