<?php

session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="side1.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideUp(4000).slideDown(4000);
            });
        });
    </script>
    <style>
         .box{
             width: 300px;  height: 350px;
             background: linear-gradient(30deg,blue,coral);
             border-radius: 10px;    display:inline-block;
             box-shadow:2px 10px 12px rgb(156, 136, 136);
             box-sizing:border-box;      margin: 20px;
         }
         .box h5{
            padding: 10px;      text-align: center;
            font-weight: bolder;
             color: rgb(252, 255, 71);  font-size: larger;        
         }
         .box h2{
             margin: 3px;  padding: 10px; 
            text-align: center; font-weight: bolder;
             color:rgb(72, 255, 0);
         }
         .box img{  margin:10px 35px; }
         #panel, #flip {
             font-size: 18px;   text-align: center;
             background:linear-gradient(57deg,orange,yellowgreen);
             padding: 5px;   border-radius: 3px;
             border: solid 1px rgb(122, 84, 84);
        }
        #panel {  color: white;  padding: 50px;  }
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
            <a href="main1.php">
                <button class="btn-lg  btn btn-success" style="margin-right: 130px;" >Home</button> 
            </a>
        </div>     
    </div>
    
</header>
    <div id="department" style="padding-top: 140px; padding-left: 40px;padding-right: 40px; margin-bottom: 30px;">
        <div id="flip" style="color: purple;font-weight: bolder; text-align: center;padding: 20px;"><h2 >Department</h2></div>
        <div id="panel" style="padding-top:20px ;">
        <div class="box">
            <h2>Pathology</h2>
            <img src="images/pathology.jfif"  style="width: 70%;" class="img-fluid">
            <h5>It Studies And Analysis Samples .</h5>
        </div>  
        <div class="box">
            <h2>Cardiology</h2>
            <img src="images/cardiology.jfif"   style="width: 65%;" class="img-fluid">
            <h5>It Specializes In Heart .</h5>
        </div>
        <div class="box">
            <h2>Physiotherapy</h2>
            <img src="images/physiotherapy.jfif"   style="width: 70%;" class="img-fluid">
            <h5>It Designs Special Exercises For Patients .</h5>
        </div>  
        <div class="box">
            <h2>Orthopaediecs</h2>
            <img src="images/orthopedic.jfif"   style="width: 78%;" class="img-fluid">
            <h5>It Treats Bones .</h5>
        </div>  
        <div class="box">
            <h2>Neurology</h2>
            <img src="images/neurology.jfif"  style="width: 70%;" class="img-fluid">
            <h5>It Treats Disorders Of The Nervous System .</h5>
        </div>  
        <div class="box">
            <h2>Haematology</h2>
            <img src="images/blood1.jfif"  style="width: 70%;"  class="img-fluid">
            <h5>It Studies Blood Discorders .</h5>
        </div> 
        <div class="box">
            <h2>Surgery</h2>
            <img src="images/sergery.jfif"   style="width: 75%;" class="img-fluid">
            <h5>It Performs Operation On Patients .</h5>
        </div> 
        <div class="box">
            <h2>Pharmacy</h2>
            <img src="images/pharmcy.jfif"   style="width: 75%;" class="img-fluid">
            <h5>It Dispenses Medicine .</h5>
        </div> 
        <div class="box">
            <h2>Dermatology</h2>
            <img src="images/dermatology.jfif"  style="width: 70%; "  class="img-fluid">
            <h5>It Treats Diseases Of The Skin .</h5>
        </div> 
      </div>
      </div>
</body>
</html>
