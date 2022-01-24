<?php

require_once("./includes/db.php");
if(isset($_POST['edit_category'])){
    $my_id = $_GET['update'];

    $category_title =  mysqli_real_escape_string($connection, $_POST['category_title']);


    $query = "UPDATE categories SET category_title='$category_title' WHERE category_id=$my_id";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "Uploaded successfully";
        header("Location: categories.php");
    }
    if(!$result){
        echo "Fail to update";
    }
}



?>