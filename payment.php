
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link href="side1.css" rel="stylesheet">
    <title>Payment</title>
    <style>
        body{
            background: linear-gradient(57deg,rgb(182, 227, 249),rgb(254, 241, 156));
        }
      
       .sucpay{
            border-radius: 20px;
            /* background: linear-gradient(to bottom, #c0f2a6,rgb(110, 227, 151)); */
            background-color: #c0f5cc;
            /* background-image: radial-gradient(circle, #6aa7ec, #00c3f5, #00d8d6, #45e69b, #bde95c); */
            width: 700px;
            padding: 25px;
            margin-bottom:25px;
            margin: 0px auto 0;
            box-shadow: 0px 0px 20px rgb(0,0,0,0.5);
        }
        .sucpay h1 {
            background-color: rgb(249, 234, 137);
            color: red;
            font-size: 24px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px solid orange;
        }    
        .sucpay b{
          color:blue;
        }
        .sucpay h5 u{
          color: rgb(255, 0, 247);
        }
        .sucpay p{
          color: rgb(255, 0, 70);
        }
        .sucpaypen{
            border-radius: 20px;
            background-color: #c0f5cc;
            width: 470px;
            padding: 25px;
            margin-bottom:25px;
            margin: 0px auto 0;
            box-shadow: 0px 0px 20px rgb(0,0,0,0.5);
        }
        .sucpaypen h1 {
            background-color: rgb(249, 234, 137);
            color: red;
            font-size: 24px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px solid orange;
        }    
        .sucpaypen input{
          width:99%;
        }
        .sucpaypen b{
          color:blue;
        }
        .sucpaypen h5 u{
          color: rgb(255, 0, 247);
        }
        .sucpaypen p{
          color: rgb(255, 0, 70);
        }
    </style>

</head>
<body style="background:linear-gradient()">
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
            <a href="profile.php">
                <button class="btn-lg  btn btn-success" style="margin-right: 130px;" >Profile</button> 
            </a>
        </div>   
    
    </div>
</header>
    <?php $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
     
     $f=true;
       if(isset($_POST["pay_save"])){
        $aid=$_GET['aid'];
        $sname=$_POST['sname'];
        $doctornm=$_POST['doctornm'];
        $fees=$_POST['fees'];
        $banknm=$_POST['banknm'];
        $accountno=$_POST['accountno'];
        $ifsccode=$_POST['ifsccode'];
        $date=$_POST['date'];
        $status=$_POST['status'];
        if(empty($banknm))
        {
         ?>
         <div class="container " style="padding-top:140px;">
     <div class="alert alert-danger"><strong> warning: </strong>Enter Valid Bank Name </div>
   </div>
   <?php
        $f=false;
        }
     
        if(strlen($accountno)==11)
        {;}else{
        ?>
         <div class="container" style="padding-top:140px;">
             <div class="alert alert-danger"><strong> warning: </strong>Account No is Invalid length</div>
          </div>
        <?php
        $f=false;
        }
      if(is_numeric($accountno))
      { ; }
      else
      {
      ?>
      <div class="container" style="padding-top:140px;">
        <div class="alert alert-danger"><strong> warning: </strong>Enter Numeric Account No</div>
      </div>
    <?php

      $f=false;
    }

      
      if(strlen($ifsccode)==11)
        {;}else{
         ?>
         <div class="container " style="padding-top:140px;">
     <div class="alert alert-danger"><strong> warning: </strong>Invalid IFSC  Code</div>
   </div>
   <?php
        $f=false;
        }
    

       if($f==true)
       {    
             $queryup="update payment set banknm='$banknm',ifsccode='$ifsccode',accountno='$accountno', date='$date',status='Completed' where aid='$aid' ";
               $result1 = mysqli_query($con,$queryup) or  die('Record not updated');
       }  } 
                ?>
                <?php
                   $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
                    $aid=$_GET['aid'];
                    $appo="select * from payment where  aid='$aid' and status='Completed' ";
                    // $appo="select * from appoint where  aid='$aid'  ";
                      $result = mysqli_query($con, $appo);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            while($row = mysqli_fetch_array($result))
            {
              
                    ?>    
                   
                   <h1 class="text-center" style="padding-top:140px;"></h1>
                    <div class="sucpay" >
                    <h1 class="text-center">Invoice</h1>
                    <div class="container mt-3">
                <div class="alert alert-success"><strong> Success: </strong>Payment Sucessfully Done.  Visit Again   Thank You  !!</div>
               </div><hr>
              
                    <?php
                    $appo="select * from payment where  aid='$aid' ";
                      $result = mysqli_query($con, $appo);
                    $num_rows = mysqli_num_rows($result);
                     if($num_rows > 0){
                   while($res = mysqli_fetch_array($result))
                     {
                    ?>
                    <input type="text" name="status" value="<?php echo $res['status']; ?>" ><br><br>
                    <?php
                     }}
                    ?>
              
              </form> 
       
            
              <div  class="container-fluid">
                <div class="row">
                  <div class="col-lg-6">
                      <h6 class="mb-5 text-secondary"><b>PID :  </b><?php echo $row['pid'];?></h6> 
                  </div>
                  <div class="col-lg-6" >
                      <h6 class="mb-5  text-secondary" style="text-align:right;"><b>PDate :  </b><u><?php echo $row['date'];?></u></h6>
                  </div>
                </div>
              </div>
              
              <div  class="container-fluid">
                <div class="row">
                  <div class="col-lg-7 mb-5">
                      <h5><u>Patients Details :</u></h5><br>
                      <p><b>Sno :</b>   <?php echo $_SESSION['sno'];?></p> 
                      <p><b>Name :</b>   <?php echo $_SESSION['sname'];?></p> 
                      <p><b>Gender :</b>   <?php echo $_SESSION['gender'];?></p> 
                      <p><b>Blood Group :</b>   <?php echo $_SESSION['blood'];?></p> 
                      <p><b>Email :</b>   <?php echo $_SESSION['email'];?></p> 
                      <p><b>Mobile No. :</b>   <?php echo $_SESSION['mobile'];?></p> 
                  </div>
                  <div class="col-lg-5 mb-5" >
                  <h5><u>Hospital Details :</u></h5><br>
                  <h4 style="color:chocolate;font-weight: bolder;">JEEVAN HOSPITAL</h4> <br>
                  <p><b>Address :   </b>A-34 to 38,Ambika Plaza, Bapunagar, Ahmedabad-389016.</p> 
                  <p><b>Eamil :   </b>jeevan@gmail.com</p> 
                  <p><b>Mobile No. :   </b>+91 9807651234</p> 
                  </div>
                </div>
              </div>
                <table class="table table-hover bg-light">
                  <thead>
                    <tr style="background-color: rgb(184, 181, 253);">
                      <th scope="col">Srno.</th>
                      <th scope="col">Discription</th>
                      <th scope="col" style="width: 30px;"></th>
                      <th scope="col">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Appointment Fees</td>
                      <td></td>
                      <td>₹<?php echo $row['fees'];?></td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                     
                      <td colspan="2"></td>
                      <td>Total Amount:</td>
                      <td>₹<?php echo $row['fees'];?></td>
                    </tr>
                  </tbody>
                </table>
                <div  class="container-fluid">
                  <div class="row">
                  <div class="col-lg-6 mb-5">
                      <h5><u>Bank Details :</u></h5><br>
                      <p><b>Name :</b>   <?php echo $row['banknm'];?></p> 
                      <p><b>Account No. :</b>   <?php echo $row['accountno'];?></p> 
                      <p><b>IFSC Code :</b>   <?php echo $row['ifsccode'];?></p> 
               
                  </div>
                    <div class="col-lg-6 pt-5" >
                    <img src="image/signature.png" alt="" width="1500" height="300" class="img-fluid">
                    <h5 class="text-center"><u>Signature</u></h5>
                    </div>
                  </div>
                </div>
                  <h6 class="text-center " style="color:green;">Thank You !!</h6>
                    </div>
                     
                   <h1 class="text-center" style="padding-top:30px;"></h1>
           <?php
                      }}
           ?>
           <?php
             $aid=$_GET['aid'];
             $appo="select * from payment where  aid='$aid' ";
               $result = mysqli_query($con, $appo);
              $num_rows = mysqli_num_rows($result);
             if($num_rows > 0){
              while($row = mysqli_fetch_array($result))
              {
              }}
              else{
              
           ?>   
              <h1 class="text-center" style="padding-top:140px;"></h1>
              <div class="sucpay" >
                <h1 class="text-center">Payment</h1>
                <div class="container "  style="padding-top:30px;">
                    <div class="alert alert-danger"><strong> warning: </strong>Please Pending_Payment After Successfully Payment</div>
                 </div>
              </div>    
           <?php
              }
           ?>
           <?php
             $aid=$_GET['aid'];
                    $appo="select * from payment where  aid='$aid' and status='pending' ";
                    
                      $result = mysqli_query($con, $appo);
                     $num_rows = mysqli_num_rows($result);
                    if($num_rows > 0){
                      while($row = mysqli_fetch_array($result))
                     {
              
                    ?>
                   <h1 class="text-center" style="padding-top:140px;"></h1>
                    <div class="sucpaypen" >
                    <h1 class="text-center">Payment</h1>
                    <div class="container mt-5">
                       <div class="alert alert-warning"><strong> warning: </strong>Payment Is a Pending    </div>
                    </div><hr>
                 <form name="payform" method="post" action="#">
                    <b>Patients Name :</b><br>
                    <input type="text" name="sname" value="<?php echo $_SESSION['sname'];?>" ><br><br>
                    
                     <?php
                      $appo="select * from appoint where  aid='$aid'  ";
                      $result = mysqli_query($con, $appo);
                     $num_rows = mysqli_num_rows($result);
                    if($num_rows > 0){
                      while($row = mysqli_fetch_array($result))
                     {
                     ?>
                      <b>Doctor Name:</b><br>
                    <input type="text" name="doctornm" value="<?php echo $row['doctornm'];?>"><br><br>
                    <b>Fees :</b><br>
                    <input type="text" name="fees" value="<?php echo $row['fees'];?>"><br><br>
                    <?php
                     }}
                    ?>
                    <b>Bank Name :</b><br>
                    <input type="text" name="banknm"  ><br><br>
                    <b>Bank A/c No :</b><br>
                    <input type="text" name="accountno"><br><br>
                    <b>IFSC Code :</b><br>
                    <input type="text" name="ifsccode" ><br><br>
                    <b>Date :</b><br>
                    <input type="date" name="date" ><br><br>
              
                    <?php
                    $appo="select * from payment where  aid='$aid' ";
                      $result = mysqli_query($con, $appo);
                    $num_rows = mysqli_num_rows($result);
                     if($num_rows > 0){
                   while($row = mysqli_fetch_array($result))
                     {
                    ?>
                    <input type="hidden" name="status" value="<?php echo $row['status']; ?>" ><br><br>
                    <?php
                     }}
                    ?>
                    <input type="submit" value="Pay Now"class="bg-success  pt-2 pb-2" style="border-radius:20px;color:rgb(249, 234, 137);font-size:20px;" name="pay_save" >
                </form>
                    </div>
                          
                   <h1 class="text-center" style="padding-top:30px;"></h1>
           <?php
                      }}
           ?>
 
</body>
</html>