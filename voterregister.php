<?php
include ("header.php");
?>

<body>
 <div class="container-fluid"> 
         

        <?php
    if(isset($_POST['btnsubmit']))
    {
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $age=mysqli_real_escape_string($con,$_POST['age']);
        $fname=mysqli_real_escape_string($con,$_POST['fname']);
        $assemblycon=mysqli_real_escape_string($con,$_POST['assemblycon']);
        $epicnum=mysqli_real_escape_string($con,$_POST['epicnum']);
        $gender=mysqli_real_escape_string($con,$_POST['gender']);
      $query="insert into voterregister(name,age,fname,epicnum,assemblycon,gender,curdate)values('$name','$age','$fname','$epicnum','$assemblycon','$gender',now())";

$q=mysqli_query($con,"select * from voterregister where epicnum='$epicnum'");
if(mysqli_num_rows($q)>0)
{
    echo "<p>This Epic no already exist</p>";
}
else{

      $query="insert into voterregister(name,age,fname,epicnum,assemblycon,gender,curdate)values('$name','$age','$fname','$epicnum','$assemblycon','$gender',now())";

      if(mysqli_query($con,$query)){
        echo "<script>alert('your registration is Done !!')</script>";
  }
     else{
           echo mysqli_error($con);
  }
}
    }

?>
    <form action="#" method="post">
    
        <div class="row  ">
           <div class="col-lg-6">
               <label for="">Name :</label>
               <input type="text" class="form-control" name="name">
           </div>
           
           <div class="col-lg-6">
               <label for="">age :</label>
               <input type="number" class="form-control" name="age">
           </div>
   
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

    
    </div>
</body>

<?php
include ("footer.php");
?>