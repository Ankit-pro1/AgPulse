<?php
    include_once 'config.php';

    $blogTitle = mysqli_real_escape_string($conn, $_POST['blogTitle']);
    $blogDesc = htmlspecialchars_decode($_POST['blogDesc']);
    $blogCategory = mysqli_real_escape_string($conn, $_POST['blogCategory']);
    $blogDate = mysqli_real_escape_string($conn, $_POST['blogDate']);

    $sql = "INSERT INTO blogs(blogTitle, blogDesc, blogCategory, blogDate) VALUES('{$blogTitle}','{$blogDesc}','{$blogCategory}','{$blogDate}')";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header("location:$location/blog.php");
    }

   
?>