<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Get in touch users</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                    include_once "config.php";
                    $sql = "SELECT gId, gName, gCompany, gEmail, gPhone, gReq, date FROM gusers ORDER BY gId DESC";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                ?>
                <table class="table table-striped table-md-responsive">
                    <thead class="bg-dark text-white">
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Requirement</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php
                            while($row = mysqli_fetch_assoc($result)){
                         ?>
                        <tr>
                            <td class="id"><?php echo $row['gId'] ; ?></td>
                            <td><?php echo $row['gName'] ; ?></td>
                            <td><?php echo $row['gCompany'] ; ?></td>
                            <td><?php echo $row['gEmail'] ; ?></td>
                            <td><?php echo $row['gPhone'] ; ?></td>
                            <td><?php echo $row['gReq'] ; ?></td>
                            <td><?php echo $row['date'] ; ?></td>
                            <td class='delete'><a href='delete-gusers.php?gid=<?php echo $row["gId"]; ?>'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <?php 
                        } ; ?>
                    </tbody>
                </table>
                <?php 
                            }
                ?>
                <!-- Export Table to Excel Button -->
                <a href="exportgusers.php" class="btn btn-danger">Export to Excel</a>
            </div>
        </div>
    </div>
</div>
<?php 
    include_once 'footer.php';
?>