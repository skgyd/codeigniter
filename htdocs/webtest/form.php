<?php
file_put_contents("C:\Bitnami\wampstack-8.0.6-0\apache2\htdocs\webtest/".$_POST['title'],$_POST['description']);
header('Location: /webtest/result.php?id='.$_POST['title']);
echo "Title: ".$_POST['title'];
echo "<br>";
echo "Description: ".$_POST['description'];
?>