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


<section class="p-5" style="padding: 50px 60px;  background-image:
    linear-gradient(to bottom, rgba(545, 546, 252, 0.2), rgba(67, 94, 125, 1)),
    url('wll.jpg'); background-repeat:no repeat; height: 661px; background-size: 100% 100%;">
  <div class="container p-5">
  <div class="container-xl">
	<div class="row">
		<div class="col-md-12  mx-auto text-light text-center">
			<h2><span>Best <b>Movies</b></span></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="1"></div></div>
							<div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="2"></div></div>
							<div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="3"></div></div>
              <div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="3"></div></div>
              
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-3"><div class="img-box"><img src="logo2.jpg" class="img-fluid" alt=""></div></div>
							<div class="col-sm-3"><div class="img-box"><img src="logo2.jpg" class="img-fluid" alt=""></div></div>
							<div class="col-sm-3"><div class="img-box"><img src="logo2.jpg" class="img-fluid" alt=""></div></div>
              <div class="col-sm-3"><div class="img-box"><img src="logo2.jpg" class="img-fluid" alt=""></div></div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
            <div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="1"></div></div>
							<div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="2"></div></div>
							<div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="3"></div></div>
              <div class="col-sm-3"><div class="img-box"><img src="logo1.png" class="img-fluid" alt="3"></div></div>
						</div>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>
  </div>

</section>



    <section  class="p-1" style="background-color:#435E7D;">
    <div>
        <h2 class="text-light text-bold p-3 text-center">Best Tv Show</h2>
    </div>

    <div class="container  p-5">
    <div class="row d-flex justify-content-center">
    
    <?php while ($row = $result->fetch_assoc()): ?>  
    
    <!-- Card -->
<div style="background:#C3D8F0;" class="card card-cascade wider  col-md-3 m-2  ">

<!-- Card image -->
<div class="view view-cascade overlay" >
  <img class="card-img-top " src="./admin/uploads/<?php echo $row['image']; ?>"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center">

<!-- Subtitle -->
<h6 class="font-weight-bold indigo-text py-2 text-right text-muted">Me datë:  <?php echo $row['date']; ?></h6>
  <!-- Title -->
  <h4 class="card-title"><strong><?php echo $row['title']; ?></strong></h4>
  
  <!-- Text -->
  <p class="card-text"> <?php echo $row['description']; ?></p>

  <button class="btn btn-primar"><a href="show.php?show=<?php echo $row['id']; ?>"
                    class="btn btn-light">Show</a></button>

</div>

</div>
<?php endwhile ?>
<!-- Card -->
</div>
    
    </div>
    </section>


   