<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Blogs</h1>
            </div>
            <div class="col-md-2">
                <a href="add-blog.php" class="add-new">Add Blog</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                include_once "config.php";
                $sql = "SELECT * FROM blogs
                    LEFT JOIN category ON blogs.blogCategory = category.cId
                    ORDER BY blogId DESC";
                // die($sql);
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-striped table-md-responsive">
                        <thead class="bg-dark text-white">
                            <th>S.No.</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="id"><?php echo $row['blogId']; ?></td>
                                    <td><?php echo $row['blogTitle']; ?></td>
                                    <td><?php echo $row['cName']; ?></td>
                                    <td><?php echo $row['blogDate']; ?></td>
                                    <td class='edit'><a href="update-blog.php?bId=<?php echo $row['blogId']; ?>"><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href="delete-blog.php?bId=<?php echo $row['blogId']; ?>"><i class='fa fa-trash'></i></a></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                <?php
                } else {
                    echo "<p style='color:red; font-size: 24px; text-align:center;'>No Record Found</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>