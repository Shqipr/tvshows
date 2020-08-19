<?php include'includesadmin/header.php'; ?>

<?php include'includesadmin/navbar.php'; ?>

<?php 
if(isset($_GET['edit'])){
  $show_id = $_GET['edit'];
  $mysqli = new mysqli('localhost', 'root', '', 'tv_shows' ) or die(mysqli_error($mysqli));
    if(isset($_POST['update']))
    {
      $title = $_POST['title'];
      $vend = $_POST['vendi'];
      $date = $_POST['date'];
      $description = $_POST['description'];
      $sql = "UPDATE `show` SET title = '$title', vendi = '$vend', `date` = '$date', `description` = '$description' WHERE id ='$show_id'";
     //echo $sql;
      $mysqli->query($sql) or die($mysqli->error);
    }
  $result = $mysqli->query("SELECT * FROM `show` WHERE id ='$show_id'") or die($mysqli->error);
  $row = $result -> fetch_assoc();
 }


?>







<section class="bg-light ">
<div class="container ">
<div class="row">
            <div class="text-center">

            <h1>Edit Show</h1>
            </div>

</div>

</div>
</section>
<section style="padding: 60px 60px; " class="bg-light">
    <div class="container">
        <div class="row">

      
    <form action="?edit=<?php echo $row['id']; ?>" method="POST">
    <div class="form-group">
    <label for="title">Titte</label>
    <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4">Network</label>
      <input type="text" class="form-control" name="vendi" value="<?php echo $row['vendi']; ?>" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4">Release Data</label>
      <input type="date" class="form-control" name="date" value="<?php echo $row['date']; ?>" >
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2">Description </label>
    <textarea type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>"></textarea>
  </div>
  <div class="form-row">
    
  <div class="form-group">
   
  </div>
  <button type="create" name="update" class="btn btn-secondary">Update </button>
</form>
        </div>
    </div>
</section>


<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>