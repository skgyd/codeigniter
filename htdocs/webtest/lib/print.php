<?php
function print_title(){
    if(isset($_GET['id'])){
        echo htmlspecialchars($_GET['id']);
    }else{
        echo "Welcome";
    }
}
function print_description(){
    if(isset($_GET['id'])){
        echo basename(htmlspecialchars(file_get_contents("C:\Bitnami\wampstack-8.0.6-0\apache2\htdocs\webtest/".$_GET['id'])));
    } else{
        echo "hello";
    }
}
function print_list(){
    $list = scandir('C:\Bitnami\wampstack-8.0.6-0\apache2\htdocs\webtest');
    
    $i = 0;
    while($i<count($list)){
        $title = htmlspecialchars($list[$i]);
        if($list[$i] != '.'){
            if($list[$i] != '..'){
                if($list[$i] != 'CRUD.php'){
                echo "<li><a href=\"CRUD.php?id=$title\">$title</a></li>\n";
                }
            } 
        }
        $i = $i+1;
    }
}