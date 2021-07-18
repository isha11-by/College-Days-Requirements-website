<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Mini-Project/dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="navbar">
       <a href="#"><img id="logo" src="img/logo.png" alt=""></a> 
       <h2 id="head">College Days Requirements Portal</h2>
       <ul>  
            <a href="index.php"><li>Home</li></a> 
            <a href="about.html"> <li>About</li></a> 
            <a href="contact.html"><li>Contacts</li></a>  
            <a href="dashboard.php"> <li><?php echo $_SESSION['username']?></li></a> 
            <a href="logout.php"><li>Logout</li></a>  
            <li> <input type="text" id="search"></li>
            <li><button id="srbtn">Search</button></li>
       </ul> 
    </div>
    <hr>
    Welcome - <?php echo $_SESSION['username']?>
    

    
    
    <div class="profile">
        <img id="userlogo" src="img/user.png" alt="">
        <h2 id="name">Name: 
        <h2 id="roll">Email: 
        <h2 id="course">Course: 
        <h2 id="branch">Year:
        <h2 id="mobile">Mobile:
        
        </div>  
    
    <div class="links">
        <a href="notes.php"><button id="sbtn">Notes</button></a>
        <a href="accom.html"> <button id="sbtn">Residential Availability</button></a>
        <a href="Book.html">  <button id="sbtn">Book Store</button></a>   <br>
        <a href="paper.html"> <button id="sbtn">Previous Year Papers</button></a>
        <a href=""> <button id="sbtn">book From Seniors</button></a>
        
        <a href="coaching.html"> <button id="sbtn">Coaching Services</button></a> <br>
        <a href="administration.html"><button id="sbtn">Administration</button></a>
        <a href="healthservices.html"><button id="sbtn">Healthcare</button></a>
        <a href="#"><button id="sbtn">Fooding</button></a>  
                        
        
        
    </div>   

    <script src="script.js"></script>

</html>