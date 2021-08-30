<?php
include_once 'header.php';
?>
<div id="admin-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">India Payment</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                include_once "config.php";
                $sql = "SELECT sId, orderId, paymentId, status, pDate, sName,swPhone, sEmail, spName, spPrice FROM indpay ORDER BY sId DESC";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table table-striped table-responsive">
                        <thead class="bg-dark text-white">
                            <th>S.No.</th>
                            <th>Order Id</th>
                            <th>Transaction Id</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Product</th>
                            <th>Amount</th>                            
                            <th>Delete</th>                            
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['sId']; ?></td>
                                    <td><?php echo $row['orderId']; ?></td>
                                    <td><?php echo $row['paymentId']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['pDate']; ?></td>
                                    <td><?php echo $row['sName']; ?></td>
                                    <td><?php echo $row['swPhone']; ?></td>
                                    <td><?php echo $row['sEmail']; ?></td>
                                    <td><?php echo $row['spName']; ?></td>
                                    <td><?php echo "Rs. ".$row['spPrice']; ?></td>
                                    <td class='delete'><a href='delete-indpayment.php?id=<?php echo $row["sId"]; ?>'><i class='fa fa-trash'></i></a></td>
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