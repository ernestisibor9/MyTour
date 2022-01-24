<?php
    require_once("./includes/db.php");
?>

<?php
// Head
require_once("includes/head.php");
?>

<div class="wrapper">

  <?php
  // Header
  require_once("includes/header.php");
  ?>

  <?php
  // Sidebar
  require_once("includes/left_sidebar.php");
  ?>

  <div class="content-wrapper">

    <section class="content">
        <div class="container" style="background-color: #fff;;">
            <div class="row">
                <div class="col-md-5">
                <?php
                if(isset($_POST['add_category'])){
                    $category_title = $_POST['category_title'];
                   // echo $category_title;
                   if(empty($category_title)){
                       echo "Field cannot be empty";
                   }
                   else{
                    $query = "INSERT INTO categories(category_title)";
                    $query .= "VALUE('$category_title')";

                    $result_cat = mysqli_query($connection, $query);
                        if(!$result_cat){
                            die('QUERY FAILED'. mysqli_error($connection));
                        }
                        else{
                            echo "successfully added";
                        }
                }
                }
                ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputCategoryTitle" class="form-label">Add Category</label>
                            <input type="text" class="form-control" name = 'category_title' id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div><br>
                        <div class="mt-3">
                            <button type="submit" name="add_category" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Category ID</th>
                        <th scope="col">Category Title</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                    $query = "SELECT * FROM categories";
                    $result_nav = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result_nav)){
                        $category_id = $row['category_id'];
                        $category_title = $row['category_title'];

                    ?>


                        <tr>
                        <th scope="row"><?php echo  $category_id;   ?></th>
                        <td><?php echo  $category_title;   ?></td>
                        <td><a href="edit_category.php?edit= <?php echo $category_id;  ?>"><button class="btn btn-primary">Edit</button></a></td>
                        <td><a href="delete_category.php?delete= <?php echo $category_id;  ?>"><button class="btn btn-danger">Delete</button></a></td>
                        </tr>
                        <tr>
                            <?php
                             }
                            ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
  
    </div>
      <?php
        // Footer
        require_once("includes/footer.php");
      ?>

    <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
