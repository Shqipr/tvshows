
<?php include'includes/header.php'; ?>

<?php  

$mysqli = new mysqli('localhost', 'root', '', 'tvshows') or die(mysqli_error($mysqli));

if (isset($_POST['create'])){
   
    $title = $_POST['tittle'];
    $network = $_POST['network'];
    $date = $_POST['date'];
    $description = $_POST['description'];

     $mysqli->query("INSERT INTO `allshow` (tittle, network, date, description) VALUES ($title', '$network', '$date', '$description')")
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
    <label for="tittle">Titte</label>
    <input type="text" class="form-control" name="tittle" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4">Network</label>
      <input type="text" class="form-control" name="network" >
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
  <button type="create" name="create" class="btn btn-primary">Create </button>
</form>
        </div>
    </div>
</section>

