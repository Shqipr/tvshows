
<?php include'includes/header.php'; ?>
<?php  

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){
   
    $title = $_POST['title'];
    $vend = $_POST['vendi'];
    $date = $_POST['date'];
    $description = $_POST['description'];
    $file = $_FILES['image'];


    $mysqli->query("INSERT INTO `show` (title, vendi, date, description, image) VALUES ('$title', '$vend', '$date', '$description', '$file')")
      or die($mysqli->error);
      
      header ('location:index.php');

}

?>




<!-- <section style="background-color:#597EA9;" class="" >
<div class="container ">
<div class="row">

<div class="row">

            <div class="text-center ">

            <h1 >Add a New Show</h1>
     </div>
     <div class="text-right text-light  col-md-12">
  <button class="btn btn-light  "><a class="text-dark" href="allshow.php">Go Back</a></button>
</div>

</div>
</div>
</div>
</section> -->
<section style="padding: 50px 60px; background-image:
    linear-gradient(to bottom, rgba(545, 546, 252, 0.2), rgba(67, 94, 125, 1)),
    url('images/stranger.jpg'); background-repeat:no repeat; height: 943px; background-size: 100% 100%;" class="bg-light">
    <div class="container">
        <div class="row">
      <div class="col-md-9">
        <h1 class="text-light">ADD NEW SHOWS</h1>
      </div>
      <div class="col-md-3">
      <button class="btn btn-light  "><a class="text-dark" href="allshow.php">Go Back</a></button>
      </div>
      
    <form action="index.php" method="POST">
    <div class="form-group text-light">
    <label for="title">Titte</label>
    <input type="text" class="form-control" name="title" >
  </div>
  <div class="form-row">
    <div class="form-group text-light col">
      <label for="inputEmail4">Network</label>
      <input type="text" class="form-control" name="vendi" >
    </div>
    <div class="form-group text-light col">
      <label for="inputPassword4">Release Data</label>
      <input type="date" class="form-control" name="date">
    </div>
    <div class="form-group text-light col">
      <label for="image">Chosse image</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>
  </div>
 
  <div class="form-group text-light">
    <label for="inputAddress2">Description </label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>
  <div class="form-row">
    
  <div class="form-group text-light">
   
  </div>
  <button type="create" name="send" class="btn btn-primary">Create </button>
</form>
        </div>
    </div>
</section>
