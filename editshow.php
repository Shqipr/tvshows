<?php include'includes/header.php'; ?>

<?php  

$mysqli = new mysqli('localhost', 'root', '', 'register') or die(mysqli_error($mysqli));
$id = 0;
$update = false;
$title = '';
$vend = '';
$date = '';
$description = '';

if (isset($_GET['update'])){
    $id = $_GET['update'];
    $update = true;
    $_result = $mysqli->query("SELECT FROM `show` WHERE id=$id") or die($mysqli->error());
    if (count($_result)==1){
        $row = $result->fetch_array();
    $title = $_POST['title'];
    $vend = $_POST['vendi'];
    $date = $_POST['date'];
    $description = $_POST['description'];

     
    header ('location:editshow.php');
    }
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
  <button type="create" name="send" class="btn btn-secondary"><a href="users.php?update=<?php echo $row['id']; ?>">Update </button>
</form>
        </div>
    </div>
</section>