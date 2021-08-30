<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">Indian Subscribers</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                include_once "config.php";
                $sql = "SELECT sId, sName, sCompany, spName, spPrice, swPhone, sPhone, sEmail, sGst, sAdd, sCity, sState, sPin, sRem, sdate FROM indsub ORDER BY sId DESC";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-striped table-responsive">
                        <thead class="bg-dark text-white">
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>W Phone</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>GST</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Pin</th>
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
                                    <td><?php echo "Rs. ".$row['spPrice']; ?></td>
                                    <td><?php echo $row['swPhone']; ?></td>
                                    <td><?php echo $row['sPhone']; ?></td>
                                    <td><?php echo $row['sEmail']; ?></td>
                                    <td><?php echo $row['sGst']; ?></td>
                                    <td><?php echo $row['sAdd']; ?></td>
                                    <td><?php echo $row['sCity']; ?></td>
                                    <td><?php echo $row['sState']; ?></td>
                                    <td><?php echo $row['sPin']; ?></td>
                                    <td><?php echo $row['sRem']; ?></td>
                                    <td><?php echo $row['sdate']; ?></td>
                                    <td class='delete'><a href='delete-indsubs.php?id=<?php echo $row["sId"]; ?>'><i class='fa fa-trash'></i></a></td>
                                </tr>
                            <?php
                            }; ?>
                        </tbody>
                    </table>
                <?php
                } else {
                    echo "<p style='color:red; font-size: 24px; text-align:center;'>No Record Found</p>";
                }; ?>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>