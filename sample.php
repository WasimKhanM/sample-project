<!DOCTYPE html>
<html>
<head>
<title>Sample Project</title>
<style>
    body{
        text-align:center;
        margin-top:20%;
        font-size:25px;
        
        
    
    }
    .back{
        text-decoration:none;
        background-color: #486fd3;
  color: white;
  padding: 1px 5px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  text-decoration: none;


    }

.back:hover
{
  background-color: #103380;
}
    </style>
</head>
<body>
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $Name=$_POST['Name'];
    $College=$_POST['College'];
    $Yop =$_POST['Yop'];
    $Email=$_POST['Email'];
    $Dob=$_POST['Dob'];
    $Gender=$_POST['Gender'];

}

$con = new mysqli("localhost","root","","wasim");
if($con){
   
    
    $sql="INSERT INTO form(Name,College,Yop,Email,Dob,Gender) VALUES('$Name','$College',' $Yop','$Email',' $Dob','$Gender')";
    $result=mysqli_query($con,$sql);
    
    
    if($result){
        echo "Record inserted successfully";

    }else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}

?><br><br>
<a href="wasim.html" class="back">Home</a>
</body>

</html>
