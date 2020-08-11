<?php include'includes/header.php'; ?>


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
<section class=" p-5 ">
<div class="container p-3">
<div class="row">
<div class="text-center text-success">
    <h2>Messages</h2>
</div>
<table  class="table table-striped ">
    <thead>
        <tr >
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
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['vendi']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
                <a href="proccess.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-primary">Edit</a>
                    <a href="proccess.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-danger">Delete</a>
                    <a href="proccess.php?delete=<?php echo $row['id']; ?>"
                    class="btn btn-light">Show</a>
            </td>
        </tr>
        
        <?php endwhile ?>
</table>

</div>
</div>
</section>