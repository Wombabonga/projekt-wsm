<?php 

include 'backheader.php';
include 'backeditutil.php'; 

//Produkte editiren
$type = $_GET['type'];
$opt = $_GET['opt'];

if(isset($_GET['id']))
    $id = $_GET['id'];


if($type == 1){
    
    switch ($opt){
        case 'edit': editProduct($id); break;
        case 'rm': removeProduct($id); break;
        case 'add': addProduct(); break;
    }
    
    
}else if($type == 2){
    showKunde($id);
}

?>