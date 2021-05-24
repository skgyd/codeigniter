<?php
unlink('C:\Bitnami\wampstack-8.0.6-0\apache2\htdocs\webtest/'.$_POST['id']);
header('Location: /webtest/CRUD.php');