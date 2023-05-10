<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>view</title>
</head>
<body>
    <style>
        body{
            
            background: linear-gradient(67deg, #33ccff , #ff99cc );
        }
      
        .box-container{
            padding-bottom:50px;
            margin:auto;
            border-radius:10px;
        }
        .box-container .box1{
            width: 300px;
          
            text-align:center;
            background-color:aquamarine ;
             border-radius: 15px;
             box-shadow:2px 10px 12px rgb(71, 72, 94);
        
             box-sizing:border-box;
             margin-bottom: 35px;          
        }
   
        .box-container .box1 h3{
            color: rgb(212, 0, 255);
            font-size: 1.5rem;    padding: .5rem 0;           
        }
        .box-container .box1 .img{
            padding:10px ;     line-height: 1.8;         
            font-size: 1.6rem;         padding-top: 4rem;
            background-color: rgb(63, 245, 103);
            border-bottom-left-radius: 100px;
            border-bottom-right-radius:100px ;
        }  
    
       .img2 img{
              width: 100%;
             border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .img1 img{
         
            height: 140px;
            border-radius: 50%;
            width: 140px;
            position: relative;
            display: block;
            margin-left: auto;
            margin-right:auto ;
            z-index: 1;
            border:5px solid #fff;
            margin-top: -80px;
        }
        .social{
            padding-bottom: 20px;

        }
        .social i{
            padding: 10px;
            font-size: 20px;
            color: darkcyan;

        }

        .appoidt{
            padding-bottom:50px;
            margin:15px 10px;
            border-radius:10px;
            background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
        }

        .checked{  color: rgb(238, 255, 0); }  

    </style>
        <div>
            <a href="show.php">
                <button class="btn-lg m-5 btn btn-success" style="margin-right: 130px;" >Back</button> 
            </a>
        </div>  
     
       <?php

        $db = mysqli_connect("localhost", "root", "", "test");
        $sname = $_GET['sname'];
        $showquery="select * from patients where sname='$sname'";
        $showdata=mysqli_query($db,$showquery);
        $arrdata=mysqli_fetch_array($showdata);
      
      ?> 
 <div class="profile-area"> 
 <div class="container " style="margin-bottom:30px;" >
        <h1 style="padding-top:30px;text-align:center;color:blue; ">Profile</h1>
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
               <div class="box-container " style="text-align: center;  padding-top: 35px;">
                    <div class="box1" style="margin-left: 50px; padding-bottom:20px;">        
                        <div class="img2"><img src="image/prof.jpg" ></div>
                        <div class="img1"><img  width="100px" src="./image/<?php echo $arrdata['image']; ?>"></div>
                        <div class="main-text">
                            <h2><?php echo $arrdata['sname']; ?></h2>
                            <div class="row ml-5">
                                <b>Sno :</b>
                                <p><?php  echo $arrdata['sno']; ?></p></div>
                            <div class="row ml-5">
                                <b>Email :</b>
                                <p><?php  echo $arrdata['email']; ?></p></div>
                            <div class="row ml-5">
                                <b>Password :</b>
                                <p><?php  echo $arrdata['password']; ?></p></div>
                            <div class="row ml-5">
                                <b>Gender :</b>
                                <p><?php  echo $arrdata['gender']; ?></p></div>
                            <div class="row ml-5">
                                <b>DOB :</b>
                                <p><?php  echo $arrdata['dob']; ?></p></div>
                            <div class="row ml-5">
                                <b>Blood :</b>
                                <p><?php  echo $arrdata['blood']; ?></p></div>
                            <div class="row ml-5">
                                <b>Mobile :</b>
                                <p><?php  echo $arrdata['mobile']; ?></p></div>
                            <div class="row ml-5">
                                <b>City :</b>
                                <p><?php  echo $arrdata['city']; ?></p></div>
                        </div>
                        <div class="social">
                                <i class="fa fa-facebook"></i>
                                <i class="fa fa-linkedin"></i>
                                <i class="fa fa-twitter"></i>
                                <i class="fa fa-dribbble"></i>
                        </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>   
</div>

<?php 

$db = mysqli_connect("localhost", "root", "", "test");
$sname=$_GET['sname'];

 $sql = "select * from  appoint  where  sname='$sname' ";  
 $result = mysqli_query($db, $sql);
$showdata=mysqli_query($db,$showquery);
$row=mysqli_fetch_array($showdata);
?>
<h1 class=" text-center" style="padding-top:130px;color:blue;">Appointment</h1>   
    <section id="appo" style="padding-bottom:80px; padding-top:30px;">
        <div class="container" style=" display:grid; max-width:1800px;margin:0 auto;gap:3rem; grid-template-columns:repeat(auto-fit,30rem); justify-content:center;" >

    <?php
    
    if ($result)
     {
    
      while($row = mysqli_fetch_array($result))
     {
    ?>
    <div class="appoidt">
        <div class="media p-3">
            <div class="media-left">
                <?php 
                $db = mysqli_connect("localhost", "root", "", "test");
                $sname = $_GET['sname'];
                $showquery="select * from patients where sname='$sname'";
                $showdata=mysqli_query($db,$showquery);
                $arrdata=mysqli_fetch_array($showdata);

                ?>
                    <img  width="100px" src="./image/<?php echo $arrdata['image']; ?>" style="border:3px solid green;">
                    <h5 style="text-align:center; padding:5px;"><?php echo $arrdata['sno']; ?></h5>
            </div>
            <div class="media-body p-3">
                 <h4 class="media-heading"><?php echo $arrdata['sname']; ?></h4>
                 <p>Gender :<?php echo $arrdata['gender']; ?></p>
                 <p> Date of birth :<?php echo $arrdata['dob']; ?></p>
                 <p>Mobile No. :<?php echo $arrdata['mobile']; ?></p>
                 <p>City :<?php echo $arrdata['city']; ?></p>
                 
            </div>
        </div>
        <hr>
        <div class="media p-3">
            <div class="media-body">  
                 <h4 class="media-heading"><?php echo $row['doctornm']; ?></h4>
                 <p>Department Name :<?php echo $row['departnm']; ?></p>
                 <p>Fees :  ₹<?php echo $row['fees']; ?></p>
                 <p>Appointment Date :<?php echo $row['datetime']; ?></p>
            </div>
            <div class="media-right  ">
                     <div style="background-color: rgb(249, 234, 137);;text-align: center;border: 2px dotted orange;padding:5px; ">
                        <p>Appointment Id :<br><?php echo $row['aid']; ?></p> 
                     </div>
            </div>
         
        </div>
      
     <form method="POST">
        <input type="hidden" name="aid" value="<?php echo $row['aid']; ?>">
        <input type="submit" value="Payment" class="btn-lg btn-center btn-outline-success"style="margin-left:160px;" name="payment_check" >
     </form>
     <br>
     <input type="submit" value="DELETE" style="margin-left:170px;" class="btn-sm  btn-danger"  onclick=location.href="adappodelete.php?aid=<?php echo $row['aid']; ?>">
    </div>


    
    <?php
     }
    } 
    ?>
    <?php
    if(isset($_POST['payment_check'])){
$db = mysqli_connect("localhost", "root", "", "test");
$aid=$_POST['aid'];
$appo="select * from payment where  aid='$aid' and status='Completed' ";

  $result = mysqli_query($db, $appo);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
while($row = mysqli_fetch_array($result))
{

?>
  
 <div class="container mt-5">
       <div class="alert alert-success"><strong> Success: </strong>Payment Sucessfully Done.</div>
 </div>
 <?php
             }}}
  ?>
      <?php
            if(isset($_POST['payment_check'])){
                $db = mysqli_connect("localhost", "root", "", "test");
                $aid=$_POST['aid'];
                $appo="select * from payment where  aid='$aid' ";
             
                  $result = mysqli_query($db, $appo);
                 $num_rows = mysqli_num_rows($result);
                if($num_rows > 0){
                    while($row = mysqli_fetch_array($result))
                    {
                   
                    }}
                 else{        
                     ?>
                        <div class="container mt-5">
                          <div class="alert alert-danger"><strong> warning: </strong>Payment Take Action.</div>
                         </div>    
                     <?php
                    }}
           ?>

<?php
    if(isset($_POST['payment_check'])){
$db = mysqli_connect("localhost", "root", "", "test");
$aid=$_POST['aid'];

 $sql = "select * from  payment  where  aid='$aid' and status='pending' ";  
$result = mysqli_query($db, $sql);
$num_rows = mysqli_num_rows($result);
if($num_rows > 0){
while($row = mysqli_fetch_array($result))
{
?>
               <div class="container mt-5">
                <div class="alert alert-warning"><strong> warning: </strong>Payment Is a Pending.    </div>
               </div>
     <?php
    }}}
     ?>   
        </div>
    </section>

    <?php

$db = mysqli_connect("localhost", "root", "", "test");
$sname=$_GET['sname'];
$sql="select * from rating_data where sname='$sname'";
$result = mysqli_query($db, $sql);
            


if ($result)
 {

  while($rev = mysqli_fetch_array($result))
 {
?>   
<section id="review" > 
            <h1 class="text-center" style="padding-top:90px;padding-bottom:30px;color:blue;">Review</h1>
            
            <div class="box-container container" >
         

    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
                <div class="box1" style="margin-left: 50px; padding-bottom:25px;">
                    <div class="img">
                    <?php 
                $db = mysqli_connect("localhost", "root", "", "test");
                $sname = $_GET['sname'];
                $showquery="select * from patients where sname='$sname'";
                $showdata=mysqli_query($db,$showquery);
                $arrdata=mysqli_fetch_array($showdata);

                ?>
                        <img  class="image rounded-circle" style="width: 50%;" src="./image/<?php echo $arrdata['image']; ?>">
                        <h3><?php echo $rev['sname']; ?></h3>
                        <?php 
                  $favcolor =$rev['rating'];

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

                    <h5 style="color:chocolate;  font-weight: bolder;padding: 15px;"><?php echo $rev['discription']?></h5>
                  
                </div>                 
          
                <?php
                 
                }}
                else{
                    echo"no data";
                }
                ?>
            </div>
            <div class="col-sm-4">
            </div>
          </div>
        </div>
    </section>
            
</body>
</html>