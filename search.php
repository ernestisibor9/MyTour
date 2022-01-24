
<!---Database connection-->
<?php
    include_once("includes/db.php");
?>

<!---Head--->
<?php
    require_once("includes/header.php");
?>
<!--End of Head--->

<!--Navigation-->
<?php
    require_once("includes/navigation.php");
?>
<!--End of Navigation  --->

<div class="container">
    <div class="row">
    <div class="col-md-8">
        <h2>SEARCH RESULT</h2>
        <?php
        if(isset($_POST['submit'])){
            $search = $_POST['search'];
            $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
            $result_search = mysqli_query($connection, $query);

            if(!$result_search){
                die("QUERY FAILED" . mysqli_error($connection));
            }

            $count = mysqli_num_rows($result_search);
            if($count == 0){
                echo "<h1>No result</h1>";
            }
            else{
                echo "<h1>Somebody is available</h1>";
                ?>
        <?php
            $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
            $result_post = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($result_post)){
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                

                ?>
                    <h5>Title : <?php  echo $post_title . "<br>"; ?></h5>
                    <h5>Author : <?php  echo $post_author . "<br>"; ?></h5>
                    <h5>Post Date : <?php  echo $post_date . "<br>"; ?></h5>
                    <h5>Content : <?php  echo $post_content . "<br>"; ?></h5>
                    <?php echo "<hr>" ?>
        <?php
            }
        ?>

            <?php
            }



            
        }
        ?>

        <h1></h1>
    </div>

    </div>
</div>

<!---Footer--->
<?php
    require_once("includes/footer.php");
?>
<!---End of Footer-->