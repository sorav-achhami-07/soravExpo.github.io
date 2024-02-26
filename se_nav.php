<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin = true;
}
else{
    $loggedin = false;
}
// echo '';
    if(!$loggedin){
        echo '
        <a href="login.php" class=" header_icon">
        <div class="icon" id="login">
              <img src="user.png" alt="User" id="user_img">
        </div>
        Log in
        </a>';
    }
        // echo '
        // <a href="registration.php" class="header_icon">
        // <div class="icon" id="registeration ">
        //   <img src="add.png" alt="Registration" id="registration_img"> 
        // </div>
        // Registration
        // </a>';
    if($loggedin){
    echo '
    <a href="logout.php" class=" header_icon">
    <div class="icon" id="logout">
          <img src="logouticon.png" alt="User" id="user_img">
    </div>
    Log out
</a>';
    }   
// echo '
//         </ul>
//     </div>
// </div>
// </nav>';


//nav bar if else condition learn on 44th video of 'code with harry'
?>