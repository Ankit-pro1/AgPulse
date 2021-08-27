<?php include_once "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">
            <?php
                    include_once "config.php";
                    $sql = "SELECT cId, cName, nBlogs FROM category";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                ?>
                <table class="table table-striped table-md-responsive">
                    <thead class="bg-dark text-white">
                        <th>S.No.</th>
                        <th>Category Name</th>
                        <th>No. of Posts</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                          ?>
                        <tr>
                            <td class='id'><?php echo $row['cId'] ; ?> </td>
                            <td><?php echo $row['cName'] ; ?></td>
                            <td><?php echo $row['nBlogs'] ; ?> </td>
                            <td class='delete'><a href='delete-category.php?cId=<?php echo $row["cId"] ; ?>'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <?php 
                        } ; ?>
                    </tbody>
                </table>
                <?php 
                 }else{
                    echo "<p style='color:red; font-size: 24px; text-align:center;'>No Record Found</p>";
                 } ?>
            </div>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>
