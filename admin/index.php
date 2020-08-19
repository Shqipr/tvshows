
<?php include'includesadmin/header.php'; ?>

<?php include'includesadmin/navbar.php'; ?>

<?php  

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows') or die(mysqli_error($mysqli));

if (isset($_POST['send'])){
   
    $title = $_POST['title'];
    $vend = $_POST['vendi'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    $name = $_FILES['file']['name'];
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

  
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
  
    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){

       // Upload file
       move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);}

       $v_name = $_FILES['video']['name'];
       $target_dir = "./uploadsvideo/";
       
       $target_file = $target_dir . basename($_FILES["video"]["name"]);
   
         // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
  // Valid file extensions
  if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
 {
  echo "File Format Not Suppoted";
 }else{

  move_uploaded_file($_FILES["video"]["tmp_name"],$target_dir.$v_name);

   $hello = $mysqli->query("INSERT INTO `show` (title, vendi, date, description, image, `video`) VALUES ('$title', '$vend', '$date', '$description', '$name', '$v_name' )");
     if($hello){
      // echo "poban";
            header ('location:homeadmin.php');
     }

 }

       

     

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
      <button class="btn btn-light  "><a class="text-dark" href="homeadmin.php">Go Back</a></button>
      </div>
      
    <form action="index.php" method="POST" enctype="multipart/form-data">
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
      <input type="file" class="form-control" name="file" id="image">
    </div>
  </div>
  <div class="form-group text-light col">
      <label for="image">Chosse Video</label>
      <input type="file" class="form-control" name="video" id="video">
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



<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>