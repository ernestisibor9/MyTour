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
                <div class="col-md-12">
                    <h1>Welcome to Admin Author</h1>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Comments</th>
                        <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php

                        $query = "SELECT * FROM posts";
                        $result_nav = mysqli_query($connection, $query);

                        while($row = mysqli_fetch_assoc($result_nav)){
                            $post_id = $row['post_id'];
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_category_id = $row['post_category_id'];
                            $post_status = $row['post_status'];
                            
                            $post_image = $row['post_image'];
                            $post_tags = $row['post_tags'];
                            $post_comment_count = $row['post_comment_count'];
                            $post_date = $row['post_date'];

                    ?>

                        <tr>
                        <th scope="row"><?php echo $post_id;   ?></th>
                        <td><?php echo $post_id;   ?></td>
                        <td><?php echo $post_title;   ?></td>
                        <td><?php echo $post_author;   ?></td>
                        <td><?php echo $post_category_id;   ?></td>
                        <td><?php echo $post_status;   ?></td>
                        <td>Image</td>
                        <td><?php echo $post_tags;   ?></td>
                        <td><?php echo $post_comment_count;   ?></td>
                        <td><?php echo $post_date;   ?></td>
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
