<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from user where username='$username' AND password='$password'";
   // $sql = "Select * from user where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
         
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        

        header("location: dashboard.php");
    }
     
     else{
        $showError = "Invalid Credentials";
      }

}

    
?>

<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Mini-Project/login page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    
</head>
<body>
    <div class="navbar">
       <a href="#"><img id="logo" src="img\logo.png" alt=""></a> 
       <h2 id="head">College Days Requirements Portal</h2>
       <ul>  
            <a class ="active" href="index.php"><li>Home</li></a> 
            <a href="about.html"> <li>About</li></a> 
            <a href="contact.html"><li>Contacts</li></a>  
            <a href="signup.php"> <li>Sign up</li></a> 
            <a href="#"><li>Reach Us</li></a>  
            <li> <input type="text" id="search"></li>
            <li><button id="srbtn">Search</button></li>
       </ul> 
    </div>

    <hr>
    <?php
    if($login){
    echo '<strong>Success!</strong> You are logged in';
    }
    if($showError){
    echo ' <strong>Error!</strong> '. $showError;
    }
    ?>
    <div class="bot">
    <h2><a href="bot.php">CHATBOT</a></h2>
    </div>
<div class="login">

    <h3 id="log">Login here</h3>
    <form action="index.php" method="post">

    <input type="text" id="name" placeholder="Username" name="username"> <br>
    <input type="password" id="pass" placeholder="Password" name="password">
     <br>
     <br>
    <input type="checkbox" name="" id="check"> Remember me
    <br>
    <a href="#" id="forgot">Forgot Password</a>

    <br>
    <button name="submit"id="loginbtn" >Login</button></form>
</div>

  

<div class="details">
    <h1 id="head2">What we do ?</h1>
   <p id="para"> "This portal is for the students of University 
       of Lucknow. This portal helps students in many ways like 
       solving almost all the problems occuring at the time of admission
       as well as after getting the admission in the campus."
   </p>
   
</div>


<!-- <script src="script.js"></script> -->
</html>