<?php
include_once 'header.php';

include_once 'config.php';
if(isset($_POST['save'])){
    $adminName = mysqli_real_escape_string($conn, $_POST['adminName']);
    $adminUsername = mysqli_real_escape_string($conn, $_POST['adminUsername']);
    $adminPass = mysqli_real_escape_string($conn, md5($_POST['adminPass']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $sql = "INSERT INTO admin(adminName, adminUsername, adminPass, role) values('{$adminName}','{$adminUsername}', '{$adminPass}', '{$role}')";
    if(mysqli_query($conn, $sql)){
        header("location:$location/admin.php");
    }else{
        echo "Query Failed";
    }
}
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <h5 class="admin-heading text-center">ADD A NEW ADMIN</h5>
        </div>
        <div class="row">
            <div class="offset-4 col-md-4">

                <!-- Form -->
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST"  class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="adminName">Full Name</label>
                        <input type="text" name="adminName" class="form-control" placeholder="Enter Your Name" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="adminUserName">Username</label>
                        <input type="text" name="adminUsername" class="form-control" placeholder="Enter Username" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="adminPass">Password</label>
                        <input type="password" name="adminPass" class="form-control" placeholder="Enter Strong Password" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="role" class="form-control" value="1" hidden>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Submit" name="save" class="btn btn-success">
                    </div>
                </form>
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