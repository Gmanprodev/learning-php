<?php

// where the file will be stored.
$target_dir = "uploads/";
// sets the path of the file.
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// upload is set to true.
$uploadOk = 1;
// the type of file extension.
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // if image file is not false.
    if($check !== false) {
        // output echo string.
        echo "File is an image - " . $check["mime"] . ".";
        // set upload to true.
        $uploadOk = 1;
    } else {
        // if file is not an image output echo string.
        echo "File is not an image.";
        // set upload to false.
        $uploadOk = 0;
    }
}


// if file already exists.
if (file_exists($target_file)) {
    //output echo string.
    echo "Sorry, file already exists.";
    // set upload to false.
    $uploadOk = 0;
}


// if file size is greater than 500000.
if ($_FILES["fileToUpload"]["size"] > 500000) {
    // output echo string.
    echo "Sorry, your file is too large.";
    // set upload to false.
    $uploadOk = 0;
}


// if image file types do not match these.
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    // output echo string.
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    // set upload to false.
    $uploadOk = 0;
}


// if upload is set to false.
if ($uploadOk == 0) {
    // output echo string.
    echo "Sorry, your file was not uploaded.";
} else {
    // if the file has been uploaded output this echo string.
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
        // otherwise output this echo string.
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



