<?php
include "header.php";
?>
<div class="row offset-2" style="background:img/profile_register.png;b">
   <h1>Login Here !!</h1>
    <div class="col-lg-6 p-4 mt-5" style="border:2px solid black;border-radius:20px;background-color:skyblue">
    <?php 
    if(isset($_POST['btnsubmit']))
    {
      $username=mysqli_real_escape_string($con,$_POST['username']);
      $password=mysqli_real_escape_string($con,$_POST['password']);
     
      $query="select * from adminlogin where username='$username'and password='$password' ";
      $result=mysqli_query($con,$query);
      if(mysqli_num_rows($result)>0)
      {
         echo"<script>window.location.href='admin/dashboard.php'</script> ";
      }  
      else{
         echo"<p class='text-danger'>invalid username or password </p>";
      }  

    }
?>


    <form action="#" method="post">
  <label for="">Enter  Name: </label>
    <input type="text" class="form-control" name="username">
    <label for="">Enter  Password: </label>
    <input type="Password" class="form-control" name="password">
    <button class="btn btn-success btn-lg  m-4" name="btnsubmit">Submit</button>
  </form>
    </div>
</div>


<?php
include "footer.php";
?>
