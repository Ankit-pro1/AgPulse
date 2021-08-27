<?php
include_once 'header.php';
$search = $_GET['search'];
?>

<!-------------------- Pulse Blog ------------------>
<div id="blog-page">
    <div class="container-fluid">
        <div class="row d-block">
            <h2 class="heading-title"><?php echo "<span style='color:yellow;'>Your Search -</span> ". $search ; ?> </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-container">
                    <!-- First Blog -->
                    <?php
                    include_once "config.php";

                    $sql = "SELECT * FROM blogs
                            LEFT JOIN category ON blogs.blogCategory = category.cId
                            WHERE blogs.blogTitle LIKE '%{$search}%' OR blogs.blogDesc LIKE '%{$search}%' ORDER BY blogId DESC";
                    // die($sql);
                    $result = mysqli_query($conn, $sql) or die("Query Failed");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <div class="blog-content">
                                <h3 class="blog-heading"><?php echo $row['blogTitle'] ?></h3>
                                <div class="blog-information">
                                    <span>
                                        <i class="far fa-user"></i>
                                        <span>Admin</span>
                                    </span>
                                    <span>
                                        <i class="far fa-calendar-alt"></i>
                                        <span><?php echo $row['blogDate'] ?></span>
                                    </span>
                                </div>
                                <p><?php echo substr($row['blogDesc'], 0, 150) . "..."; ?><button class="blog-btn btn-success btn" data-toggle="modal" data-target="#moreBlog9">read more</button></p>
                                <!-- More Blog Modal Pop Up -->
                                <div id="moreBlog9" class="modal" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title"><?php echo $row['blogTitle'] ?></h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="blog-information">
                                                    <span>
                                                        <i class="far fa-user"></i>
                                                        <span>Admin</span>
                                                    </span>
                                                    <span>
                                                        <i class="far fa-calendar-alt"></i>
                                                        <span><?php echo $row['blogDate'] ?></span>
                                                    </span>
                                                </div>
                                                <p>
                                                    <?php echo $row['blogDesc']; ?>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default btn-dark" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                    <?php
                        }
                    }else{
                        echo "<p style='color: red; font-size: 24px'>OOPs.! Your search not found</p>";
                    };
                    ?>
                </div>
            </div>
            <!-- Include blog-sidebar.php -->
            <?php
            include_once 'blog-sidebar.php';
            ?>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>
<!-------------------- Pulse Blog Ends ------------------>