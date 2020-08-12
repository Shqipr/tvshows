<?php include'includes/header.php'; ?>

<?php 

if(isset($_GET['show'])){
 $show_id = $_GET['show'];


 $mysqli = new mysqli('localhost', 'root', '', 'tv_shows' ) or die(mysqli_error($mysqli));
 $result = $mysqli->query("SELECT * FROM `show` WHERE id ='$show_id'") or die($mysqli->error);



   
}
?>
<section>
<div class="conatiner">

    <button class="btn btn-link"><a href="allshow.php"><-- Go Back</a></button>

<?php 
    while ($row = $result->fetch_assoc()): ?>
        
        <div class=container>
        <div class="text-success text-center">
        <h1>Tv Shows</h1>
        </div>
        <div class="text-left">
        <td>
            <h4 class="text=center"><b>ID:</b> <?php echo $row['id']; ?></h4>
            <h4><b class="">Title:</b>  <?php echo $row['title']; ?></h4>
            <h4><b>Netwrok:</b> <?php echo $row['vendi']; ?></h4>
            <h4><b>Release Date:</b>  <?php echo $row['date']; ?></h4>
            <h4><b>Description:</b>  <?php echo $row['description']; ?></h4>
        <td>
        </div>
        </div>
   
  <?php endwhile ?>
   </div>
   </section>