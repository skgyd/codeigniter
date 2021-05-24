<?php
require('lib/print.php');
?>


<?php
require('view/top.php');
?>

        <a href="create.php">Create</a>
        <?php if(isset($_GET['id'])){   ?>
            <a href="update.php?id=<?=$_GET['id']?>">Update</a>
        <?php } ?>
        
        <form action="update_process.php" method="POST">
            <input type ="hidden" name="old_title" value="<?=$_GET['id']?>">
            <p>
                <input type="text" name="title" value="<?php print_title(); ?>">
            </p>
            <p>
                <textarea name="description"><?php print_description(); ?></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>

        <h2>
            <?php print_title();    ?>
        </h2>
        <?php print_description();  ?>
        
    </body>
</html>