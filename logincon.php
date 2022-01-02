<?php
echo
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Login Form</title>

  <style type="text/css">
    

body {
  margin:0;
  padding:0;  
  background-color:#eee;
  box-sizing:border-box ;
  text-align:center;
  text-decoration:none;
}
.container{
  width:80%;
  margin:50px auto;
  padding:40px auto;
  height:470px;
  border-radius:10px;
  box-shadow:3px 3px 2px #ddd,
            -3px -3px 2px #fff;
}
.header img{
    height:80px;
    width:80px;
    display:block;
    margin:10px auto;
    padding-top:30px;

}
.header h2{
    color:crimson;
    text-align:center ;
    margin:10px auto 40px auto;
}
.container form{
    width:90%;
    margin:10px auto;
}
.container form input{
  height:40px;
  width:100%;
  background:#eee;
  outline:none;
  border:0;
  margin:10px auto;
  padding:5px 0 5px 15px; 
  border-radius:30px; 
  box-sizing:border-box ;
  box-shadow: inset 2px 2px 5px #ddd,
              inset -2px -2px 5px #fff; 
}
form input[type="submit"]{
    font-weight:bold;
    color:#fff;
    background-color:#e56800;
    box-shadow:inset 2px 2px 3px #ff7400,
             inset -2px -2px 3px #cc5c00; 
}
form input[type="submit"]:hover{
  background-color:#d45700;
}
form a{
    text-decoration:none;
}


  </style>
 </head>
<body>
  <div class="container">
    <div class="header">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnt0ZLg6uF82qjK9cVP_fp_x9yncwq9WcvbCZk_mUSQyWYAncZRA&s.png">
      
      <h2>Section 3(CSE)</h2>
    </div>
    <form method="POST" action="#">
    <center>
     <input type="text" placeholder="student_ID" name="id">
     <input type="password" placeholder="password" name="AdminPassword"> </br> 
     <input type="submit" name="submit" onclick="alert('Welcome CSE Soldiers')"></br>
     
     </center>
    </form>     
  </div> 
  <p>&copy<span>Aurnab das</span></p> 
</body>
</html