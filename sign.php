<?php
if(isset($_POST['button'])){
$server="localhost";
$username="prajnesh";
$password="Praj@1234";
$database="internproject";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn) {
  
    $fname=$_POST['name'];
    if(empty($fname)||strlen($fname)<3){
        echo "<script>alert('name must contain 4 character');</script>";
    }else{
    $email=$_POST['mail'];

    $cmt="SELECT Fname,Email FROM form WHERE Fname='$fname' AND Email = '$email'";
    $rslt=mysqli_query($conn,$cmt);
    if(mysqli_num_rows($rslt)>0){
        echo "<script>alert('alredy an user, try to Login');</script>";
       // header ("Location: login.php");
        
        
    }else{

    if(empty($email)||strlen($email)<5){
        echo "<script>alert('email must contain 5 character');</script>";
    }else{
    $pass=$_POST['password'];
    $cnpass=$_POST['cnpassword'];
    if($pass==$cnpass){
    $sql="INSERT INTO form(Fname,Email,Password) VALUES('$fname','$email','$pass')";
    $result=mysqli_query($conn,$sql);
if($result){
      echo "<script>alert('successful');</script>";
}
else{
    echo"<script>alert('not successful');</script>";

}
}else{
    echo"<script>alert('password not match');</script>";
}
}
}
}
}else{
    echo "<script>alert('not connected.);</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
    <style>
        *{
            padding: 0%;
            margin: 0%;
        }
        body{
            background-image: url('images/back.jpg');
        }
        
        .main{
           
            width: 80vw;
            height: 80vh;
            margin: 10vh 10vw;
            display: flex;
            box-shadow: 10px 12px 14px -4px rgba(0,0,0,0.6),-14px -12px 14px -4px rgba(0,0,0,0.6),14px -12px 14px -4px rgba(0,0,0,0.6),-14px 13px 14px -4px rgba(0,0,0,0.6);

        }
        .box1{
            width: 50%;
            background-color: rgba(255, 99, 71,0.9);
            height: 100%;
        }
        .box2{
            width: 50%;
            height: 100%;
            background-color: rgba(255, 99, 71,0.9);
        }
        .wlcm{
            font-size: 60px;
            text-align: center;
            margin-top: 10%;
        }
        .para1 {
            font-size: 18px;
            letter-spacing: 0.25px;
            text-align: center;
            margin-top: 15%;
            color: black;
           
        }
        .button {
            width:40%;
            height: 50px;
            border-radius: 25px;
            margin-left: 30%;
            margin-top: 25%;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1.15px;
            background-color: black;
            color: #f9f9f9;
            box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #f9f9f9;
            border: none;
            cursor: pointer;
         
        }
        .button:hover{
            box-shadow: 6px 6px 10px #d1d9e6, -6px -6px 10px #f9f9f9;
            transform: scale(0.9);
        }
        .form__input {
            width: 80%;
            height: 50px;
            margin: 3% 5% 0;
            padding-left: 25px;
            font-size: 13px;
            letter-spacing: 0.15px;
            border: none;
            font-family: "Montserrat", sans-serif;
            background-color: #ecf0f3;
            border-radius: 8px;
            box-shadow: inset 2px 2px 4px #d1d9e6, inset -2px -2px 4px #f9f9f9;
        }
        .form__input:focus {
         box-shadow: inset 4px 4px 4px #d1d9e6, inset -4px -4px 4px #f9f9f9;
        }
        .form__input2 {
            width: 80%;
            height: 50px;
            margin: 3% 5%;
            padding-left: 25px;
            font-size: 13px;
            letter-spacing: 0.15px;
            border: none;
            font-family: "Montserrat", sans-serif;
            background-color: #ecf0f3;
            border-radius: 8px;
            box-shadow: inset 2px 2px 4px #d1d9e6, inset -2px -2px 4px #f9f9f9;
        }
        .form__input2:focus {
         box-shadow: inset 4px 4px 4px #d1d9e6, inset -4px -4px 4px #f9f9f9;
        }
        .button2{
            margin-top: 5%;
        }
    </style>
</head>
<body>
    <div class="main">
        
        <div class="box1">
            <h1 class="wlcm">Welcome!</h1>
            <form method="post" action="">
            <input name="name" class="form__input" type="text" placeholder="User Name">
            <input name="mail" class="form__input2" type="email" placeholder="Email">
            <input name="password" class="form__input2" type="password" placeholder="Password">
            <input name="cnpassword" class="form__input2" type="text" placeholder="Conform Password">

            <button type="submit" name="button" class="button button2">SIGN UP</button>
            </form>
        </div>
        <div class="box2">
            <h1 class="wlcm">Have An Account!</h1>
            <p class="para1">To keep connected with us please login with your personal info</p>
            <a href="login.php"><button class="button">LOGIN</button></a>
        </div>
    </div>
  
</body>
</html>