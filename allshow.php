<?php include'includes/header.php'; ?>


<?php 

$mysqli = new mysqli('localhost', 'root', '', 'tv_shows' ) or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `show`") or die($mysqli->error);
// // pre_r($result);
//  pre_r($result->fetch_assoc());
// pre_r($result->fetch_assoc());

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM `show` WHERE id=$id") or die($mysqli->error());

    header ('location:allshow.php');

}


function pre_r( $array ) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
<section class=" p-5 ">
<div class="container p-3">
<div class="row">
<div class="text-center text-success">
    <h2>All Shows</h2>
</div>
<table  class="table table-striped ">
    <thead>
        <tr >
            <th >ID</th>
            <th >Title</th>
            <th>Newtorks</th>
            <th>Release Data</th>
            <th>Description</th>
            <th colspan="1">Action</th>
        </tr>
    </thead>
    <?php 
        while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['vendi']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="editshow.php?edit=<?php echo $row['id']; ?>"
                    class="btn btn-primary">Edit</a>
                    <a href="allshow.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
                    <a href="tvshow.php?show=<?php echo $row['id']; ?>"
                    class="btn btn-light">Show</a>
            </td>
        </tr>
        
        <?php endwhile ?>
</table>

<button class="btn btn-info"><a class="text-light" href="index.php">Add a New Show</a></button>
</div>
</div>
</section>