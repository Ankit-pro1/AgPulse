<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Users</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                    include_once "config.php";
                    $sql = "SELECT userId, userName, userEmail, countryCode, userNumber, userProducts, userArrive FROM users ORDER BY userId DESC";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                ?>
                <table class="table table-striped table-md-responsive">
                    <thead class="bg-dark text-white">
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Country</th>
                        <th>Mobile No.</th>
                        <th>Products</th>
                        <th>Section</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                         ?>
                        <tr>
                            <td class="id"><?php echo $row['userId'] ; ?></td>
                            <td><?php echo $row['userName'] ; ?></td>
                            <td><?php echo $row['userEmail'] ; ?></td>
                            <td><?php echo $row['countryCode'] ; ?></td>
                            <td><?php echo $row['userNumber'] ; ?></td>
                            <td style="text-transform:capitalize;"><?php echo $row['userProducts'] ; ?></td>
                            <td><?php echo $row['userArrive'] ; ?></td>
                            <td class='delete'><a href='delete-users.php?id=<?php echo $row["userId"];?>'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <?php 
                            }
                         ?>
                    </tbody>
                </table>
                <?php
                    }else{
                        echo "<p style='color:red; font-size: 24px; text-align:center;'>No Record Found</p>";
                    }
                  ?>
              <!-- Export Button -->
              <a href="exportusers.php" class="btn btn-danger">Export to Excel</a>
            </div>
        </div>
    </div>
</div>
<?php 
    include_once 'footer.php';
?>