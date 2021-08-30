<?php 
    include_once "config.php";
    $sql = "SELECT userId, userName, userEmail, countryCode, userNumber, userProducts, userArrive FROM users ORDER BY userId DESC";
    $result = mysqli_query($conn, $sql);
    $html = '<table><thead><th>S.No.</th><th>Name</th><th>Email</th><th>Country</th><th>Mobile No.</th><th>Products</th><th>Section</th></thead>';
    while($row = mysqli_fetch_assoc($result)){
        $html.='<tr><td>'.$row['userId'].'</td><td>'.$row['userName'].'</td><td>'.$row['userEmail'].'</td><td>'.$row['countryCode'].'</td><td>'.$row['userNumber'].'</td><td>'.$row['userProducts'].'</td><td>'.$row['userArrive'].'</td></tr>';
    }
    $html.='</table>';

    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=AgPulse-Users.xls');
    echo $html;
?>