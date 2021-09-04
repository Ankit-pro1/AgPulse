<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <h5 class="admin-heading text-center">ADD A NEW BLOG</h5>
        </div>
        <div class="row">
            <div class="offset-2 col-md-8">
                <!-- Form -->
                <form action="save-blog.php" method="POST">
                    <div class="form-group">
                        <label for="blogTitle">Title</label>
                        <input type="text" name="blogTitle" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea name="blogDesc" class="form-control mytinymce" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="blogCategory" class="form-control">
                        <option selected disabled>Select Category</option>
                        <?php
                            include_once "config.php";
                            $sql = "SELECT cId, cName, nBlogs FROM category";
                            $result = mysqli_query($conn, $sql);
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
                        <input type="date" name="blogDate" id="" class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </form>
                <!--/Form -->
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>