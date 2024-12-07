<?php
include "header.php";
?>


<!--  -->

 <div class="row mt-4 offset-2">
 
  <div class="col-lg-9 mt-4" style="background-color:rgb(169, 216, 235) ;border:2px solid rgb(43, 132, 148);border-radius:20px;">
    <?php 
    if(isset($_POST['btnsubmit']))
    {
      $name=mysqli_real_escape_string($con,$_POST['name']);
      $email=mysqli_real_escape_string($con,$_POST['email']);
      $number=mysqli_real_escape_string($con,$_POST['number']);
      
      $subject=mysqli_real_escape_string($con,$_POST['subject']);
      $message=mysqli_real_escape_string($con,$_POST['message']);
      $query="insert into contactform(name,email,number,curdate,subject,message)values('$name','$email','$number',now(),'$subject','$message')";
    
      if(mysqli_query($con,$query)){
        echo "<script>alert('your message is submitted')</script>";
  }
     else{
           echo mysqli_error($con);
  }
}
?>

 <h1> Get in Touch with us </h1>
<form action="#" method="post">
  <label for="">Enter  Name: </label>
    <input type="text" class="form-control" name="name">
    <label for="">Enter  E-mail: </label>
    <input type="email" class="form-control" name="email">
    <label for="">Enter phone-number: </label>
    <input type="tel" class="form-control" name="number">
    
    <label for="">Enter  Subject: </label>
    <input type="text" class="form-control" name="subject">
    <label for="">Enter  message :</label>
    <textarea class="form-control " rows="5" name="message"></textarea>
    <button class="btn btn-success btn-lg  m-4" name="btnsubmit">Submit</button>
  </form>
 </div>
</div>
<div class="row mt-5" >
    <div class="col-lg-4 p-3 text-end">
        <i class="fa-regular fa-envelope" style="font-size:40px;background-color:orange;border-radius:50%"></i>
        &nbsp;&nbsp;
        <a href="" style="text-decoration:none;"><span style="font-size:20px;">info@elect_India.com</span></a>
    </div>

    <div class="col-lg-4 p-3 text-center" >
        <i class="fa-solid fa-phone" style="font-size:40px;background-color:orange;border-radius:50%"></i>
        &nbsp;&nbsp;
        <a href="" style="text-decoration:none;"><span style="font-size:20px;">(+0123) 2345 56789</span></a>
    </div>

    <div class="col-lg-4 p-3 text-start" >
        <i class="fa-solid fa-location-crosshairs"style="font-size:40px;background-color:orange;border-radius:50%"></i>
        &nbsp;&nbsp;
        <a href="https://www.google.com/maps/place/Bathinda,+Punjab/@30.2088927,74.8762843,12z/data=!4m15!1m8!3m7!1s0x39173297173abbcd:0xa00033c0a58a5ac8!2sBathinda,+Punjab!3b1!8m2!3d30.210994!4d74.9454745!16zL20vMDJzNWsz!3m5!1s0x39173297173abbcd:0xa00033c0a58a5ac8!8m2!3d30.210994!4d74.9454745!16zL20vMDJzNWsz?entry=ttu" style="text-decoration:none;"><span style="font-size:20px;">Punjab, City:Bathinda</span></a>
    </div>
</div>

<div class="row">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501850.5830362947!2d72.76853261715911!3d31.004623705408573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391964aa569e7355%3A0x8fbd263103a38861!2sPunjab!5e0!3m2!1sen!2sin!4v1720091978265!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mt-5"></iframe>
</div>

<div class="row p-5" >
  <div class="col-lg-7 offset-lg-1 text-bg-dark data-bs-theme=dark" id="volunteer" >
       <div class="col-lg-12 text-center p-4"><h1 style="color: rgb(18, 6, 60);">Become a Volunteer</h1></div>
<div class="col-lg-12  text-center p-4" style="font-size:30px ;"><p>Support Humanity & Country" campaign is a testament to our collective commitment towards fostering goodwill and progress within our society and nation.</p></div>
  
  <div class="col-lg-12 text-white text-center">
    <a href="volunteer.php" style="color: white;" >
      <button class="btn btn-success ms-5">
        Become Volunteer</a>
    </button></div>
</div>
</div>
<!--  -->
<?php
include ("footer.php");
?>