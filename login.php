<?php
$login = false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
//   include 'partials/_dbconnect.php';
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
  $username = $_POST["username"];
  $password = $_POST["password"];
  
//   $sql = "SELECT * from sedata where username='$username' and password='$password'";
  $sql = "SELECT * from sedata where username='$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    while($row=mysqli_fetch_assoc($result)){
        if(password_verify($password,$row['password'])){
            $login = true;
        }
    }
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: index.php");  //header() session's function : by this user automatically go on welcomepage
  }
  else{
    $showError = "Invalid Credentials";
  }
}
?>
<!Doctype html>
<html>
     <head>
         <title> Log in </title>
         <link rel="shortcut icon" type="x-icon" href="sorav_expo.png" >
         <!-- <link rel="stylesheet" href="index.css"> -->
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
            }
            .progress_bar{
                background-color: red;
                width:100vw;
                height: 3px;
                animation: progress_bar_ani 500ms linear 1;
            }
            @keyframes progress_bar_ani{
                0%{
                    width:0vw;
                }
                100%{
                    width:0vw;
                }
            }
            header{
                background-color: var(--main-bg-color);
                color: white;
                width:100vw;
                height: 8vh;
                font-size: x-large;
            }
            .login_text{
                padding-top: 10px;
            }
            .login_container{
                background-color: #2875f056;
                width:90vw;
                height: 80vh;
                margin:30px auto;
                justify-content: center;
                align-items: center;
                border: 2px solid #2875f0d5;
                display: flex;
                justify-content: center;
                align-items: center;

                background: rgba(201, 0, 255, 0.1);
                border-radius: 16px;
                backdrop-filter: blur(3.2px);
                border: 1px solid rgba(201, 0, 255, 0.53);
            }
            .parent{
                background-color: rgba(253, 253, 253, 0.422);
                width:45vw;
                height: 70vh;
                display: block;
                border: 2px solid rgba(55, 54, 54, 0.576);
                padding-left:4vw;

                background: rgba(201, 0, 255, 0.1);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.33);
                backdrop-filter: blur(3.2px);
                border: 1px solid rgba(201, 0, 255, 0.53);
            }
            input{
                width:35vw;
                height: 6vh;
                border:2px solid #2875f0d5;
            }
            button{
                width: 11vw;
                height: 7vh;
                background: var(--main-bg-color);
                background: #a403a4;
                color: #d0e0ff;
                border-radius: 10px;
                margin-top: 4vh;
                font-size: medium;
            }
            button:hover{
                background-color: var(--main-bg-color);
            }
            .create_account{
                text-decoration: none;
                font-size: large;
            }
            .home_icon{
                background-color: rgba(255, 255, 255, 0.373);
                height:46px;
                width:4vw;
                position: absolute;
                margin: 4px auto auto 8px;
                border-radius: 8px;
            }
            header div a img{
                height: 6vh;
                margin: 2px auto auto 7px ;
            }
            input{
                border: 1px solid rgba(201, 0, 255, 0.53);
            }
            .text_color{
                font-size: medium;
                color: #ff3fff;
            }
         </style>
     </head>
     <body>
        <!-- <div class="progress_bar"></div> -->
        <header>
                <div class="home_icon">
                    <a href="index.php">
                        <img src="home.png" alt="Home">
                    </a>
                </div>
             <center class="login_text">Log In</center>
            </header>
<?php
    if($login){
    echo "
    <div style='color:white;' class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your are logged in

  </div>";
    }
    if($showError){
      echo "
      <div style='color:white;' class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Error!</strong> ".$showError."
    </div>";
      }
      
?>
    <!-- <button type='button' class='close' data-dismiss='alert' aria-label='close'>
      <span aria-hidden='true'>&times;</span>
    </button>
    <button type='button' class='close' data-dismiss='alert' aria-label='close'>
        <span aria-hidden='true'>&times;</span>
      </button> -->
        <main>
            <form action="/vs%20code%20data/PHP%20Language/college%20project%20with%20backend/login.php" method="post" class="login_container">
                <div class="parent">
                    <br><br><br><br>
                    <center>                <input type="text" name="username" id="username" placeholder="Phone number, email or username"><br></center>
                    <br><br>
                    <center>                <input type="password" name="password" id="password" placeholder="Password"></center>
                    <br><br>
                    <center><button>Log in</button></center><br>
                    <center><a href="forgot_password.html" class="text_color">Forget Password</a></center>
                    <center class="text_color"><br> or <br></center><br>
                    <center><a href="registration.php" class="create_account text_color">Create Account</a></center>
                </div>
    </form>
        </main>
     </body>
</html>