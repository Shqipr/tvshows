<?php include'includesadmin/header.php'; ?>

<?php include'includesadmin/navbar.php'; ?>

<?php 

if(isset($_GET['show'])){
 $show_id = $_GET['show'];


 $mysqli = new mysqli('localhost', 'root', '', 'tv_shows' ) or die(mysqli_error($mysqli));
 $result = $mysqli->query("SELECT * FROM `show` WHERE id ='$show_id'") or die($mysqli->error);



   
}
?>
<section  style="background-image:
    linear-gradient(to bottom, rgba(545, 546, 252, 0.2), rgba(67, 94, 125, 1)),
    url(''); background-repeat:no repeat; height: 943px; background-size: 100% 100%;">
<div class="conatiner p-5">
<button class="btn btn-light"><a href="homeadmin.php"><-- Go Back</a></button>
<?php 
    while ($row = $result->fetch_assoc()): ?>
<div class="row">
  <div class="col-8">
  <img class="img-thumbnail"  style="width:100%; height:700px;" src="../admin/uploads/<?php echo $row['image']; ?>">
  </div>
  <div class="col-4">
  
        
        <div class=container>
        <div class="text-light text-right">
        <h1>Tv Shows</h1>
        </div>
        <div class="text-right text-muted">
        <td>
            <h4 ><b>ID:</b> <?php echo $row['id']; ?></h4>
            <h4><b class="">Title:</b>  <?php echo $row['title']; ?></h4>
            <h4><b>Netwrok:</b> <?php echo $row['vendi']; ?></h4>
            <h4><b>Release Date:</b>  <?php echo $row['date']; ?></h4>
            <h4><b>Description:</b>  <?php echo $row['description']; ?></h4>
        <td>
        </div>
        <div class="col-4">
        <a href="editshow.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-primary">Edit</a>
        <a href="allshow.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
        
        </div>


        </div>
   
  <?php endwhile ?>
  
  
  </div>
</div>
    


   </div>
   </section>


   <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>


   






