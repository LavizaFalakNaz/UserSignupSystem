<?php

if (($_FILES['my_file']['name']!="")){
    // Where the file is going to be stored
     $target_dir = "upload/";
     $file = $_FILES['my_file']['name'];
     $path = pathinfo($file);
     $filename = $path['filename'];
     $ext = $path['extension'];
     $temp_name = $_FILES['my_file']['tmp_name'];
     $path_filename_ext = '/uploads//'.$_FILES['my_file']['name'];
     
    // Check if file already exists
    /*if (file_exists($path_filename_ext)) {
     echo "Sorry, file already exists.";
     }else{
     move_uploaded_file($temp_name,$path_filename_ext);
     echo "Congratulations! File Uploaded Successfully.";
     }*/

     if( $_FILES['my_file']['name'] != "" ) {
        $path=$_FILES['my_file']['name'];
        $pathto="/uploads//".$path;
        move_uploaded_file( $_FILES['my_file']['tmp_name'],$pathto) or die( "Could not copy file!");
    }
    else {
        die("No file specified!");
    }
}

?>
