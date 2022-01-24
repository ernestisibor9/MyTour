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
                if(isset($_GET['edit'])){
                    $my_id = $_GET['edit'];
                    $query = "SELECT * FROM categories WHERE category_id = $my_id";
                    $result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        // print_r($row);
                        $id = $row['category_id'];
                        $category_title = $row['category_title'];
                        
                }
                //echo $category_title;
                }
                ?>
                    <form action="update_category.php?update=<?php echo $id; ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputCategoryTitle" class="form-label">Add Category</label>
                            <input type="text" class="form-control" name = 'category_title' value="<?php  echo  $category_title;  ?>">
                        </div><br>
                        <div class="mt-3">
                            <button type="submit" name="edit_category" class="btn btn-primary">Edit Category</button>
                        </div>
                    </form>
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
