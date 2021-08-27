<div class="col-md-4" id="blog-sidebar">
    <div class="search-post-container">
        <h4>SEARCH</h4>
        <form class="search-post" action="search.php" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search blog..." required>
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-success">Search</button>
                </span>
            </div>
        </form>
    </div>
    <div class="recent-post-container mt-4">
        <h4>RECENT POSTS</h4>
        <div class="recent-post">

            <?php
            include_once "config.php";
            $sql = "SELECT * FROM blogs LEFT JOIN category ON blogs.blogCategory = category.cId ORDER BY blogId DESC LIMIT 10";
            // die($sql);
            $result = mysqli_query($conn, $sql) or die("Query Failed");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="blog-content">
                        <h5 class="blog-heading"><?php echo $row['blogTitle'] ?></h5>
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
                        <p><?php echo substr($row['blogDesc'], 0, 40) . "..."; ?><button class="blog-btn btn-success btn" data-toggle="modal" data-target="#moreBlog9">read more</button></p>
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
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
            <?php
                }
            }; 
        ?>
        </div>
    </div>
</div>