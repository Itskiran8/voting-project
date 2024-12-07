<?php
include "header.php";
?>
        <div class="col py-3">
            <h1>Election Result</h1>

            <div class="row p-5">

            <?php
                        $res=mysqli_query($con ,"select count(*) as counter, votedparty from castvote group by votedparty");
                        while($row=mysqli_fetch_array($res))
                        {
                        
                        ?>
                 <div class="col-lg-4">
                    <div class="col bg-success text-center p-3 text-light">
                        <h2><?php echo $row['counter']?></h2>
                        <hr/>
                        <h5><?php echo $row['votedparty']?></h5>
                    </div>
                </div>  

                
<?php } ?>

            </div>
        </div>


    </div>
</div>
<?php
 include'footer.php';
?>