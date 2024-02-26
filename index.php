<?php 
  session_start();
  // below code is for permission (user can't open home page without login)
  // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){    //if loggedin not set or != true 
  //   header("location:.php");       //then send user to login.php page 
  //   exit;       //exit the php script 
  // }
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>SoravExpo.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="shortcut icon" type="x-icon" href="sorav_expo.png" >
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap'); 
  </style>
</head>
<body lan="Eng">  
    <header>
        <section class="header_container">
            <div class="header_left_box logo">
              <img src="Sorav Expo purple.png" alt="logo" class="sorav_expo_img">
            </div>
            <div class="header_right_box logo">
              <a href="registration.php" class="header_icon">
                    <div class="icon" id="registeration ">
                      <img src="add.png" alt="Registration" id="registration_img"> 
                    </div>
                    Registration
              </a>
    <?php require 'se_nav.php'?>
              <!-- <a href="login.php" class=" header_icon">
                    <div class="icon" id="login">
                          <img src="user.png" alt="User" id="user_img">
                    </div>
                    Log in
              </a> -->
              <a href="contactus.html" class=" header_icon">
                    <div class="icon" id="contactus" >
                            <img src="address-book.png" alt="contact us" id="contact_img">
                    </div>
                    Contact
              </a>
            </div>
      </section>
    </header>
    <main>
      <!-- slide show -->
      <section class="slideshow-container">
        <div class="mySlides fade"> 
          <div class="numbertext">1 / 3</div>
          <img src="hacker_pose.JPG" style="width:100%">
          <div class="text">Hacker Pose</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="guitar_pose.JPG" style="width:100%">
          <div class="text">Guitar Pose</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="heart_pose.jpg" style="width:100%">
          <div class="text">Face Hidden Pose</div>
        </div>
        <div class="sorav_expo">SORAV<br>EXPO</div>
        <!-- arrows for slide show -->
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
        
      </section>
            <br>
    <!-- dots for slide show -->
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
            </div>
            <h2 id="welcome">Welcome <?php if(isset($_SESSION['username'])){echo "'".$_SESSION['username']."'";}?> To "Sorav Expo"</h2>
        <!-- main box 2  -->
            <section class="main_box2"> 
                    <div class="right_parent contant_box">
                      <h3>Build Your Dream PC</h3>
                        <span class="paragraph_of_pre_build_pc">
                          <p class="pc_component_pragraph" id="pre_build_p">
                            Pre-Build PC -<br>
                            Pre-build PCs are already build by Professionals. It help when you don't have knowledge of computer components
                          </p>
                          <p class="pc_component_pragraph" id="Cpu_pragraph" > 
                            CPU - <br>
                            The Central Processing Unit multitasks as well as increases performance in CPU-intensive games and helps avoid bottlenecks.
                          </p> 
                          <p class="pc_component_pragraph" id="Gpu_pragraph" >
                            GPU - <br>
                            The Graphics Processing Unit offers pure power to push performance to new heights in the biggest games.  
                          </p>
                          <!-- Choose from a variety of components and focus on the parts that will make the perfect PC experience for you. -->
                        </span>
                    </div>
            
                  <div class="main_boxes" id="top_box">
                    <a href="#h" target="_main" class="main_box box-animation hover-increment" id="main_box2_1">Pre-Build PC</a>
                    <a href="#h" target="_main" class="main_box box-animation hover-increment" id="main_box2_2">CPU</a>
                  </div >
                  <div class="main_boxes" id="bottom_box">
                    <a href="#h" class="main_box box-animation hover-increment" id="main_box2_3">GPU</a>
                    <a href="#h" class="main_box box-animation hover-increment" id="main_box2_4">More </a>
                    <a href=""></a>
                  </div>
          </section>
          <!-- main box 3 -->
          <section class="main_box3 ">
              <div class="main_container_3 contant_box" >
                <div id="main_description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam modi nisi, neque laboriosam suscipit laborum. Ut molestias reprehenderit molestiae hic repellat asperiores vero expedita. Provident ratione commodi officia dignissimos distinctio voluptatibus cum voluptates enim laboriosam ducimus nesciunt, dolorum, quis consectetur veritatis cupiditate cumque optio quae, doloribus velit quia. Provident, voluptas amet. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam a totam eligendi, ea quidem optio accusantium et velit voluptas beatae placeat maxime earum dolore nulla sint mollitia id enim reiciendis!
                </div>
                <div class="parent_BOX_3">
                    <div class="box3_1 box3">Photoshoot</div>   
                    <div class="box3_2 box3">Videography</div>
                    <div class="box3_3 box3">Editing</div>
                </div>
              </div>
          </section>
    </main>
    <footer>
        <section class="footer_contactus">
            <div class="footer_parent_contact contant_box" id="footer_left">  
                  <div id="footer_box1_1"> <b>Contact Us</b> </div>
                  <div id="footer_box1_2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum, odit sunt corrupti, minima sint, expedita voluptas tenetur ex distinctio totam iure molestiae quidem libero pariatur qui dolor aspernatur explicabo eaque iusto facilis itaque placeat accusamus! Quam sint necessitatibus, minus mollitia doloremque accusamus quae distinctio sed quaerat perspiciatis error laboriosam ab? Asperiores, doloremque est.</div>
                  <a href="contactus.html"><button class="footer_button" id="contact_learn_more"><b>LEARN MORE</b></button></a>
                  <div class="social_box">
                    <a href="https://www.instagram.com/sorav_achhami_01?igsh=YTRweHo2bWRlNzNl" class="instagram social_link">
                      <div class="social_div" id="instagram_div"> 
                        <img src="instagram.png" alt="instagram icon" class="social_icon" id="instagram_icon">
                        </div>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100088761835524&mibextid=ZbWKwL" class="facebook social_link">
                      <div class="social_div" id="facebook_div">
                        <img src="facebook.png" alt="facebook icon" class="social_icon" id="facebook_icon">
                        </div>
                    </a>  
                    <a href="https://twitter.com/i/flow/login?redirect_after_login=%2Fsorav_01" class="twitter social_link">
                      <div class="social_div" id="twitter_div">
                        <img src="twitter.png" alt="twitter icon" class="social_icon" id="twitter.png">
                      </div>
                    </a>
                  </div>
            </div>
            <form action="/vs%20code%20data/PHP%20Language/college%20project%20with%20backend/index.php" method="post" class="footer_parent_contact contant_box" id="footer_right" >
              <?php 
              $message_alert = false;
              $message_error = false;
              require 'seUserMessage.php';
              
              ?>
              <div class="footer_children_top">
                    <div class="name_box">
                      Name <br>
                      <input type="text" placeholder="Enter Your Name" name="se_name" class="Name_Email_input">
                    </div>
                    <div class="email_box">
                      Email <br>
                      <input type="text" placeholder="Enter Your Email" name="se_email" class="Name_Email_input">
                    </div>
              </div>
              <div class="footer_children_center ">
                  Address <br>  
                  <input type="text" placeholder="Enter Your Address" name="se_address" class="Address_input">
              </div>
              <div class="footer_children_bottom">
                  Message <br>
                  <input type="text" placeholder="Enter Your Message" name="se_message" class="Message_input Address_input">
              </div>
              <button class="footer_children_button"><b>Submit</b></button>
            </form>
      </section>
        <section class="footer_container">
                <div class="details">  
                  <p>WebSite Developer - Sonu Bahadur <small>(Sorav)</small></p>
                  <p>BCA 3<sup>rd</sup> Year</p>
                </div>
        </section>
    </footer>
<script>
let slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n)
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 