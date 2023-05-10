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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="side1.css" rel="stylesheet">
    <title>Profile</title>
</head>
<body>

    <style>
        /* profile */
        body{
            
            background: linear-gradient(67deg, #33ccff , #ff99cc );
        }
        .box-container .box1{
            width: 300px;
            text-align: center;
            background-color:aquamarine ;
             border-radius: 15px;
             box-shadow:2px 10px 12px rgb(71, 72, 94);
             display:block;
             box-sizing:border-box;
             /* margin: 15px;           */
        }
        .checked{  color: rgb(238, 255, 0); }  
        /* .box-container .box1 .img2{
           
                  border:3px solid orangered;        
        }      */
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
        /* .profile-area{
            padding:80px 0;
        } */
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
        .btn1 input{
            width: 150px;
            margin: 10px;
            padding: 10px;
            border-radius: 20px;
        }
    </style>
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

      

     <!-- profile --> 
       <?php

$db = mysqli_connect("localhost", "root", "", "test");
$sname = $_SESSION['sname'];
$showquery="select * from patients where sname='$sname'";
$showdata=mysqli_query($db,$showquery);
$arrdata=mysqli_fetch_array($showdata);

?> 
     <?php  if (isset($_SESSION['email'])) : ?>
   
    <div class="container " style="margin-bottom:30px;" >
        <h1 style="padding-top:140px;text-align:center;color:blue; ">Profile</h1>
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
               <div class="box-container " style="text-align: center;  padding-top: 35px;">
                    <div class="box1" style="margin-left: 50px; padding-bottom:20px;">        
                       
                        <div class="img2"><img src="image/prof.jpg" ></div>
                        <div class="img1"><img  width="100px" src="./image/<?php echo $arrdata['image']; ?>"></div>
                        <div class="main-text">
                            <h3><?php echo $arrdata['sname']; ?></h3>
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
                        <button class="btn btn-block  btn-light" style="padding: 10px 25px;" ><a href="updateuser.php?sid=<?php echo $_SESSION['sid']; ?>">Update</a></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>   
    <?php endif ?>   
    <style>
/*  Appointment   */
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

/* review & rating */
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
    </style>
    <!-- appointment -->
    <!-- <?php 
     $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
     
     $f=true;
       if(isset($_POST["appoint_save"])){
        $sno=$_POST['sno'];
        $sname=$_POST['sname'];
       
       $doctornm=$_POST['doctornm'];
       $departnm=$_POST['departnm'];
        $datetime=$_POST['datetime'];
        if(empty($sno))
        {
         ?>
           
        <?php
            $f=false;
        }
        
        if(strlen($sname)<=0)
        {
         ?>
        <?php
            $f=false;
        }

  
      
    
    if($f==true)
    {    $qry="SELECT * FROM doctor WHERE doctornm='$doctornm'";
        $result = mysqli_query($con,$qry);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
          $queryin="insert into appoint(sno,sname,doctornm,departnm,datetime)values('$sno','$sname','$doctornm','$departnm','$datetime')";
            $result1 = mysqli_query($con,$queryin) or  die('Record not inserted');
                $res = mysqli_query($con,"SELECT * FROM appoint ");
        }else{
            ?>
            <?php
        } 
       }
       }
    ?>
 <?php 
        
        $db = mysqli_connect("localhost", "root", "", "test");
        if(isset($_POST['apdepart']))
        {
       $doctornm=$_POST['doctornm'];
        $sql = "select departnm,day from  doctor  where doctornm='$doctornm'";  
        $result = mysqli_query($db, $sql);
        if ($result)
        {
       
         while($row = mysqli_fetch_array($result))
        {
        ?>
     
            <?php
 }
} }
?>
       -->
    <style>
        .appoidt{
            padding-bottom:50px;
            margin:25px;
            border-radius:10px;
            background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);;

        }
    </style> 
        <h1 class=" text-center" style="padding-top:130px;color:blue;">Appointment</h1>  
    <?php 

    $db = mysqli_connect("localhost", "root", "", "test");
    $sname=$_SESSION['sname'];
   
    if(isset($_POST["appo_pay"]))
    {  $aid=$_POST['aid'];
       $fees=$_POST['fees'];
       if($f=true)
       {$sql = "select * from payment where aid='$aid' ";
       $result = mysqli_query($db,$sql) or die("Query unsuccessful") ;
           if (mysqli_num_rows($result) > 0) {
            ?>
                    <div class="container mt-5">
                <div class="alert alert-warning"><strong> warning: </strong>Payment is Already Action.</div>
              </div>
             <?php
           } else {
       $queryin="insert into payment(aid,fees,status)values('$aid','$fees','pending')";
       $result1 = mysqli_query($db,$queryin) or  die('Record not inserted');
 
    }}}
    $sql = "select * from  appoint  where  sname='$sname' ";  

    $result = mysqli_query($db, $sql);
    
    ?>

 
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
                $sname = $_SESSION['sname'];
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
      <div class="btn1">
      
        <form  method="post">
                 <input type="hidden" name="aid" value="<?php echo $row['aid']; ?>" >
                 <input type="hidden" name="fees" value="<?php echo $row['fees']; ?>" >
                 <input type="submit" value="Pending_Payment" class="btn-sm btn-center btn-warning" style="margin-left:150px;" name="appo_pay" >
        </form>
        <input type="submit" value="Payment" class="btn-lg btn-center btn-success"style="margin-left:60px;"  onclick=location.href="payment.php?aid=<?php echo $row['aid']; ?>">
        <input type="submit" value="DELETE" class="btn-sm btn-center btn-danger"  onclick=location.href="appodelete.php?aid=<?php echo $row['aid']; ?>">
      </div>
    </div>


    
    <?php
     }
    } 
    ?>
        
        </div>
    </section>
    
    <?php

$db = mysqli_connect("localhost", "root", "", "test");
$sname=$_SESSION['sname'];
$sql="select * from rating_data where sname='$sname'";
$result = mysqli_query($db, $sql);
            


if ($result)
 {

  while($rev = mysqli_fetch_array($result))
 {
?>   
<section id="review" > 
            <h1 class="text-center" style="padding-top:130px;padding-bottom:30px;color:blue;">Review</h1>
            
            <div class="box-container container mb-5" >
         

    <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
                <div class="box1" style="margin-left: 50px; padding-bottom:25px;">
                    <div class="img">  <?php 
                $db = mysqli_connect("localhost", "root", "", "test");
                $sname = $_SESSION['sname'];
        
                $showquery="select * from patients where sname='$sname'";
                $showdata=mysqli_query($db,$showquery);
                $arrdata=mysqli_fetch_array($showdata);

                ?>
                       <img  class="image rounded-circle" style="width: 50%;" src="./image/<?php echo $arrdata['image']; ?>">
                        <h3><?php echo $arrdata['sname']; ?></h3>
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

     
     <!-- 

      <?php
    $f=true;
	 $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
	        if(isset($_POST["rev_save"])){
                $sno=$_POST['sno'];
                $sname=$_POST['sname'];
                $image=$_POST['image'];
                $rating=$_POST['rating'];
                $discription=$_POST['discription'];
	
                if($f=true)
                {$sql = "select * from rating_data where sno='{$sno}' or sname='{$sname}'";
                $result = mysqli_query($con,$sql) or die("Query unsuccessful") ;
                    if (mysqli_num_rows($result) > 0) {
                     ?>
                      <?php
                    } else {
                $q="insert into rating_data(sno,sname,image,rating,discription)values('$sno','$sname','$image','$rating','$discription')";
                $res=mysqli_query($con,$q) or die('Record not inserted');
                $result = mysqli_query($con,"SELECT * FROM rating_data");
            }}}
            if(isset($_POST["rev_update"])){
                $sno=$_POST['sno'];
                $sname=$_POST['sname'];
                $image=$_POST['image'];
                $rating=$_POST['rating'];
                $discription=$_POST['discription'];
               
                $db = mysqli_connect("localhost", "root", "", "test");
                $sql = "update rating_data set  rating='$rating',discription='$discription' where sno='$sno' and sname='$sname'";
                $result=mysqli_query($db, $sql);
                if($result){
                }else{?><?php
                }
            }
               
	?> 
               
        <?php

$db = mysqli_connect("localhost", "root", "", "test");

$sql="select * from rating_data order by sno asc";
$result = mysqli_query($db, $sql);

?>

            
<?php

if ($result)
 {

  while($row = mysqli_fetch_array($result))
 {
?>

 
              
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
                      
          
                <?php
                 
                }}
                else{
                    echo"no data";
                }
                ?>
      
           -->

</body>
</html>