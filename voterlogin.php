<?php
include "header.php";
?>
<div class="row offset-2" style="background:img/profile_register.png;b">
   <h1>Login Here !!</h1>
    <div class="col-lg-6 p-4 mt-5" style="border:2px solid black;border-radius:20px;background-color:skyblue">
    <?php 
    if(isset($_POST['btnsubmit']))
    {
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $fname=mysqli_real_escape_string($con,$_POST['fname']);
        $epicnum=mysqli_real_escape_string($con,$_POST['epicnum']);
        $assemblycon=mysqli_real_escape_string($con,$_POST['assemblycon']);
        $gender=mysqli_real_escape_string($con,$_POST['gender']);
     
        $query="select * from voterlogin where name='$name' and fname='$fname'and assemblycon='$assemblycon' and epicnum='$epicnum' and gender='$gender' ";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result)>0)
      {
         echo"<script>window.location.href='Cast_vote.php'</script> ";
      }  
      else{
         echo"<p class='text-danger'>invalid information</p>";
      }  

    }
?>


<form action="#" method="post">
    
    <div class="row  ">
       <div class="col-lg-12">
           <label for="">Name :</label>
           <input type="text" class="form-control" name="name">
       </div>
       
       <!-- <div class="col-lg-6">
           <label for="">Age:</label>
           <input type="number" class="form-control" name="age">
       </div> -->

       <div class="col-lg-12">
           <label for="">Father's Name/ Husband Name :</label>
           <input type="text" class="form-control" name="fname">
       </div>
 
       <div class="col-lg-12">
           <label for="">Assembly Constituency:</label>
           <input type="text" class="form-control" name="assemblycon" placeholder="Area of vote eg: VPO Nehal Khera">
       </div>

       <div class="col-lg-12">
           <label for="">EPIC NO :</label>
           <input type="password" class="form-control" name="epicnum" placeholder="Voter No. eg: GGW237498">
       </div>
      
<div class="col-lg-12 mt-3">
   <label for="">Gender:</label>
   <label for="">Male</label>
   <input type="radio" name="gender" value="Male">
   <label for="">Female</label>
   <input type="radio" name="gender" value="Female">
</div>

       <div class="col-lg-3"><br>
           <button class="btn btn-success" name="btnsubmit">submit</button>
       </div>
    </div>

</form>
</div>
</div>


<?php
include "footer.php";
?>
