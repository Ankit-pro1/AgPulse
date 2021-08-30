<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Admin</h1>
            </div>
            <div class="col-md-2">
                <a href="add-admin.php" class="add-new">Add Admin</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php
                    include_once "config.php";
                    $sql = "SELECT adminId, adminName, adminUsername FROM admin ORDER BY adminId DESC";
                    $result = mysqli_query($conn, $sql) or die($sql);
                    if(mysqli_num_rows($result) > 0){
                ?>
                <table class="table table-striped table-md-responsive">
                    <thead class="bg-dark text-white">
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php
                            while($row = mysqli_fetch_assoc($result)){
                         ?>
                        <tr>
                            <td class="id"><?php echo $row['adminId'] ; ?></td>
                            <td><?php echo $row['adminName'] ; ?></td>
                            <td><?php echo $row['adminUsername'] ; ?></td>
                            <td class='edit'><a href='update-admin.php?id=<?php echo $row['adminId'] ; ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-admin.php?id=<?php echo $row['adminId'] ; ?>'><i class='fa fa-trash'></i></a></td>
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
<?php 
    include_once 'footer.php';
?>