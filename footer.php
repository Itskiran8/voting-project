<!-- <div class="row p-5" id="footer">
    <div class="col-lg-12 text-center text-white"> 
      <a href="index.php"  style="color: white;font-size:larger;">Home</a>&nbsp;&nbsp;
      <a href="contact_us.php"  style="color: white;font-size:larger;">Contact</a>&nbsp;&nbsp;
      <a href="Cast_Vote.php"  style="color: white;font-size:larger;">Vote</a>&nbsp;&nbsp;
      <p style="font-size: larger;">Copyright © Your Website 2023</p>
     </div>    
   </div>  -->


  <div class="row  p-5" style="margin-top: 10%; background-color:green">
    
    <div class="col-lg-4 text-white">
     
      <h1> <img src="img/indialogo.png" alt="" width="100" height="100" class="rounded"  >
      <b style="color: orangered;font-size:larger;">IN</b><b style="color: rgb(213, 210, 210);font-size:larger">D</b><b style="color: rgb(5, 58, 5);font-size:larger">IA</b></h1>
      <p style="color: orange;font-size:20px">They've become more informed passionate and more engaged citizens, thanks to the resources and opportunities provided by organization.</p>
    </div>

    <div class="col-lg-4 text-white text-center" >
      <h3 style="color: orange;">Contact Info</h3>
      <div class="col mt-3">
      <i class="fa-regular fa-envelope" style="font-size:20px;border-radius:50%"></i>&nbsp;&nbsp;
      <a href="" style="text-decoration:none;"><span style="font-size:20px;color:white">info@elect_India.com</span></a>
    </div>
      <div class="col mt-3">
        <i class="fa-solid fa-phone" style="font-size:20px;border-radius:50%"></i>
        &nbsp;&nbsp;
        <a href="" style="text-decoration:none;"><span style="font-size:20px;color:white">(+0123) 2345 56789</span></a>
      </div>
      <div class="col mt-3">
        <i class="fa-solid fa-location-crosshairs"style="font-size:20px;border-radius:50%"></i>
        &nbsp;&nbsp;
        <a href="https://www.google.com/maps/place/Bathinda,+Punjab/@30.2088927,74.8762843,12z/data=!4m15!1m8!3m7!1s0x39173297173abbcd:0xa00033c0a58a5ac8!2sBathinda,+Punjab!3b1!8m2!3d30.210994!4d74.9454745!16zL20vMDJzNWsz!3m5!1s0x39173297173abbcd:0xa00033c0a58a5ac8!8m2!3d30.210994!4d74.9454745!16zL20vMDJzNWsz?entry=ttu" style="text-decoration:none;"><span style="font-size:20px;color:white">Punjab, City:Bathinda</span></a>
      </div>
      </div>

      <div class="col-lg-4 text-white " >
        <h3 style="color: orange;">Explore</h3>
        <div class="col mt-3">
          <a href="" style="font-size:20px;text-decoration:none;color:white">Home</a>
        </div>
        <div class="col mt-3">
          <a href="./admin/blogs.php" style="font-size:20px;text-decoration:none;color:white">Blogs</a>
        </div>
        <div class="col mt-3">
          <a href="contact_us.php" style="font-size:20px;text-decoration:none;color:white">Contact_us</a>
        </div>
        <div class="col mt-3">
          <a href="login.php" style="font-size:20px;text-decoration:none;color:white">login</a>
        </div>
      </div>
      <hr>
      <div class="col">
      <h4 style="font-size: larger;" class="text-center">Copyright © Your Website <?php echo date ("Y")?> </h4></div>
      </div>
      
      </div>
      
<!--  -->
</div>

</body>
<!--  -->
<!-- aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<!--  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<!--  -->
<script>
  $(document).ready(function(){
    AOS.init();
  });

</script>
<!-- navbar -->
<script>
  document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          document.getElementById('nav').classList.add('fixed-top');
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('.navbar').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.getElementById('nav').classList.remove('fixed-top');
           // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    });
  });
</script>
<!-- counters -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>

<script>$(document).ready(function() {

  $('.counter').each(function () {
$(this).prop('Counter',0).animate({
  Counter: $(this).text()
}, {
  duration: 4000,
  easing: 'swing',
  step: function (now) {
      $(this).text(Math.ceil(now));
  }
});
});

});
 </script>
<!-- youtube video -->
<script>
  function f()
  {
    document.getElementById("imgframe").style.display="none";
    document.getElementById("iconframe").style.display="none";
    document.getElementById("videoframe").src += "&autoplay=1";
  }
</script> 
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>