<?php

//var_dump($_FILES);

//ERROR HANDLING
//error: file missing
if ($_FILES["fileToUpload"]["size"]===0){
    die("File missing!");
}

//error: file type not XML
const AllowedTypes= ["text/xml"];
if (!in_array($_FILES["fileToUpload"]["type"], AllowedTypes)){
    die("Sorry, only XML files are allowed.");
}

//other error
if ($_FILES["fileToUpload"]["error"]>0){
    die("There is an error!");
}


//UPLOADING
$tmpFile= $_FILES["fileToUpload"]["tmp_name"];
$targetDir= "Uploads/";
$targetFile= $targetDir . $_FILES["fileToUpload"]["name"];

//moving the file from temp to the Uploads dir
if (move_uploaded_file($tmpFile, $targetFile)){
    echo "Success! Your file has been uploaded.";
}
else {
    echo "Error while uploading";
}

//temp file cleanup
if (file_exists($tmpFile)){
    unlink($tmpFile);
}