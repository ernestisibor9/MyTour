<?php

require_once("./includes/db.php");

    $my_id = $_GET['delete'];

    $query = "DELETE FROM categories WHERE category_id=$my_id";
    $result = mysqli_query($connection, $query);

    if($result){
        header("Location: categories.php");
    }
    if(!$result){
        echo "Failed to delete";
    }




?>