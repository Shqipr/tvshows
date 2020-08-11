
<?php include'includes/header.php'; ?>
<?php  

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){
   
    $title = $_POST['title'];
    $vend = $_POST['vendi'];
    $date = $_POST['date'];
    $description = $_POST['description'];


     $mysqli->query("INSERT INTO `show` (title, vendi, date, description) VALUES ('$title', '$vendi', '$date', '$description')")
      or die($mysqli->error);
      
}

?>



<section class="bg-light ">
<div class="container ">
<div class="row">
            <div class="text-center">

            <h1>Add a New Show</h1>
            </div>

</div>

</div>
</section>
<section style="padding: 60px 60px; " class="bg-light">
    <div class="container">
        <div class="row">

      
    <form action="index.php" method="POST">
    <div class="form-group">
    <label for="title">Titte</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4">Network</label>
      <input type="text" class="form-control" name="vendi" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4">Release Data</label>
      <input type="date" class="form-control" name="date">
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2">Description </label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>
  <div class="form-row">
    
  <div class="form-group">
   
  </div>
  <button type="create" name="send" class="btn btn-primary">Create </button>
</form>
        </div>
    </div>
</section>
