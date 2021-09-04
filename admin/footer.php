<?php
    session_start();
    include_once('config.php');
    if(!isset($_SESSION['admin_name'])){
        header("location:$location/index.php");
    }
?>
<!-- Footer -->
<div id="footer">
    <div class="container">
        <div class="row justify-content-center">
                <p class="m-0 ">Copyright &copy; 2020 - 2021 <a href="#" class="text-light">AgPulse Analytica</a></p>
        </div>
    </div>
</div>
<!-- /Footer -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-------------------------- Tiny MCE ------------------------->
<script src="tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script src="tinymce/js/tinymce/init-tinymce.js"></script>

</body>

</html>