<?php
$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["file"]["name"]);

$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) {

  $check = getimagesize($_FILES["file"]["tmp_name"]);

  if($check !== false) {

    echo "File is an image - " . $check["mime"] . ".";

    $uploadOk = 1;

  } 
  else {

    echo "File is not an image.";

    $uploadOk = 0;

  }

}

if ($_FILES["file"]["error"] > 0){

    echo "Error: " . $_FILES["file"]["error"];

}
else{

    echo "檔案名稱: " . $_FILES["file"]["name"]."<br/>";

    echo "檔案類型: " . $_FILES["file"]["type"]."<br/>";

    echo "檔案大小: " . ($_FILES["file"]["size"] / 1024)." Kb<br />";

    echo "暫存名稱: " . $_FILES["file"]["tmp_name"];

    move_uploaded_file($_FILES["file"]["tmp_name"], "../img/" . $_FILES["file"]["name"]);

    if (file_exists("upload/" . $_FILES["file"]["name"])){

        echo " 檔案已經存在，請勿重覆上傳相同檔案 ";

    }
    else {
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
    }

}

?>

