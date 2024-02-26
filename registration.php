<?php 
$showAlert = false;
$showError=false;
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Success!</strong> Your firstName : '.$firstName.' Last Name : '.$lastName.' Username : '.$username.' Email : '.$email.' Gender :  '.$gender.' DOB :  '.$dob.' Password :  '.$password.' Confirm Password :  '.$cpassword.' has been submitted successfully.<button href="/scode/phpT/21_Get_post.php" type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button></div>';

    // create variable for connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "soravexpo";
    
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Server is not active by".mysqli_connect_error($conn));
    }
    else{
        // echo "Connection Successfully";
    }
          
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existSql = "SELECT * from `sedata` where username = '$username'";   //mysql checking
      $result = mysqli_query($conn, $existSql);
      $numExistRow = mysqli_num_rows($result);    //variable that contain no. of similar useraname
      if($numExistRow>0){
        $showError = "Username Already Exist";    //at first we check username exist or not 
      }
      else{
        if(($password == $cpassword)){  //second we check is both password similar 
          $hash = password_hash($password, PASSWORD_DEFAULT);   //more secure via hashing tutorial 46
        //   $sql = "INSERT INTO `users` (`sno`, `username`, `password`, `dt`) VALUES (NULL, '$username', '$hash', current_timestamp());";     //if(true):create new account or feed new data on database
        $sql = "INSERT INTO `sedata` (`sno`, `firstNAME`, `lastName`, `username`, `email`, `gender`, `dob`, `password`, `date`) VALUES (NULL, '$firstname', '$lastname', '$username', '$email', '$gender', '$dob', '$hash', current_timestamp());";
          $result = mysqli_query($conn, $sql);    
          if($result){  //if creation successfull
            $showAlert= true;   //true that popup at the bottom of nav bar
          }

        }
        else{
          // $showError= true;
          $showError= "Password and Conform Password don't match";   //it will popup as Error at the bottom of nav bar
        }
      } 
    
    
}
?>
<!Doctype html>
<html lang="en">
     <head>
         <title> Registration  </title>
         <!-- <link rel="stylesheet" href="index.css"> -->
         <!--Second layer of 1.html home page-->
         <link rel="shortcut icon" type="x-icon" href="sorav_expo.png">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
             <style>
            @import url('https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap'); 
            :root{
                --main-bg-color: #6a1a9b;
            }
            *{
                margin:0;
                padding:0;
            }
            body{
                background-color: #231a32;
                color:rgb(208, 204, 204);
            }
            header{
                background-color: var(--main-bg-color);
            }
            #Registration{
                color:white;
                height:40px;
                width: 100vw;
                padding-top:2vh;
            }
            h2{
                text-align: center;
            }
            button{
                height: 34px;
                width: 90px;
                background: #a403a4;
                color: white;                
                border-radius: 10px;
                font-size: medium;
                display: block;
                margin-top: 10px;
            }
            button:hover{
                background-color: var(--main-bg-color);
            }
            .home_icon{
                background-color: rgba(255, 255, 255, 0.373);
                width: 4vw;
                position: absolute;
                margin: 4px auto auto 8px;
                border-radius: 8px;
            }
            header div a img{
                max-height: 5vh;
                margin: 5px auto auto 11px ;
            }
            .main_container{
                background: rgba(201, 0, 255, 0.1);
                border-radius: 16px;
                backdrop-filter: blur(3.2px);
                border: 1px solid rgba(201, 0, 255, 0.53);
                height: 87vh;
                width:90vw;
                padding-left:26px;
                margin: auto;
                margin-top:2vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .dob{
                width:8vw;
            }
            #brandname{
                height: 11vh;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 3vh;
            }
            #brand-logo {
                background: url('sorav_expo.png') no-repeat center;
                background-size: contain;
                height: 120px;
                width: 120px;
                margin-right: 10px;
            }
            h4{
                font-size: 50px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                
            }
            .form-box{
                height: 8vh;
                font-size: large;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            input{
                height: 5vh;
                width: 29vw;
                border: 1px solid rgba(201, 0, 255, 0.53);
                border-radius: 10px;
            }
            .form-input{
                width: 14vw;
            }
            #gender-box{
                width: 30vw;
                height: 100%;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                }
            #gender-box label{
                width: 6vw;
                margin: auto;
            }
            .input-gender{
                height: 12px;
                width: 12px;
                margin: 0px 5px;
            }
         </style>
     </head>
     <body>
           <header>
               <div class="home_icon">
                    <a href="/vs%20code%20data/PHP%20Language/college%20project%20with%20backend/index.php">
                        <img src="home.png" alt="Home" id="img-home">
                    </a>
                </div>  
                <div id="Registration"><h2>Registration</h2></div>
           </header>
    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div> -->
<?php 
   if($showAlert){   //show Alert popup
   echo "
   <div class='alert alert-success alert-dismissible fade show' role='alert'>
   <strong>Success!</strong> Your accout is now created and you can login
   
 </div>";
   }
   if($showError){   //show Error popup
     echo "
     <div class='alert alert-danger alert-dismissible fade show' role='alert'>
     <strong>Error!</strong> ".$showError."
   </div>";
     }
   
?>
<!-- <button type='button' class='close' data-dismiss='alert' aria-label='close'>
     <span aria-hidden='true'>&times;</span>
   </button>
     <button type='button' class='close' data-dismiss='alert' aria-label='close'>
       <span aria-hidden='true'>&times;</span>
     </button>
-->
       
<main>
    <form action="/vs%20code%20data/PHP%20Language/college%20project%20with%20backend/registration.php" method="post" class="main_container">         
        <div id="brandname">
            <div id="brand-logo"></div>
            <h4>SORAV EXPO</h4>
        </div>
        <div class="form-box" id="name-box">
            <input type="text" placeholder="First Name" class="form-input" name="firstname" id="firstname" > 
            <input type="text" placeholder="Last Name" class="form-input"style="margin-left:1vw;" name="lastname" id="lastname" >
        </div>
        <div class="form-box">
            <input type="text" placeholder="Username" name="username" id="username" >
        </div>
        <div class="form-box">
            <input type="email" placeholder="Email " name="email" id="email" >
        </div>
        <div class="form-box">
            <div id="gender-box">
                Gender : 
                <label>
                    <input type="radio" id="gender" value="male" name="gender" class="input-gender" name="gender">Male
                </label>
                <label>
                    <input type="radio" id="gender" value="female" name="gender" class="input-gender" name="gender">Female
                </label>
                <label>
                    <input type="radio" id="gender" value="other" name="gender" class="input-gender" name="gender">Other
                </label>
            </div>
        </div>
        <div class="form-box">
            <input type="date" name="dob" id="dob" >
        </div>
        <div class="form-box">
            <input type="password" placeholder="Password" name="password" id="password" >
        </div>
        <div class="form-box">
            <input type="password" placeholder="Conform Password" name="cpassword" id="cpassword" >
        </div>
        <div class="form-box">
            <button>Submit</button>
        </div>
    </form>
</main>
     </body>
</html>
<!-- CREATE TABLE `soravexpo`.`sedata` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `firstNAME` VARCHAR(25) NOT NULL , `lastName` VARCHAR(25) NOT NULL , `username` VARCHAR(25) NOT NULL , `email` VARCHAR(25) NOT NULL , `gender` VARCHAR(10) NOT NULL , `dob` DATE NOT NULL , `password` VARCHAR(255) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sno`), UNIQUE `username` (`username`)) ENGINE = InnoDB;
-->