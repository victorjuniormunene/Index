<?php
require "dbconnect.php";
$name_of_student=$_REQUEST['name_of_student'];
$admission_number=$_REQUEST['admission_number'];
$title_of_book=$_REQUEST['title_of_book'];
$author=$_REQUEST['author'];
$category=$_REQUEST['category'];
$isbn=$_REQUEST['isbn'];
$sql="insert into staff values('$name_of_student','$admission_number','$title_of_book','$author','$category','$isbn')";
if($conn->query($sql)===true){
    echo"records inserted";
}else{
    echo"error";
}
?>