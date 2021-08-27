<?php
    include_once 'header.php';
    include_once 'config.php';
    $bid = $_GET['bId'];

    // Update Blog
    if(isset($_POST['save'])){
        $blogTitle = mysqli_real_escape_string($conn, $_POST['blogTitle']);
        $blogDesc = htmlspecialchars_decode($_POST['blogDesc']);
        $blogCategory = mysqli_real_escape_string($conn, $_POST['blogCategory']);
        $blogDate = mysqli_real_escape_string($conn, $_POST['blogDate']);
        $sql1 = "UPDATE blogs SET blogTitle='{$blogTitle}', blogDesc = '{$blogDesc}', blogCategory = '{$blogCategory}', blogDate = '{$blogDate}' WHERE blogId ='{$bid}'";
        if(mysqli_query($conn, $sql1)){
            header("location:$location/blog.php");
        }else{
            echo "Query Failed";
        }
}
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <h5 class="admin-heading text-center">Edit Blog</h5>
        </div>
        <div class="row">
            <div class="offset-2 col-md-8">
                <!-- Form -->
                <?php 
                    $sql2 = "SELECT blogId, blogTitle, blogDesc, blogCategory, blogDate FROM blogs WHERE blogId = '{$bid}'";
                    $result = mysqli_query($conn, $sql2);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="blogId"  class="form-control" value="<?php echo $row['blogId']?>">
                    </div>
                    <div class="form-group">
                        <label for="blogTitle">Title</label>
                        <input type="text" name="blogTitle" class="form-control" value="<?php echo $row['blogTitle']?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="blogDesc" class="form-control mytinymc" rows="5" valu>
                            <?php echo $row['blogDesc']?>
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="blogCategory" class="form-control">
                            <option selected disabled>Select Category</option>
                            <?php
                            $sql2 = "SELECT cId, cName, nBlogs FROM category";
                            $result = mysqli_query($conn, $sql2);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='{$row['cId']}'>{$row['cName']}</option>";
                                }
                            }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Date</label>
                        <input type="date" name="blogDate" class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit" name="save" class="btn btn-success">
                    </div>

                </form>
                <?php 
                }
             } ?>
                <!--/Form -->
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>