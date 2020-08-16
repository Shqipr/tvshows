<?php include'includesadmin/header.php'; ?>

<?php include'includesadmin/navbar.php'; ?>


<?php 

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows') or die(mysqli_error($mysqli));
if(isset($_GET['edit'])){
    
    $id = $_GET['edit'];
    while($row=mysqli_fetch_assoc($result)){

        $id = $row['id'];
        $title = $row['title'];
        $vend = $row['vendi'];
        $date = $row['date'];
        $description = $row['description'];
    }


}

require_once("editshow.php");

$query = "select * from show where id='".$id."'";
$result = mysqli_query($con, $query);





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

      
    <form action="editshow.php" method="POST">
    <div class="form-group">
    <label for="title">Titte</label>
    <input type="text" class="form-control" name="title" value="<?php echo $title ?>" >
  </div>
  <div class="form-row">
    <div class="form-group col">
      <label for="inputEmail4">Network</label>
      <input type="text" class="form-control" name="vendi" value="<?php echo $vend ?>" >
    </div>
    <div class="form-group col">
      <label for="inputPassword4">Release Data</label>
      <input type="date" class="form-control" name="date" value="<?php echo $vend ?>" >
    </div>
  </div>
 
  <div class="form-group">
    <label for="inputAddress2">Description </label>
    <textarea type="text" class="form-control" name="description" value="<?php echo $description ?>"></textarea>
  </div>
  <div class="form-row">
    
  <div class="form-group">
   
  </div>
  <button type="create" name="update" class="btn btn-secondary"><a href="editshow.php?update=<?php echo $row['id']; ?>">Update </button>
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