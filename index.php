<?php
error_reporting(0);
session_start();


if(isset($_SESSION['Email'])){
  
    $server="localhost";
    $username="prajnesh";
    $password="Praj@1234";
    $database="internproject";

    $conn=mysqli_connect($server,$username,$password,$database);

    if($conn) {
       
        $cmt="SELECT Fname,Email,password FROM form WHERE Email='".$_SESSION['Email']."'";
        $rslt=mysqli_query($conn,$cmt);
       if($rslt){
        $row = mysqli_fetch_assoc($rslt);
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ipl</title>
    <style>
         *{
            padding: 0%;
            margin: 0%;
        }
        body{
            background-color: rgb(71, 48, 18);
        }
        .main{
            
            width: 90vw;
            height: 90vh;
            margin: 5vh 5vw;
            display: flex;
            flex-direction: column;
            box-shadow: 10px 12px 14px -4px rgba(0,0,0,0.6),-14px -12px 14px -4px rgba(0,0,0,0.6),14px -12px 14px -4px rgba(0,0,0,0.6),-14px 13px 14px -4px rgba(0,0,0,0.6);

        }
        .box1{
            width: 100%;
            background-color:#e3d19f;
            height: 30%;
        }
        .box2{
            width: 100%;
            height: 70%;
            background-color: #cfc6b0;
            
        }
        .main_hd{
            margin-top: 3% ;
           margin-left: 5%;
            font-size: 80px;
        }
        .cmnt{
            margin: 7% 2% 0px;

        }
        .button {
            width:20%;
            height: 50px;
            border-radius: 25px;
            margin-left: 10%;
            margin-top: 2%;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1.15px;
            background-color: #4B70E2;
            color: #f9f9f9;
            box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #f9f9f9;
            border: none;
            cursor: pointer;
         
        }
        .button:hover{
            box-shadow: 6px 6px 10px #d1d9e6, -6px -6px 10px #f9f9f9;
            transform: scale(0.9);
        }
    </style>
</head>
<body>
   
</body>
<?php
    
}
    }else{
        echo "<script>alert('not connected.);</script>";
    }
}else{
    echo "<script>location.href='login.php'</script>";
}

?>

</html>