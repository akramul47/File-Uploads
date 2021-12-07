<?php

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// if(isset($_FILES['my_file'])){
//     echo "<h3> File Info </h3>";
//     echo "<p> File Name: ". $_FILES['my_file']['name']."</p>";
//     echo "<p> File Type: ". $_FILES['my_file']['type']."</p>";
//     echo "<p> File Temp Location: ". $_FILES['my_file']['tmp_name']."</p>";
//     echo "<p> File Size: ". $_FILES['my_file']['size']."</p>";

// }

// if($_FILES['my_file']['type'] == 'image/png'){
//     echo 'Right file';
// }else{
//     echo 'Wrong file';
// }

$target = $_FILES['my_file']['tmp_name'];

$destination = "uploads/" .$_FILES['my_file']['name'];
$is_file_moved = move_uploaded_file($target, $destination);

if($is_file_moved){
    echo 'File uploaded successfully';
}else{
    echo "You have uploaded wrong file";
}