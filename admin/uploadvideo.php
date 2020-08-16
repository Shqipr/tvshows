<?php  

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows') or die(mysqli_error($mysqli));



  
    $mysqli->query("INSERT INTO `show` (title, vendi, date, description, image, video) VALUES ('$title', '$vend', '$date', '$description', '$name','$name')");
}