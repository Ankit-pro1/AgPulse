<?php 
    include_once "config.php";
    $sql = "SELECT gId, gName, gCompany, gEmail, gPhone, gReq, date FROM gusers ORDER BY gId DESC";
    $result = mysqli_query($conn, $sql);
    $html = '<table style="border:1px solid black;"><thead><th>S.No.</th><th>Name</th><th>Company</th><th>Email</th><th>Number</th><th>Requirement</th></thead>';
    while($row = mysqli_fetch_assoc($result)){
        $html.='<tr><td>'.$row['gId'].'</td><td>'.$row['gName'].'</td><td>'.$row['gCompany'].'</td><td>'.$row['gEmail'].'</td><td>'.$row['gPhone'].'</td><td>'.$row['gReq'].'</td></tr>';
    }
    $html.='</table>';

    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=AgPulse-GitUsers.xls');
    echo $html;
?>