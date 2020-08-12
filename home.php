<?php include'includes/header.php'; ?>

<?php include'includes/navbar.php'; ?>

<?php 

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows' ) or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `show`") or die($mysqli->error);
// // pre_r($result);
//  pre_r($result->fetch_assoc());
// pre_r($result->fetch_assoc());


function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>






    <section  class="p-5" style="background-color:#435E7D;">
    <div>
        <h2 class="text-light text-bold p-3 text-center">Best Tv Show</h2>
    </div>

    <div class="container p-5">
    <div class="row">
    
    <?php while ($row = $result->fetch_assoc()): ?>  
    
    <!-- Card -->
<div class="card card-cascade wider reverse col-md-4  ">

<!-- Card image -->
<div class="view view-cascade overlay">
  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center">

<!-- Subtitle -->
<h6 class="font-weight-bold indigo-text py-2 text-right text-muted"><?php echo $row['date']; ?></h6>
  <!-- Title -->
  <h4 class="card-title"><strong><?php echo $row['title']; ?></strong></h4>
  
  <!-- Text -->
  <p class="card-text"> <?php echo $row['description']; ?></p>

  <button class="btn btn-primar"><a href="tvshow.php?show=<?php echo $row['id']; ?>"
                    class="btn btn-light">Show</a></button>

</div>

</div>
<?php endwhile ?>
<!-- Card -->
</div>
    
    </div>
    </section>


   