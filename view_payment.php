
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
    <title>Payment</title>
</head>
<body>
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


       if($f==true)
       {    
             $queryin="update payment set banknm='$banknm',ifsccode='$ifsccode',accountno='$accountno', date='$date',status='Completed' where aid='$aid' ";
               $result1 = mysqli_query($con,$queryin) or  die('Record not inserted');
       }  } 
                ?>

                
                <form name="payform" method="post" action="#">
                    <?php
                   $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
                    $aid=$_GET['aid'];
                    $appo="select * from payment where  aid='$aid' and status='Completed' ";
                      $result = mysqli_query($con, $appo);
        $num_rows = mysqli_num_rows($result);
        if($num_rows > 0){
            while($row = mysqli_fetch_array($result))
            {
              
                    ?>
                    <h1 class="text-center">Payment</h1>
                    <div class="container mt-5">
                <div class="alert alert-success"><strong> Success: </strong>Payment Sucessfully Done.  Visit Again   Thank You  !!</div>
               </div>
       
                    <b>Appointment Id:</b>
                    <input type="text" name="aid" value="<?php echo $row['aid'];?>" ><br><br>
                    <b>Patients Name :</b>
                    <input type="text" name="sname" value="<?php echo $_SESSION['sname'];?>" ><br><br>
                    <b>Fees :</b>
                    <input type="text" name="fees" value="<?php echo $row['fees'];?>"><br><br>
                    <b>Bank Name :</b> 
                    <input type="text" name="banknm" value="<?php echo $row['banknm'];?>" ><br><br>
                    <b>Bank A/c No :</b>
                    <input type="text" name="accountno" value="<?php echo $row['accountno'];?>"><br><br>
                    <b>IFSC Code :</b>
                    <input type="text" name="ifsccode" value="<?php echo $row['ifsccode'];?>"><br><br>
                    <b>Date :</b>
                    <input name="date" value="<?php echo $row['date'];?>"><br><br>
                    <b>Status :</b>
                    <?php
                    $appo="select * from payment where  aid='$aid' ";
                      $result = mysqli_query($con, $appo);
                    $num_rows = mysqli_num_rows($result);
                     if($num_rows > 0){
                   while($row = mysqli_fetch_array($result))
                     {
                    ?>
                    <input type="text" name="status" value="<?php echo $row['status']; ?>" ><br><br>
                    <?php
                     }}
                    ?>
              
                </form>
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
              <div class="container mt-5">
                <div class="alert alert-danger"><strong> warning: </strong>Please Pending_Payment After Successfully Payment</div>
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
                    <h1 class="text-center">Payment</h1>
                    <div class="container mt-5">
                <div class="alert alert-warning"><strong> warning: </strong>Payment Is a Pending    </div>
               </div>
                    <b>Patients Name :</b>
                    <input type="text" name="sname" value="<?php echo $_SESSION['sname'];?>" ><br><br>
                    
                     <?php
                      $appo="select * from appoint where  aid='$aid'  ";
                      $result = mysqli_query($con, $appo);
                     $num_rows = mysqli_num_rows($result);
                    if($num_rows > 0){
                      while($row = mysqli_fetch_array($result))
                     {
                     ?>
                      <b>Doctor Name:</b>
                    <input type="text" name="doctornm" value="<?php echo $row['doctornm'];?>"><br><br>
                    <b>Fees :</b>
                    <input type="text" name="fees" value="<?php echo $row['fees'];?>"><br><br>
                    <?php
                     }}
                    ?>
                    <b>Bank Name :</b>
                    <input type="text" name="banknm"  ><br><br>
                    <b>Bank A/c No :</b>
                    <input type="text" name="accountno"><br><br>
                    <b>IFSC Code :</b>
                    <input type="text" name="ifsccode" ><br><br>
                    <b>Date :</b>
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
                    <input type="submit" name="pay_save" >
                </form>
           <?php
                      }}
           ?>
 
</body>
</html>