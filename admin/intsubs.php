<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">International Subscribers</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <?php
                include_once "config.php";
                $sql = "SELECT sId, sName, sCompany, spName, spPrice, country, swPhone, sPhone, sEmail, sAdd, sCity, sCountry, sRem, date FROM intsub ORDER BY sId DESC";
                $result = mysqli_query($conn, $sql) or die("Query Failed");
                if (mysqli_num_rows($result) > 0) {
                ?>
                <table class="table table-striped table-responsive">
                    <thead class="bg-dark text-white">
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Country</th>
                        <th>W Phone</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Agree</th>
                        <th>Date</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                    <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <tr>
                            <td><?php echo $row['sId']; ?></td>
                            <td><?php echo $row['sName']; ?></td>
                            <td><?php echo $row['sCompany']; ?></td>
                            <td><?php echo $row['spName']; ?></td>
                            <td><?php echo "$ ".$row['spPrice']; ?></td>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['swPhone']; ?></td>
                            <td><?php echo $row['sPhone']; ?></td>
                            <td><?php echo $row['sEmail']; ?></td>
                            <td><?php echo $row['sAdd']; ?></td>
                            <td><?php echo $row['sCity']; ?></td>
                            <td><?php echo $row['sCountry']; ?></td>
                            <td><?php echo $row['sRem']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td class='delete'><a href='delete-intsubs.php?id=<?php echo $row["sId"]; ?>'><i class='fa fa-trash'></i></a></td>
                        </tr>
                        <?php 
                        }; ?>
                    </tbody>
                </table>
                <?php 
                }else{
                    echo "<p style='color:red; font-size: 24px; text-align:center;'>No Record Found</p>";
                } ; ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>