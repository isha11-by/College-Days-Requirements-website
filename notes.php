<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Mini-Project/notes</title>
    <link rel="stylesheet" href="notes.css">
</head>
<body>
    <div class="navbar">
       <a href="#"><img id="logo" src="img/logo.png" alt=""></a> 
       <h2 id="head">College Days Requirements Portal</h2>
       <ul>  
       <a href="index.php"><li>Home</li></a> 
          <a href="about.html"> <li>About</li></a> 
          <a href="contact.html"><li>Contacts</li></a>   
          <a href="logout.php"><li>Logout</li></a>  
          <li> <input type="text" id="search"></li>
          <li><button id="srbtn">Search</button></li>
       </ul> 
    </div>
    <hr>
    <div class="profile">
        <img id="userlogo" src="img/user.png" alt="">
        <h2 id="name">Name</h2>
        <h2 id="roll">Roll Number</h2>
        <h2 id="course">Course</h2>
        <h2 id="branch">Branch</h2>
        <h2 id="mobile">Mobile</h2>
        </div>  
    <div class="sem">

        <a href="firstsem.html"><button id="one">First Semester</button></a>
         
  
     <a href="secondsem.html">  <button id="two">Second Semester</button></a>   
 
       <a href="thirdsem.html"><button id="three">Third Semester</button></a> 
     <br>

     <a href="fourthsem.html"> <button id="four">Fourth Semester</button></a>
        
   
     <a href="fifthsem.html"> <button id="five">Fifth Semester</button></a>  
<br>

     <a href="sixthsem.html"><button id="six">Sixth Semester</button></a>
        
   
     <a href="#"><button id="seven" onclick ="showAlert()">Seventh Semester</button></a> 
       
     <a href="#"> <button id="eight"   onclick ="showAlert1()">Eighth Semester</button></a>
        
       
    </div>


</body>
<script src="notes.js"></script>
</html>