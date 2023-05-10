<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="side1.css" rel="stylesheet">
    <script src="faciltyread.js"></script>
    <script>
        function opennav(){
                document.getElementById("mysidebar").style.width="250px";
             
        }
        function closenav(){
                document.getElementById("mysidebar").style.width="0px";
        }
    </script>
    <style >
        /* Main Section */
        .img1 img{
         
         height: 80px;
         border-radius: 50%;
         width: 80px;
         position: relative;
         display: block;
         margin-left: auto;
         margin-right:auto ;
         z-index: 1;
     }
        article{
            padding:15px;    margin:0;
            width:100%;      background-color: skyblue;
        }
        .red{
            display: inline-block;
            margin: 30px 40px;       padding: 10px;
            background:lightgreen;
            border: 5px solid blue;
         }
         .red h2{
              color:fuchsia;    font-weight: bolder;
              font-size:xx-large;    text-align: center;
         }
         .red p{
             color:chocolate;  font-weight: bolder;
         }
         /*Facility Section */
         #more {display: none;}
        .heading{
                text-align: center;     font-size: 4rem;
                padding: 2rem;         color: darkorange;                
          }
        img {
            margin:25px ;       transition: 1s;
            /* border:3px solid orangered;                */
        }
        .imgs{margin:25px ;       transition: 1s;
            border:3px solid orangered;               

        }
        img:hover{
            transform: scale(1.3);
            /* border: 3px groove rgb(0, 255, 191) ; */
        } 
        .blue {
             text-align: center;     margin: 10px;
             padding: 20px;
        }
        .blue h2{
             color:fuchsia;      font-weight: bolder;
             font-size:xx-large;
        }
        .blue p{
            color:chocolate;         font-weight: bolder;
        }
        .blue button{
            padding:10px;     margin:20px;
            background-color:green;    color:yellowgreen;
        }
        .green button{
            padding:15px;     margin:20px;
            background-color:rgb(255, 166, 0);
            color:rgb(119, 11, 243);
        }
        .green{
          text-align: center;    margin: 13px;     padding: 20px;          
         }
         .green h2{
              color:rgb(255, 0, 0);
              font-weight: bolder;
              font-size:xx-large;
         }
         .green p{ color:rebeccapurple;  font-weight: bolder;  }
       

        /* Appointment section */
        .appform h1 {
            background-color: rgb(249, 234, 137);
            color: rgb(255, 0, 247);
            font-size: 24px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px dotted orange;
        }
        .appform input{
            padding: 3px;
        }
        .appform b{
            color:rgb(61, 43, 226);
        }
        .appform{
            border-radius: 20px;
            background: linear-gradient(to bottom, #c0f2a6,rgb(110, 227, 151));
            width: 470px;
            padding: 25px;
            margin: 55px auto 0;
            box-shadow: 0px 0px 20px rgb(0,0,0,0.5);
        }    
        .input-box{
            width: 100%;
            margin-right: 12px;
            position:relative;
        }
        .input-group{
            margin-bottom: 8px;
            width: 100%;
            position: relative;
            display: flex;
            flex-direction:column;
            padding: 5px 0;
        }
        .appform .b1{
            background: transparent;
            border: none;
            margin:25px;
            background-color: green;
            color: yellow;
            padding: 10px 75px;
            border-radius: 10px;
            font-size: 20px;
            transition: all 0.35s ease;
        }

        /* Review section */
        #review .box-container{
            max-width:1600px;
            padding-right:50px;
            margin:0 auto;
            grid-template-columns:repeat(auto-fit,20rem);
            display:grid;
            justify-content:center;
            gap:3rem
        }
        #review .box-container  .box1{
            width: 300px;
            text-align: center;
            background-color:aquamarine ;
             border-radius: 15px;
             box-shadow:2px 10px 12px rgb(71, 72, 94);
             display:inline-block;
             box-sizing:border-box;
             margin: 15px; 
        }
        #review .box-container .box1 .img{
            padding:10px ;     line-height: 1.8;         
            font-size: 1.6rem;         padding-top: 2rem;
            background-color: rgb(63, 245, 103);
            border-bottom-left-radius: 100px;
            border-bottom-right-radius:100px ;
        } 
        
        .box-container .box1 .image{
            margin:25px ;      border:3px solid orangered;        
        }     
        .box-container .box1 h3{
            color: rgb(212, 0, 255);
            font-size: 1.5rem;    padding: .5rem 0;           
        }
        .rev{
            border-radius: 15px;
            box-sizing:border-box;
            background-color: rgb(224, 188, 134);
            box-shadow:2px 10px 12px rgb(71, 72, 94);
        }
        .checked{  color: rgb(238, 255, 0); }  
        /* Contect section */
        .con1{
            border-radius: 25px;    margin: 35px;  padding:30px;         
            box-shadow:2px 10px 12px rgb(71, 72, 94);
            background:linear-gradient(57deg,rgb(249, 180, 255),rgb(193, 255, 245));
        }
        .btn1 input{
            width: 150px;
            margin: 10px;
            padding: 5px;
            border-radius: 20px;
        }
        /* AboutUs section */  
        .btn2{
            height: 45px;   width: 100px;
            color: coral;   background-color: green;
            margin-left: -10px; font-weight: 600;
            border: 4px solid rgb(131, 117, 117);
        }
        #news input{
            height: 45px;   width: 55%;
            border:4px solid rgb(131, 117, 117) ;
            outline: none;         background: black;
            color:white; margin-top: 20px;  font-weight: 600;
        }
        #news::placeholder{  color: white;      }
        .fa {
          padding: 20px;
          font-size: 30px;
          width: 30px;
          text-align: center;
          text-decoration: none;
          margin: 5px 2px;
          border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
          background: #3B5998;
          color: white;
        }

        .fa-twitter {
          background: #55ACEE;
          color: white;
        }

        .fa-google {
          background:white ;
          color:blueviolet;
        }

        .fa-instagram {
          background: linear-gradient(rgb(217, 8, 253),red,yellow);
          color: white;
        }
    </style>
</head>
<body>  
<header>
    <div class="tophead">
        <div class="brandlogo">
            <div class=" p-3 ">
                <div class="media pt-3 align-items-center">
                    <img src="images/logo1.png" width="20%" style="margin: 10px; padding: 10px;" class="rounded-circle  shadow-sm">
                    <div class="media-body">
                        <h3 class="m-3" style=" color:chocolate ;font-weight: bolder;"> JEEVAN HOSPITAL</h3>
                        <p class="font-weight-normal  pb-3" style="color: brown;">Happy Life is Good Life </p>
                    </div>
                </div>
            </div>  
        </div>

        <div>
            <span class="menulines" onclick="opennav()">&#9776</span>
        </div>
    </div>
</header>
    <div class="sidebar" style="margin-top:110px ; background:linear-gradient(30deg,rgb(255, 235, 197),rgb(228, 245, 133))" id="mysidebar">
    <h5 class="font-weight-bold text-uppercase bg-primary p-4 m-0" style="color:yellow;">Dashboard</h5>
    <ul class="flex-column mb-0" >
            <a href="#main"  class="nav-link  text-success " style="font-weight:bolder;font-size: larger;" >Home </a> 
            <a href="profile.php"  class="nav-link text-success "
            style="font-weight:bolder;font-size:larger;" >Profile </a> 
            <a href="#facility"  class="nav-link text-success "
            style="font-weight:bolder;font-size:larger;" >Facility </a>
            <a href="doc.php"  class="nav-link text-success"
            style="font-weight:bolder;font-size: larger;" >Doctors </a> 
            <a href="depart.php"  class="nav-link text-success "
            style="font-weight:bolder;font-size: larger;" >Department </a>
            <a href="#appointment"  class="nav-link text-success "
            style="font-weight:bolder;font-size:larger;" >Appointment </a>  
            <a href="#review"  class="nav-link text-success "
            style="font-weight:bolder;font-size: larger;" >Review </a> 
            <a href="#contact"  class="nav-link text-success "
            style="font-weight:bolder;font-size: larger;" >Contact Us</a>
            <a href="#aboutus"  class="nav-link text-success"
            style="font-weight:bolder;font-size: larger;" >About Us  </a> 
            <!-- <a href="demo.html"  class="nav-link text-success "
            style="font-weight:bolder;font-size: larger;" >Log Out </a>  -->
            <form method="post">
                <input type="submit" class="btn btn-danger btn-lg" name="logout" value="logout" >
            </form> 
    </ul>
    <span><a href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</a></span>

    </div>
<!-- 
    <div id="all" style="background-image: url(images/banner3.jpg);background-size: cover;" > -->
     <div id="all" style="background: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
     linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
     linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);">
         <div id="main" >
            <section >
                 
                        <div class="jumbotron "style="background:linear-gradient(57deg,skyblue,rgb(73, 73, 240));">
                            <div class="row">
                            
                                <div class="col-sm-6" style="padding-top:55px;">
                                    <h1 class="text-center text-danger p-3" style="font-weight: bolder;font-size: 50px;margin-top: 100px;">Welcome To Our Hospital</h1>
                                    <h2 class="p-5 text-center" style="font-weight: bolder;font-size: xx-large;color:navy;">Stay Safe Stay Healthy<br>Caring For Your Life</h2>
                                    <h5 class="p-2 text-center" style="font-weight: bolder;font-size: xx-large;color:yellow;">Making Health Care Better Together.</h5>
                                </div>
                                <div class="col-sm-4">
                                    <img src="images/doc.png"  width="400px" style="padding-top:100px;padding-bottom:63px;">
                                </div>
                                <div class="col-sm-2">
                                </div>
                            </div>
                        </div>
             
            </section>
        </div>
             <div id="facility" style="padding-top: 100px; background:linear-gradient(50deg,rgb(218, 248, 190),rgb(192, 251, 255),rgb(255, 238, 180),rgb(190, 243, 208))" >
               
            <h2 class="heading">Facility</h2>
              <div class="container-fluid mt-5 ml-5  mb-0">
                  <div class="row blue">
                      <div class="col-sm-7">
                            <h2>Free Checkup </h2>
                            <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots">...</span><span id="more"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="freecheckup()" id="myBtn">Read More</button>

                      </div>
                      <div class="col-sm-5">
                          <img src="images/health care1.jpg"  style="width: 75%;height: 260px; "class="img-fluid imgs rounded" >
                      </div>
                  </div>
              </div>
            
              <div class="container-fluid mt-5 ml-5  mb-0">
                  <div class="row green">
                      <div class="col-sm-5">
                          <img src="images/ambulance.jpg" style="width:75%;height:260px;" class="img-fluid imgs rounded">
                      </div>
                      <div class="col-sm-7 ">
                          <h2>24*7 Ambulance </h2>
                          <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots1">...</span><span id="more1"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="Ambulance()" id="myBtn1">Read Less</button>

                      </div>
                  </div>
              </div>
                    
              <div class="container-fluid mt-5 ml-5  mb-0">
                  <div class="row blue">
                      <div class="col-sm-7">
                          <h2>Experts Consultancy</h2>
                          <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots2">...</span><span id="more2"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="Consultancy()" id="myBtn2">Read Less</button>

                      </div>
                      <div class="col-sm-5">
                          <img src="images/consulantcy.jpg" style="width:75%;height:260px;" class="img-fluid imgs rounded">
                      </div>
                  </div>
              </div>
              
              <div class="container-fluid mt-5 ml-5  mb-0">
                 <div class="row green">
                      <div class="col-sm-5">
                            <img src="images/medicine.jpg" style="width:75%;height:260px;" class="img-fluid imgs rounded">
                       </div>
                       <div class="col-sm-7">
                           <h2> Medicine  </h2>
                           <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots3">...</span><span id="more3"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="Medicine()" id="myBtn3">Read Less</button>

                       </div>
                  </div>
             </div>
      
             <div class="container-fluid mt-5 ml-5  mb-0">
                 <div class="row blue">
                      <div class="col-sm-7">
                         <h2>Bed Facility </h2>
                         <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots4">...</span><span id="more4"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="Bed()" id="myBtn4">Read Less</button>

                      </div>
                      <div class="col-sm-5">
                          <img src="images/bad2.jpg" style="width:75%;height:260px;" class="img-fluid imgs rounded">
                      </div>
                  </div>
              </div>
           
              <div class="container-fluid mt-5 ml-5  mb-0">
                   <div class="row green">
                       <div class="col-sm-5">
                          <img src="images/nurse2.jpg" style="width:75%;height:260px;" class="img-fluid imgs   rounded">
                       </div>
                       <div class="col-sm-7">
                           <h2>Total Care </h2>
                           <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots5">...</span><span id="more5"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="Care()" id="myBtn5">Read Less</button>

                      </div>
                  </div>
              </div>
          
              <div class="container-fluid mt-5 ml-5  mb-0">
                  <div class="row blue">
                       <div class="col-sm-7">
                          <h2>Laboratory </h2>
                          <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots6">...</span><span id="more6"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="Laboratory()" id="myBtn6">Read Less</button>

                       </div>
                       <div class="col-sm-5">
                           <img src="images/laboratory6.jpg" style="width:75%;height:260px;" class="img-fluid imgs rounded">
                       </div>
                   </div>
               </div>
      
              <div class="container-fluid mt-5 ml-5  mb-0" >
                  <div class="row green">
                      <div class="col-sm-5">
                         <img src="images/lcu.jpg" style="width:75%;height:260px;" class="img-fluid imgs rounded">
                      </div>
                      <div class="col-sm-7">
                          <h2>ICU Word </h2>
                          <div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam incidunt harum officiis quas itaque. Perferendis maxime a voluptatum ut sit reiciendis quidem dicta! Atque consectetur ex ipsum inventore alias ratione.</p>
                          <span id="dots7">...</span><span id="more7"> <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta minus quibusdam neque reiciendis voluptas. Doloremque architecto fugiat, laudantium rerum nam magnam minus aspernatur ducimus ullam non consequuntur ab quas quis velit deleniti, magni possimus quia illo excepturi accusantium incidunt? Vitae facilis sapiente odit! Eligendi quis ex, cum repudiandae ea beatae.</p>
                          </div>
                          <button class="btn" onclick="ICU()" id="myBtn7">Read Less</button>

                     </div>
                 </div>
             </div>
         
          </div>
<div style=" background: linear-gradient(67deg, #33ccff , #ff99cc)" >
<section id="appointment" style="padding-top:120px;">
          <?php 
     $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
     
     $f=true;

       if(isset($_POST["appoint_save"])){
        $sno=$_POST['sno'];
        $sname=$_POST['sname'];
       $doctornm=$_POST['doctornm'];
       $departnm=$_POST['departnm'];
       $fees=$_POST['fees'];
        $datetime=$_POST['datetime'];
        if(empty($sno))
        {
         ?>
            <div class="container mt-5">
            <div class="alert alert-danger"><strong> warning: </strong>Enter Valid Patient No </div>
            </div>
        <?php
            $f=false;
        }
        
        if(strlen($sname)<=0)
        {
         ?>
            <div class="container mt-5">
            <div class="alert alert-danger"><strong> warning: </strong>Invalid Patient Name</div>
            </div>
        <?php
            $f=false;
        }
    
    if($f==true)
    {    $qry="SELECT * FROM doctor WHERE doctornm='$doctornm'";
        $result = mysqli_query($con,$qry);
        $num_rows = mysqli_num_rows($result);
        if ($num_rows >0){
            $sql="select * from appoint where doctornm='$doctornm' and datetime='$datetime'";
            $result=mysqli_query($con,$sql);
            if (mysqli_num_rows($result) > 0) {
                ?>
                        <div class="container mt-5">
                        <div class="alert alert-warning"><strong> warning: </strong>    Appointment is Already Booked.</div>
                        </div>
                 <?php
               } else{

               }
            
               if (mysqli_num_rows($result) == 0) {
                $queryin="insert into appoint(sname,doctornm,departnm,fees,datetime)values('$sname','$doctornm','$departnm','$fees','$datetime')";
                   $result1 = mysqli_query($con,$queryin) or  die('Record not inserted');
                  $res = mysqli_query($con,"SELECT * FROM appoint ");
                  ?> 
                        <div class="container">
                        <div class="alert alert-success"><strong> Success : </strong>Appointment Successfully .</div> 
                        </div>
                  <?php
        
                  }else{ 
                }
        }
    else{
                 ?>
                    <div class="container mt-5">
                    <div class="alert alert-danger"><strong> warning: </strong> Doctor is not Available.</div>
                    </div>
                <?php          
    }}}
        
          ?> 
  
         <?php

             ?> 
        
             <?php
    
    ?>

    <div class="appform" >
        <h1>Appointment</h1>
    <form method="post" name="appoiform" action="">
        <b>Patients No</b>
        <div class="input-group">
              <input type="text" name="sno" value="<?php echo $_SESSION['sno']; ?>" >
         </div><br>
        <b>Patients Name</b>
        <div class="input-group">
              <input type="text" name="sname" value="<?php echo $_SESSION['sname']; ?>">
         </div><br>
        <b>Blood Group </b>
             <p><?php echo $_SESSION['blood']; ?></p> <br>       
        <b>Doctor Name</b>
        <div class="input-group">
                <input type="text" name="doctornm" value="" >
               
        </div>
        <input type="submit" class="btn btn-warning" name="apdepart" value="Department" ><br><br>
        <?php 
        
        $db = mysqli_connect("localhost", "root", "", "test");
        if(isset($_POST['apdepart']))
        {
        $doctornm=$_POST['doctornm'];
        $sql = "select * from  doctor  where doctornm='$doctornm'";  
        $result = mysqli_query($db, $sql);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            while($row = mysqli_fetch_array($result))
            {
        ?>
        <b>Department Name : </b>
        <div class="input-group">
             <input type="text" value="<?php echo $row['departnm'];?>" name="departnm">
        </div><br>
       
        <b>Fees :</b>
        <div class="input-group">
             <input type="text" value="<?php echo $row['fees'];?>" name="fees">
        </div><br>
        <b>Day :</b>
             <p><?php echo $row['day'];?></p><br>
            <?php
             }}
             else{
                ?> 
                <div class="container">
                <div class="alert alert-warning"><strong> warning: </strong> Doctor Name is not Available.</div> 
                </div>
                <?php
              }
            }
        ?>
            <b>Appointment (Date and Time):</b>
            <div class="input-group">
                <input type="datetime-local" name="datetime" >
            </div><br>
    
        <input type="submit"  class="b1" name="appoint_save" value="Save"><br><br>
       
    </form>
     </div>
</section>

<?php

$db = mysqli_connect("localhost", "root", "", "test");
$sql="select * from rating_data order by sname asc";
$result = mysqli_query($db, $sql);

?>   
<section id="review" > 
            <h1 class="text-center" style="padding-top:130px;color:rgb(255, 99, 71);">Review</h1>
            
            <div class="box-container ">
<?php

if ($result)
 {

  while($row = mysqli_fetch_array($result))
 {
?>
                <div class="box1" style="margin-left: 50px; padding-bottom:25px;">
                    <div class="img">
                    <h3><?php echo $row['sname']; ?></h3>
                        <?php 
                  $favcolor =$row['rating'];

                  switch ($favcolor) {
                    case "1":
                      echo '<span class="fa fa-star checked"></span><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
                      break;
                    case "2":
                      echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> ';
                       break;
                     case "3":
                       echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> ';
                       break;
                    case "4":
                        echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span> ';
                        break;
                    case "5":
                        echo '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>';
                        break;
                     default:
                       echo 'sorry ';
                   
                  }
                    ?> 
                    </div>

                    <h5 style="color: blue;padding: 15px;"><?php echo $row['discription']?></h5>
                  
                </div>                 
          
                <?php
                 
                }}
                else{
                    echo"no data";
                }
                ?>
      
            </div>
            <div class="container mt-3 p-5">
              
                    <div class="row justify-content-between mb-5 ">
                         <div class="col-sm-2 rev  p-3" style="border: blue solid 3px; ">
                                 <h2 class="text-center text-danger mb-3">Doctors</h2>
                                <h4 class="text-center text-success mb-3">120+</h4>
                                <p style="color: darkviolet;margin-top: 5px;text-align: center; font-weight: bold;"> Doctors At Works</p>
                         </div>
                         <div class="col-sm-2 rev p-3"  style="border: blue solid 3px; ">
                                 <h2 class="text-center text-danger mb-3">Patients</h2>
                                <h4 class="text-center text-success mb-3">1500+</h4>
                                <p style="color: darkviolet;margin-top: 5px;text-align: center; font-weight: bold;"> Patients Hopefull</p>
                        </div>
                         <div class="col-sm-2 rev p-3"  style="border: blue solid 3px; ">
                                <h2 class="text-center text-danger mb-3">Bed</h2>
                                <h4 class="text-center text-success mb-3"> 200+</h4>
                                <p  style="color: darkviolet;margin-top: 5px; text-align: center; font-weight: bold;">Bed Facility </p> 
                        </div>
                         <div class="col-sm-2 rev  p-2"  style="border: blue solid 3px; ">
                                <h2 class="text-center text-danger mb-3">Ambulance</h2>
                                <h4 class="text-center text-success mb-3"> 50+</h4>
                                <p  style="color: darkviolet;margin-top: 5px;text-align: center; font-weight: bold;">Ambulance avaliable </p>
                        </div>
                     </div>
            </div> 
</section>

            <section id="contact" style="padding-top: 130px;" class="bg-secondary">
        <div class="container" >
                        <h1 class="text-center" style="color: rgb(0, 255, 255);font-weight: bolder;">Contact Us</h1><br><br>
                        <h3 class="text-center" style="color: rgb(255, 145, 0);font-weight: bolder;">How can we help?</h3><br>
                         <h5 class="text-center" style="color: rgb(145, 255, 0); font-weight: bolder;">Whether you're looking for an inbound marketing agency to help you achieve your digital marketing goals, or are a customer in need of support, we are here to help.</h5>   
                         <?php
    $f=true;
	 $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
	        if(isset($_POST["rev_save"])){
       
                $sname=$_POST['sname'];
                $image=$_POST['image'];
                $rating=$_POST['rating'];
                $discription=$_POST['discription'];
	
                if($f=true)
                {$sql = "select * from rating_data where  sname='{$sname}'";
                $result = mysqli_query($con,$sql) or die("Query unsuccessful") ;
                    if (mysqli_num_rows($result) > 0) {
                     ?>
                             <div class="container mt-5">
                         <div class="alert alert-warning"><strong> warning: </strong>Review & Rating is give Already.</div>
                       </div>
                      <?php
                    } else {
                $q="insert into rating_data(sname,image,rating,discription)values('$sname','$image','$rating','$discription')";
                $res=mysqli_query($con,$q) or die('Record not inserted');
                $result = mysqli_query($con,"SELECT * FROM rating_data");
                ?> 
                <div class="container">
                <div class="alert alert-success"><strong> Success : </strong>Review And Rating Successfully .</div> 
                </div>
             <?php
            }}}
            if(isset($_POST["rev_update"])){
             
                $sname=$_POST['sname'];
                $image=$_POST['image'];
                $rating=$_POST['rating'];
                $discription=$_POST['discription'];
               
                $db = mysqli_connect("localhost", "root", "", "test");
                if($f=true)
                {$sql = "select * from rating_data where  sname='{$sname}'";
                $result = mysqli_query($con,$sql) or die("Query unsuccessful") ;
                    if (mysqli_num_rows($result) > 0) {
               
                              
                $sql = "update rating_data set  rating='$rating',discription='$discription' where sname='$sname'";
                $result=mysqli_query($db, $sql);
                ?> 
                <div class="container">
                    <div class="alert alert-success"><strong> Success : </strong>Review And Rating Successfully .</div> 
                </div>
                <?php
                    } else {
                        ?>
                        <div class="container mt-5">
                        <div class="alert alert-warning"><strong> warning: </strong>Patients code and Patients Name does not match .</div>
                      </div><?php
            }}}
               
               
	?> 
                <div class="row  "  >
                  <div class="col-sm-4 con1 text-center" >
                           <h1 style="font-weight: bolder;color: darkmagenta">Jeevan Hospital</h1><br>
                           <img src="image\contactus.png" ><br><br>
                           <h4 style="font-weight: bolder;color:darkorange">Location :</h4>
                           <h6 style="font-weight: bolder; color: tomato;">A-34 to 38,Ambika Plaza, Bapunagar, Ahmedabad-389016.</h6><br>
                           <h4 style="font-weight: bolder;color:darkorange">Mobile :</h4>
                           <h6  style="font-weight: bolder; color: tomato;">+91 9807651234</h6><br>
                           <h4 style="font-weight: bolder;color:darkorange">Email :</h4>
                           <h6  style="font-weight: bolder; color: tomato;">jeevan@gmail.com</h6><br>
                        
                      </div>
                      <div class="col-sm-6  con1">
                           <form action="#" method="post" onsubmit="">
                               <b style="font-weight: bolder;color: deeppink;">Sno :</b><br>
                               <input type="text" class="form-control" name="sno" value="<?php echo $_SESSION['sno']; ?>"  placeholder="Patients Code" style="width:100%;" ><br>
                               <b style="font-weight: bolder;color: deeppink;">Sname :</b><br>
                               <input type="text" class="form-control input-field" value="<?php echo $_SESSION['sname']; ?>" name="sname"  placeholder="Patients Name" style="width:100%;" ><br>
                               <b style="font-weight: bolder;color: deeppink;">Image :</b><br>
                               <input  class="form-control input-filed"  value="<?php echo $_SESSION['image']; ?>" name="image" style="width:100%; "><br>
                               <b style="font-weight: bolder;color: deeppink;">Rating :</b><br>
                               <select name="rating" class="rating" id='rating<?php echo $product_id; ?>' data-id='rating' style="width:100%;">
                                  <option value="1">&nbsp;&nbsp;  1  &nbsp;&nbsp;</option>
                                  <option value="2">&nbsp;&nbsp;  2  &nbsp;&nbsp;</option>
                                  <option value="3">&nbsp;&nbsp;  3  &nbsp;&nbsp;</option>
                                  <option value="4">&nbsp;&nbsp;  4  &nbsp;&nbsp;</option>
                                  <option value="5">&nbsp;&nbsp;  5  &nbsp;&nbsp;</option>
                               </select><br><br>
                               <b style="font-weight: bolder;color: deeppink;">Suggestion :</b><br>                             
                               <textarea class="form-control" rows="3" placeholder="Write your review here..." name="discription" style="width:100%;" required></textarea><br><br>
                           
                               <div class="btn1">
                               <input class="btn-success" type="submit" name="rev_save" style="padding:10px;" value="save">
                               <input class="btn-warning" type="submit" name="rev_update" style="padding:10px;" value="update">
                             </div>
                           </form>
                      </div>
                  </div>
                
       </div>      
    </section>
</div>
      <div id="aboutus" class="container-fluid  py-5" style="background: url(images/light.jfif);background-size:cover">
               <h1 class="heading" style="color: yellow; margin-top: 180px;" >About Us</h1>
               <div class="row" id="news">
                    <div class="col-lg m-auto text-center">
                  
                         <input type="email" class="px-3" placeholder="Enter your email">
                         <button type="submit"class="btn2 mb-5">Submit</button>
                    </div>
                </div>
               <div class="row">
             
                   <div class="col-lg-6 py-3">
                       <h1 class="text-success text-center mb-3 p-3">JEEVAN HOSPITAL</h1>
                       <h6 style="font-size:x-large;color:rgb(255, 217, 0); text-align: center; padding: 10px;">Branch :</h6>
                       <h5 style="color: chocolate;text-align: center; padding: 20px;">A-34 to 38,Ambika Plaza, Bapunagar, Ahmedabad-389016.</h5>
                       <p style="color:darkorchid; text-align: center; margin-top: 30px; font-weight: bold; padding: 20px;">Lorem ipsum dolor sitamet, consectetu adipisicing elit. Fuga culpa eveniet id, sequi illum ex natus et debitis itaque blanditiis in quasmolestias,  assumenda ducimus, autem quo doloribus. Ad, voluptas.</p>
                   </div>
                   <div class="col-lg-2 py-3">
                     <h5 class="pb-3 text-danger text-center" style="font-size:x-large;"> Links</h5>
                     <p style="text-align:center; color: yellowgreen; font-weight: bolder;">Home</p>
                     <P style="text-align:center; color: yellowgreen; font-weight: bolder;">Facility</P>
                     <p style="text-align:center; color: yellowgreen; font-weight: bolder;">Doctors</p>
                     <p style="text-align:center; color: yellowgreen; font-weight: bolder;">Department</p>
                     <p style="text-align:center; color: yellowgreen; font-weight: bolder;">Appointment</p>
                     <p style="text-align:center; color: yellowgreen; font-weight: bolder;">Review</p>
                     <p style="text-align:center; color: yellowgreen; font-weight: bolder;">About Us &#169</p>
                   </div>    
                   <div class="col-lg-2 py-3">
                     <h5  class="pb-3 text-success text-center" style="font-size:x-large;">Contact Us</h5>
                     <p style="text-align:center; color:orangered; font-weight: bolder;">jeevan@gmail.com</p>
                     <P style="text-align:center; color:orangered; font-weight: bolder;">+261 9876543</P>
                     <p style="text-align:center; color:orangered; font-weight: bolder;">Mo:+91 9807651234</p>
                     <p style="text-align:center; color:orangered; font-weight: bolder;">HEAD: Ahmedabad</p>
                     <p style="text-align:center; color:orangered; font-weight: bolder;">NO 1 Hospital </p>
                   </div>
                   <div class="col-lg-2 py-3">
                     <h5  class="pb-3 text-primary text-center" style="font-size:x-large;">Share</h5>
                     <img src="images/facebook.png" alt="Facebook" width="40px" >
                     <img src="images/twit.png" alt="Twitter" width="40px"><br>
                     <img src="images/insta.png" alt="Instagram" width="40px">
                     <img src="images/whatts.png" alt="WhatsApp" width="40px"><br>
                     <img src="images/tele.png" alt="Telegram" width="40px">
                     <img src="images/youtube.png" alt="YouTube" width="70px"><br>
                   </div>
                </div> 
                <hr>    
                   <p class="text-center  text-light">&#169 Copyright All Rights Reserved  &nbsp; &nbsp;|&nbsp; &nbsp; This Templete Is Made By Vivek Chudasama.</p>          
            </div>
   
        </div>
    </div>
</body>
</html>