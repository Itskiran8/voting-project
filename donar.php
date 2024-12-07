<?php
include ("header.php");
?>

<body>
 <div class="container-fluid"> 
         
<div class="row">
<?php 


    if(isset($_POST['btndonar']))
    {

       
      $name=mysqli_real_escape_string($con,$_POST['name']);
      $age=mysqli_real_escape_string($con,$_POST['age']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $number=mysqli_real_escape_string($con,$_POST['number']);
      $address=mysqli_real_escape_string($con,$_POST['address']);
      $about=mysqli_real_escape_string($con,$_POST['about']);
      $donate=mysqli_real_escape_string($con,$_POST['donate']);
      $gender=mysqli_real_escape_string($con,$_POST['gender']);
      $query="insert into donar(name,age,email,number,address,about,donate,gender,curdate)values('$name','$age','$email','$number','$address','$about','$donate','$gender',now())";
          
      if(mysqli_query($con,$query)){
        echo "<script>alert('your message is submitted')</script>";
 }
     else{
           echo mysqli_error($con);
  }

} 
?>

<h1 style="color:rgb(3, 3, 61);text-align:center;margin-top:5%">BE A Donar Hand :</h1>

<div class="offset-1 p-4  mt-4" style="width:80%;border:2px solid black;border-radius:20px;background-color:skyblue">
    <form action="#" method="post">
    
        <div class="row  ">
           <div class="col-lg-12">
               <label for="">Name :</label>
               <input type="text" class="form-control" name="name">
           </div>
           
           <div class="col-lg-12">
               <label for="">age :</label>
               <input type="number" class="form-control" name="age">
           </div>
   
           <div class="col-lg-12">
               <label for="">Email Address :</label>
               <input type="email" class="form-control" name="email">
           </div>
     
           <div class="col-lg-12">
               <label for="">Phone Number:</label>
               
               <input type="tel" class="form-control" name="number">
           </div>

           <div class="col-lg-12">
               <label for="">How much you want to donate:</label>
               <div class="input-group">
               <span class="input-group-text"><i class="fa-solid fa-indian-rupee-sign"></i></span>
               <input type="number" class="form-control" name="donate">
           </div>
           </div>

           <div class="col-lg-12 p-3">
            <label for="">About Yourself :</label>
          <textarea  rows="1" name="about"></textarea>
</div>

        <div class="col-lg-12 p-3">
            <label for="">Address :</label>
          <textarea  rows="1" name="address"></textarea>
        </div>

       
        
          
   <div class="col-lg-12 mt-3">
       <label for="">Gender:</label>
       <label for="">Male</label>
       <input type="radio" name="gender" value="Male">
       <label for="">Female</label>
       <input type="radio" name="gender" value="Female">
   </div>
   
           <div class="col-lg-12 text-center "><br>
               <button class="btn btn-success" name="btndonar">Submit</button>
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