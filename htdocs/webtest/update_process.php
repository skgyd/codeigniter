<?php
rename('C:\Bitnami\wampstack-8.0.6-0\apache2\htdocs\webtest/'.$_POST['old_title'],'C:\Bitnami\wampstack-8.0.6-0\apache2\htdocs\webtest/'.$_POST['title']);
file_put_contents('C:\Bitnami\wampstack-8.0.6-0\apache2\htdocs\webtest/'.$_POST['title'],$_POST['description']);
header('Location: /webtest/CRUD.php?id='.$_POST['title']);