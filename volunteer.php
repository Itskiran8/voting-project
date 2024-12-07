<?php
include ("header.php");
?>

<body>
 <div class="container-fluid"> 
         <div class="row" id="volunteer-bg">
            <!-- <div class="col-lg-12 text-center mt-5" style="font-size: 20px;">
                <a href="index.php" class="text-white">Home</a>/<a href="volunteer.php" class="text-white">Become A Volunteer</a>
             </div> -->
            <!--<div class="col-lg-12">
                <img src="img/vol-bg.jpeg" alt="" width="100%" height="500px">
            </div>-->
        </div>  

        <div class="row mt-4">
            <div class="col-lg-6 text-center mt-5">
                <img src="img/vol-pic.jpg" alt="" height="300px" width="70%">
            </div>
            <div class="col-lg-6 text-start mt-5 p-5">
            <h2 style="color: brown;">Become A Volunteer</h2>
            <h1>Join Our Movement Become a Volunteer</h1>
            <p>Becoming a volunteer is easy! Explore our current opportunities, volunteer orientation sessions, and discover the many ways you can contribute. Whether you can spare a few hours or commit to a regular schedule, your dedication is valued and appreciated.</p>

            <ul style="font-size: larger;">
                <li>Need To Be Strong and Honest</li>
                <li>To Be Dedicated</li>
            </ul>
            </div>
        </div>

<div class="row bg-light">
<?php 
    if(isset($_POST['btnjoin']))
    {
      $name=mysqli_real_escape_string($con,$_POST['name']);
      $age=mysqli_real_escape_string($con,$_POST['age']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $number=mysqli_real_escape_string($con,$_POST['number']);
      $address=mysqli_real_escape_string($con,$_POST['address']);
      $about=mysqli_real_escape_string($con,$_POST['about']);
      $gender=mysqli_real_escape_string($con,$_POST['gender']);
      $query="insert into volunteer(name,age,email,number,address,about,gender,curdate)values('$name','$age','$email','$number','$address','$about','$gender',now())";
    
      if(mysqli_query($con,$query)){
        echo "<script>alert('your message is submitted')</script>";
 }
     else{
           echo mysqli_error($con);
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
   
           <div class="col-lg-6">
               <label for="">Email Address :</label>
               <input type="email" class="form-control" name="email">
           </div>
     
           <div class="col-lg-6">
               <label for="">Phone Number:</label>
               <input type="tel" class="form-control" name="number">
           </div>

        <div class="col-lg-6 p-3">
            <label for="">Address :</label>
          <textarea  rows="1" name="address"></textarea>
        </div>

        <div class="col-lg-6 p-3">
            <label for="">About Yourself :</label>
          <textarea  rows="1" name="about"></textarea>
</div>
          
   <div class="col-lg-12 mt-3">
       <label for="">Gender:</label>
       <label for="">Male</label>
       <input type="radio" name="gender" value="Male">
       <label for="">Female</label>
       <input type="radio" name="gender" value="Female">
   </div>
   
           <div class="col-lg-12 text-center "><br>
               <button class="btn btn-success" name="btnjoin">Join Now</button>
           </div>
        </div>
   </form>
</div>

    
    </div>
</body>

<?php
include ("footer.php");
?>