<?php
error_reporting(0);
session_start();

if(isset($_SESSION['Email'])){
    
    echo "<script>location.href='home.php'</script>";
}else{
error_reporting(0);
if(isset($_POST['button'])){
$server="localhost";
$username="prajnesh";
$password="Praj@1234";
$database="internproject";

$conn=mysqli_connect($server,$username,$password,$database);

if($conn) {
    $email=$_POST['email'];
    if(empty($email)||strlen($email)<5){
        echo "<script>alert('invalid email');</script>";
    }else{
    $pass=$_POST['password'];
    if(empty($pass)){
        echo "<script>alert('password not be empty');</script>";
    }else{
    $cmt="SELECT Fname,Email FROM form WHERE Email='$email' AND password = '$pass'";
    $rslt=mysqli_query($conn,$cmt);
    if(mysqli_num_rows($rslt)>0){
        $row = mysqli_fetch_assoc($rslt);
        $_SESSION['Email']=$row['Email'];
        $_SESSION['Fname']=$row['Fname'];
        ?>
        <script>alert("welcome <?php echo $row['Fname']; ?>");</script>
        <?php
    }else{
        echo "<script>alert('Data not founted');</script>";
       
}
}
}
echo "<script>location.href='login.php'</script>";
}else{
    echo "<script>alert('not connected.);</script>";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
        .para2 {
            font-size: 18px;
            letter-spacing: 2px;
            text-align: center;
            margin-top: 3%;
            width: fit-content;
            background-color: white;
            color: red;
           
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
            margin: 20% 5% 0;
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
            margin:5%;
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
            margin-top: 10%;
        }
        .apss{
            text-decoration:underline overline;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="box1">
            <h1 class="wlcm">New User!</h1>
            <p class="para1">To keep connected with us please login with your personal info</p>
            <a href="sign.php"><button class="button">SIGN UP</button></a>
        </div>
        <div class="box2">
            <h1 class="wlcm">Welcome Back!</h1>
            <form method="post" action="">
            <input name="email" class="form__input" type="email" placeholder="Email">
            <input name="password" class="form__input2" type="password" placeholder="Password">
            <button type="submit" name="button" class="button button2">LOGIN</button>
            <a href="password.php" class="apss"><p class="para2">FORGOT PASSWORD</p></a>
            </form>
        </div>
    </div>
  
</body>
</html>