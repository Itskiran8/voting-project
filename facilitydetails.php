<?php
include "header.php";
?>

<div class="row p-5">

<h1></h1>
<div class="container">
    
<?php
$id=mysqli_real_escape_string($con,$_GET['id']);

    $query="select * from facility where id='$id'";
$result=mysqli_query($con, $query);
$row=mysqli_fetch_array($result);

echo "<div class='row mb-5 border'>
<div class='col'>
<img src='uploads/".$row['picture']."' height='500' width='70%' />

<h3>".$row['title']."</h3>
<p>By ".$row['postby']." on ".date("d-M-Y",strtotime($row['poston']))."</p>
<p>".$row['description']."...</p>

</div>

</div>";

?>

  
</div>

</div>
<?php
include "footer.php";
?>