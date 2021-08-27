<?php
include_once 'header.php';

include_once 'config.php';

$id = $_GET['id'];

// Update Admin Detail
if(isset($_POST['save'])){
    $uadminName = mysqli_real_escape_string($conn, $_POST['adminName']);
    $uadminUsername = mysqli_real_escape_string($conn, $_POST['adminUsername']);
    $uadminPass = mysqli_real_escape_string($conn, md5($_POST['adminPass']));
    $sql1 = "UPDATE admin SET adminName='{$uadminName}', adminUsername='{$uadminUsername}', adminPass='{$uadminPass}' WHERE adminId='{$id}'";
    if(mysqli_query($conn, $sql1)){
        header("location:$location/admin.php");
    }else{
        echo "Query Failed";
    }
}

?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <h5 class="admin-heading text-center">UPDATE ADMIN</h5>
        </div>
        <div class="row">
            <div class="offset-4 col-md-4">
                <?php 
                    $sql2 = "SELECT adminId, adminName, adminUsername, adminPass FROM admin WHERE adminId = '{$id}'";
                    $result = mysqli_query($conn, $sql2);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                <!-- Form -->
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"  class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="adminName">Full Name</label>
                        <input type="text" name="adminName" class="form-control" value="<?php echo $row['adminName']?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="adminUserName">Username</label>
                        <input type="text" name="adminUsername" class="form-control" value="<?php echo $row['adminUsername']?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="adminPass">Password</label>
                        <input type="password" name="adminPass" class="form-control" value="<?php echo $row['adminPass']?>" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="role" class="form-control" value="1" hidden>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit" name="save" class="btn btn-success">
                    </div>
                </form>
                <?php 
                        }
                    }
                 ?>
                <!--/Form -->
            </div>
        </div>
    </div>
</div>
<?php
include_once 'footer.php';
?>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>