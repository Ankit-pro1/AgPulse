<?php
    include_once "header.php";
    if (isset($_POST['save'])) {
        include_once 'config.php';
        $cName = mysqli_real_escape_string($conn, $_POST['cName']);
        $sql1 = "SELECT cName FROM category WHERE cName = '{$cName}'";
        $result = mysqli_query($conn, $sql1) or die("Query Failed: Category");
        if(mysqli_num_rows($result) > 0){
            echo '<p>Category already exist</p>';
        }else{
            $sql2 = "INSERT INTO category(cName) values('{$cName}')";
            if(mysqli_query($conn, $sql2)){
                header("location:$location/category.php");
            }
        }
}
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add New Category</h1>
            </div>
            <div class="offset-3 col-md-6">
                <!-- Form Start -->
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="cName" class="form-control" placeholder="Category Name" required>
                    </div>
                    <input type="submit" name="save" class="btn btn-success" value="Save" required />
                </form>
                <!-- /Form End -->
            </div>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>