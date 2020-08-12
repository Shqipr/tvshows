<?php include'includes/header.php'; ?>

<?php 

if(isset($_GET['show'])){
 $show_id = $_GET['show'];


 $mysqli = new mysqli('localhost', 'root', '', 'tv_shows' ) or die(mysqli_error($mysqli));
 $result = $mysqli->query("SELECT * FROM `show` WHERE id ='$show_id'") or die($mysqli->error);



   
}
?>
<section style="background-image:
    linear-gradient(to bottom, rgba(545, 546, 252, 0.2), rgba(67, 94, 125, 1)),
    url(''); background-repeat:no repeat; height: 943px; background-size: 100% 100%;">
<div class="conatiner">

    <button class="btn btn-light"><a href="allshow.php"><-- Go Back</a></button>

<?php 
    while ($row = $result->fetch_assoc()): 
       
    ?>
            
        
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
            <h4><b>Photo:</b>  <?php echo $row['image']; ?></h4>
        <td>
        </div>
        <a href="editshow.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-primary">Edit</a>
        <a href="allshow.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
        
        </div>
   
  <?php endwhile ?>
   </div>
   </section>