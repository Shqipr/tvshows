<?php include'includes/header.php'; ?>

<?php 

if(isset($_GET['title'])){
    $title = $_GET['title'];
    mysqli_connect("localhost", "root", "") or die ("Cloud not connect to the server");
    mysqli_select_db("tv_show") or die ("That database could not be found");
    $mysqli->query("INSERT INTO `show` (title, vendi, date, description) VALUES ('$title', '$vend', '$date', '$description')")
      or die($mysqli->error);

      if (mysqli_num_rows($mysqli) != 1){
          die ("That movie could not be found");
      }
      while($row = mysqli_fetch($mysqli, MYSQL_ASSOC)){
          $title = $row['title'];
          $title = $row['vendi'];
          $title = $row['date'];
          $title = $row['description'];

      }

?>

<table>
<tr><td>Title:</td><td><?php echo $title; ?></td></tr>
<tr><td>Title:</td><td><?php echo $vend; ?></td></tr>
<tr><td>Title:</td><td><?php echo $date; ?></td></tr>
<tr><td>Title:</td><td><?php echo $description; ?></td></tr>


</table>

<?php 

    }else die ();

?>
