<?php
session_start();
$_SESSION['itemName'] = $_POST['optradio'];
$itemName = $_SESSION['itemName'];
$amt = filter_var($_SESSION['itemName'], FILTER_SANITIZE_NUMBER_INT);
$gst = ($amt*(18/100));
include_once "header.php";
?>

<div id="payment-process">
    <div class="container">
        <div class="row" id="order-summary">
            <h5>Order Summary</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Item</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td><?php echo $itemName ?></td>
                        <td><?php echo $amt ?> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>