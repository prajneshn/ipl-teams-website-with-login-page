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
     
        if(isset($_POST['logout'])){
            session_destroy();
            
            echo "<script>location.href='index.php'</script>";
        }
          
        $email=$_SESSION['Email'];
        $name=$_SESSION['Fname'];
        if(isset($_POST['button'])){
       
        $cmnt=$_POST['cmnts'];
        $sql="INSERT INTO cmnt(name,email,cmnt) VALUES('$name','$email','$cmnt')";
        $result=mysqli_query($conn,$sql);
        if($result){
           
            
            echo "<script>alert('added successful');</script>";
        }
    }
        if($rslt){
          $row = mysqli_fetch_assoc($rslt);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ipl</title>
    <link rel="stylesheet" href="css/index.css">
    
       <style>
         *{
            padding: 0%;
            margin: 0%;
        }
        
        .main{
            
            width: 96vw;
            height: 90vh;
            margin: -5vh 0vw 10vh 1.5vw;
            display: flex;
            flex-direction: column;
            background-color: red;
            box-shadow: 5px 6px 7px -4px rgba(0,0,0,0.6),-5px -6px 7px -4px rgba(0,0,0,0.6),5px -6px 7px -4px rgba(0,0,0,0.6),-5px 6px 7px -4px rgba(0,0,0,0.6);

        }
        .box1{
            width: 100%;
            background-color:#e3d19f;
            height: 30%;
            position: relative;
            background-color: red;
        }
        .box2{
            width: 100%;
            height: 70%;
            background-color: #cfc6b0;
            display: flex;
            background-color: red;
            
        }
        form{
            height: 100%;
            width: 100%;
        }
        .txt1{
            resize: none;
            width: 54%;
            height: 75%;
            padding: 1% 3%;
            margin: 1% 5%;
            font-size: 13px;
            letter-spacing: 0.15px;
            border: none;
            font-family: "Montserrat", sans-serif;
            background-color: #ecf0f3;
            border-radius: 8px;
            box-shadow: inset 2px 2px 4px #d1d9e6, inset -2px -2px 4px #f9f9f9;
        }
        .txt1:focus {
         box-shadow: inset 4px 4px 4px #d1d9e6, inset -4px -4px 4px #f9f9f9;
        }
        .button {
            width:10%;
            height: 50px;
            position: absolute;
            top:50%;
            right:20%;
            transform: translateY(-50%);
            border-radius: 15px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 1.15px;
            background-color:white;
            color:black ;
            box-shadow: 4px 4px 6px #d1d9e6, -4px -4px 6px #f9f9f9;
            border: 3px solid black;
            cursor: pointer;
         
        }
        .button:hover{
            box-shadow: 6px 6px 10px #d1d9e6, -6px -6px 10px #f9f9f9;
            width:9%;
            height: 45px;
        }
        .all_cmnt{
            width: 40%;
            height: 90%;
            background-color:white ;
            margin:2% 5% ;
            overflow-y: scroll;
            box-shadow: 10px 12px 14px -4px rgba(0,0,0,0.6),-14px -12px 14px -4px rgba(0,0,0,0.6),14px -12px 14px -4px rgba(0,0,0,0.6),-14px 13px 14px -4px rgba(0,0,0,0.6);

         
        }
        .your_cmnt{
            width: 40%;
            height: 90%;
            background-color: white;
            margin:2% 5% ;
            overflow-y: scroll;
            box-shadow: 10px 12px 14px -4px rgba(0,0,0,0.6),-14px -12px 14px -4px rgba(0,0,0,0.6),14px -12px 14px -4px rgba(0,0,0,0.6),-14px 13px 14px -4px rgba(0,0,0,0.6);

        }
        .cmnt{
            text-align: center;
            margin-top: 10px;
            text-decoration:overline underline;
            font-size: 40px;
        }
        .dsply_cmnt{
            width: 90%;
            height: fit-content;
            padding: 5px 0px;
            margin:2% 5% 0%;
            background-color: rgba(255, 99, 71,0.5);
        }
        .cmt_name{
            font-size: 30px;
            margin-top: 20px;
            margin-left: 10px;
            letter-spacing: 3px;
        }
        .cmt_email{
            font-size: 18px;
            margin-top: 5px;
            margin-left: 10px;
            letter-spacing: .25px;
        }
        .cmt_para{
            font-size: 12px;
            margin-top: 10px;
            margin-left: 10px;
            margin-bottom: 20px;
            letter-spacing: .25px;
        }
       
    </style>
    
</head>
<body>
    <header>
        <div class="topm">
            <p class="topmc">🏏Indian Premier League-T20 </p>
        </div>
        <div class="nav">
            <img src="images/logo.png" class="logo" />
            <div class="navb">
              <a href="#carouselExampleCaptions"><div class="navi">Home</div></a>
              <a href="#hi"><div class="navi">History</div></a>
              <a href="#tea"><div class="navi">Teams</div></a>
              <a href="#fo"><div class="navi">Contact</div></a>
              <a > <div class="navi"><form method="post" action="">
                <button type="submit" name="logout"id="logbtn">Log Out</button></form></div>
                </a>
          <?php 
        } 
        ?>
                
              


                
                
                
                
            </div>
            <div class="social" style="background-color:white ;">
               
               <h2 style="color: black;
    letter-spacing: 3px;
   ">Welcome <?php  echo $row['Fname']; ?></h2>
   
            </div>
        </div>
      </header>
  
          
      
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <video src="images/tata-ipl-2022-lucknow-super-giants-machayenge-ʙʜᴀᴜᴋᴀʟ-givefastlink.mp4"  poster="images/luck.jpg" type="video/mp4" class="d-block w-100 h-100" alt="..." id="slid3" controls>
                  <div class="carousel-caption d-none d-md-block">
  
                  </div>
                </div>
                
      
        
            

    <div class="History" id="hi">
      <div class="hpara">
        <h1 id="hh1">Indian Premier League</h1><br>
        <p class="hpara1"><strong>Indian Premier League (IPL)</strong>, Indian professional Twenty20 (T20) cricket league established in 2008. The league, which is based on a round-robin group and knockout format, has teams in major Indian cities.

      Initially, league matches were played on a home-and-away basis between all teams, but, with the planned expansion to 10 clubs (divided into two groups of five) in 2011, that format changed so that matches between some teams would be limited to a single encounter. The top four teams contest three play-off matches, with one losing team being given a second chance to reach the final, a wrinkle aimed at maximizing potential television revenue. The play-off portion of the tournament involves the four teams that finished at the top of the tables in a series of knockout games that allows one team that lost its first-round game a second chance to advance to the final match.</p>
      <a href="https://en.wikipedia.org/wiki/Indian_Premier_League" target="_blank"><input type="button" value="MORE" class="more" /></a>
     
      </div>
      <div id="tea">
      <h1>Teams</h1>
    </div>
    
    <div class="iteam">
      <div class="team">
         <img src="images/csk.png" class="timg"/>
         <p class="tdetail">Name:Chennai Super Kings</p>
         <p class="tdetail">Owner:India Cements</p>
         <p class="tdetail">Head Coach:Stephen Fleming</p>
         <p class="tdetail">Captain:M S Dhoni</p>
         <p class="tdetail">No. of Titles:4</p>
         <a href="csk.html" target="_blank"><input type="button" value="MORE" class="mores" id="cmore" ></a>
         
      </div>
      <div class="team" id="rcb">
        <img src="images/rcb.png" class="timg" />
        <p class="tdetail">Name:Royal Challengers Banglore</p>
        <p class="tdetail">Owner:United Spirits</p>
        <p class="tdetail">Head Coach: Sanjay Bangar</p>
        <p class="tdetail">Captain:Faf Du Plesis</p>
        <p class="tdetail">No. of Titles:0</p>
        <a href="rcb.html" target="_blank"><input type="button" value="MORE" class="mores" id="rmore" ></a>
     </div>
     <div class="team" id="mi">
      <img src="images/mi.png" class="timg" />
      <p class="tdetail">Name:Mahela Jayawardene</p>
      <p class="tdetail">Owner:Reliance Industries</p>
      <p class="tdetail">Head Coach:</p>
      <p class="tdetail">Captain:Rohith Sharma</p>
      <p class="tdetail">No. of Titles:5</p>
      <a href="mi.html" target="_blank"><input type="button" value="MORE" class="mores" id="mmore" ></a>
      
   </div>
   <div class="team" id="srh">
    <img src="images/srh-removebg-preview.png" class="timg" />
    <p class="tdetail">Name:Sunrisers Hyderabad</p>
    <p class="tdetail">Owner:SUN Group</p>
    <p class="tdetail">Head Coach:Brian Lara</p>
    <p class="tdetail">Captain:Kane Williamson</p>
    <p class="tdetail">No. of Titles:1</p>
    <a href="srh.html" target="_blank"><input type="button" value="MORE" class="mores" id="smore" ></a>
    
 </div>
 <div class="team" id="kol">
  <img src="images/kol-removebg-preview.png" class="timg" />
  <p class="tdetail">Name:Kolkata Knight Riders</p>
  <p class="tdetail">Owner:Red Chillies Entertainment</p>
  <p class="tdetail">Head Coach:Chandrakant Pandit</p>
  <p class="tdetail">Captain:Shreyas Iyer</p>
  <p class="tdetail">No. of Titles:2</p>
  <a href="kolkata.html" target="_blank"><input type="button" value="MORE" class="mores" id="kmore" ></a>
  
</div>
<br>
<br>
<br>
<br><br>
<br><br>
    </div>
    <div class="main">
      <h1 style="text-align: center; ">Add Your Comments</h1>
        <div class="box1">
            <form action="" method="post">
            <textarea name="cmnts" class="txt1"></textarea>
            <button type="submit" name="button" class="button">SUBMIT</button>
            </form>
            
        </div>
        <div class="box2">
            <div class="all_cmnt">
                <h2 class="cmnt">All Reviews</h2>
                <?php
                 $cmt="SELECT name,email,cmnt FROM cmnt";
                 $rslt=mysqli_query($conn,$cmt);
                 if (mysqli_num_rows($rslt) > 0) {
                     while ($row = mysqli_fetch_assoc($rslt)) {
         
                ?>
                <div class="dsply_cmnt">
                    <h3 class="cmt_name"><?php echo $row['name']; ?></h3>
                    <h4 class="cmt_email"><?php echo $row['email']; ?></h4>
                    <p class="cmt_para"><?php echo $row['cmnt']; ?></p>
                </div>
                <?php 
           }
        }
        ?>
            </div>
           
            <div class="your_cmnt">
                <h2 class="cmnt">Your Reviews</h2>
                <?php
                
                $cmt="SELECT name,email,cmnt FROM cmnt WHERE email='".$_SESSION['Email']."'";
                $rslt=mysqli_query($conn,$cmt);
                if (mysqli_num_rows($rslt) > 0) {
                    while ($rows = mysqli_fetch_assoc($rslt)) {
               
                
            ?>
                <div class="dsply_cmnt">
                    <h3 class="cmt_name"><?php echo $rows['name']; ?></h3>
                    <h4 class="cmt_email"><?php echo $rows['email']; ?></h4>
                    <p class="cmt_para"><?php echo $rows['cmnt']; ?></p>
                </div>
                <?php
            }
        }
                ?>
            </div>
            
        </div>
       
    </div>
    <div class="foot" id="fo">
      <h1 class="fhead">Sponsers & Partners</h1>
      <div class="sponsim">
        <img src="images/dream.jpg" alt="" class="simgs">
        <img src="images/rupay.png" alt="" class="simgs">
        <img src="images/swigg.png" alt="" class="simgs">
        <img src="images/upst.jpg" alt="" class="simgs">
        <img src="images/unacademy-logo.jpg" alt="" class="simgs">
        <img src="images/cred.jpg" alt="" class="simgs">
      </div>
      <div class="social" id="fsocial">
        <p id="flow">Follow Us</p>
        <img src="images/icons8-facebook-48.png"" class="sociali">
        <img src="images/icons8-instagram-48.png" alt="" class="sociali">
        <img src="images/icons8-twitter-48.png" alt="" class="sociali">
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8476.079739924151!2d74.84544312228012!3d12.872060652812985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35bff25a9a7df%3A0xca75f46d04a9fd05!2sZephyr%20Technologies%20and%20Solutions%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1663184102647!5m2!1sen!2sin" width="200" height="150" style="border:3px solid white;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
      <img src="images/ilogo.png" id="flogo">
      <div class="fcon">
        <h4>CONTACT US</h4>
        <p>If you have any questions, complaints, comments, concerns, feedback or grievances regarding
          this Privacy Policy or wish to obtain the information we currently hold on you, you can contact
          us by emailing us at office@bcci.tv. We will use our best efforts to respond to you or send you
          the information requested.
          </p>
       <br>
          <p style="padding-top: 43px;">Copyright © IPL 2022 All Rights Reserved.</p>
      </div>
    </div>
      <div class="winner">
        <h2>🏆 Champions</h2>zz
        <table>
          <tr>
            <th>Year</th>
            <th>Team</th>
          </tr>
           <tr>
            <td class="year">2022</td>
            <td>Gujarat Titans</td>
           </tr>
           <tr>
            <td class="year">2021</td>
            <td>Chennai super kings</td>
           </tr>
           <tr>
            <td class="year">2020</td>
            <td>Mumbai Indians</td>
           </tr>
           <tr>
            <td class="year">2019</td>
            <td>Mumbai Indians</td>
           </tr>
           <tr>
            <td class="year">2018</td>
            <td>Chennai Super Kings</td>
           </tr>
           <tr>
            <td class="year">2017</td>
            <td>Mumbai Indians</td>
           </tr>
           <tr>
            <td class="year">2016</td>
            <td>Sunrisers Hyderabad</td>
           </tr>
           <tr>
            <td class="year">2015</td>
            <td>Mumbai Indians</td>
           </tr>
           <tr>
            <td class="year">2014</td>
            <td>Kolkata Knight Riders</td>
           </tr>
           <tr>
            <td class="year">2013</td>
            <td>Mumbai Indians</td>
           </tr>
           <tr>
            <td class="year">2012</td>
            <td>Kolkata Knight Riders</td>
           </tr>
           <tr>
            <td class="year">2011</td>
            <td>Chennai Super Kings</td>
           </tr>
           <tr>
            <td class="year">2010</td>
            <td>Chennai Super Kings</td>
           </tr>
           <tr>
            <td class="year">2009</td>
            <td>	Deccan Chargers</td>
           </tr>
           <tr>
            <td class="year">2008</td>
            <td>Rajasthan Royals</td>
           </tr>
        </table>
      </div>
      </div>
    </div>
    <?php
    
  
}else{
    echo "<script>alert('not connected.);</script>";
}
}else{
echo "<script>location.href='login.php'</script>";
}

?>
</body>
</html>