<?php  

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){
   
    $title = $_POST['title'];
    $vend = $_POST['vendi'];
    $date = $_POST['date'];
    $description = $_POST['description'];

$name = $_FILES['video']['name'];
      $target_dir = "./uploadsvideo/";
      
      $target_file = $target_dir . basename($_FILES["video"]["name"]);
  
        // Select file type
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Valid file extensions
 if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
{
 echo "File Format Not Suppoted";
} 

else
{



move_uploaded_file($_FILES["video"]["tmp_name"],$target_file);

$mysqli->query("INSERT INTO `show` (title, vendi, date, description, video) VALUES ('$title', '$vend', '$date', '$description', '$name')");
echo "uploaded ";

}