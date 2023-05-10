<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>
    <style>
        body{
        background-color: aqua;
      }
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
          
	      .input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
          
        .icon {
            padding: 10px;
            color: green;
            min-width: 50px;
            text-align: center;
        }
        .appform{
            border-radius: 50px 0px;
            background-color:	#99FF66;
            width: 470px;
            padding: 25px;
            margin: 55px auto 40px;
            box-shadow: 0px 0px 20px rgb(0,0,0,0.5);
        }    
    </style>
      <?php

$db = mysqli_connect("localhost", "root", "", "test");

$sid = $_GET['sid'];
$showquery="select * from patients where sid='$sid'";
$showdata=mysqli_query($db,$showquery);
$arrdata=mysqli_fetch_array($showdata);

?>
     <?php
error_reporting(0);
$db = mysqli_connect("localhost", "root", "", "test");
 
$msg = "";
$sid = $_GET['sid'];

if (isset($_POST['update'])) {
   

  $sname=$_POST['sname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $date=$_POST['date'];
  $city=$_POST['city'];
  $gender=$_POST['gender'];
  $blood=$_POST['blood'];
  $mobile=$_POST['mobile'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $image;
 
    $db = mysqli_connect("localhost", "root", "", "test");

    $sql = "update patients set sname='$sname',email='$email',password='$password',gender='$gender',blood='$blood',image='$image',dob='$date',mobile='$mobile',city='$city' where  sid='$sid'  ";
 
    $result=mysqli_query($db, $sql);
    if($result){
        header('location:show.php');
    }else{
         die("Not Updated");
    }
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
    <h1 style="padding-top: 30px;text-align: center;color:rgb(255, 166, 1)">JEEVAN HOSPITAL</h1>
        <div class="container">
            <a href="show.php">
                <button class="btn-lg m-5 btn btn-success" style="margin-right: 130px;" >Back</button> 
            </a>
        </div>
        <div class="appform form1">
            <h2 style="text-align:center;color:blue">Update Patients</h2><br>
            <form action="" method="POST" enctype="multipart/form-data"> 
               <div class="input-icons">
                <i class="fas fa-user-alt icon"></i>
                <input type="text" value="<?php echo $arrdata["sname"]; ?>" class="form-control input-field" name="sname" id="sname" placeholder="Patients Name" required></div><br>
                <div class="form control bg-white"style="width:100%;">
                <div class="input-icons">
                    <i class="fa fa-venus-double icon"></i>
                      <label style="margin-left:50px;" >Male</label>
                      <input type="radio" value="Male"  name="gender" class="gender"  <?php if($arrdata['gender']=="Male"){echo "checked"; } ?>>
                      <label style="margin-left:50px;">Female</label>
                      <input type="radio" value="Female" name="gender"  class="gender"  <?php if($arrdata['gender']=="Female"){ echo "checked"; } ?>>
                </div></div><br>
                <div class="input-icons">
                    <i class="fa fa-envelope icon"></i>
                <input type="email" value="<?php echo $arrdata["email"]; ?>" class="form-control input-field" name="email" id="email" placeholder="Email Id" required></div><br>
                <div class="input-icons">
                    <i class="	fas fa-key icon"></i>
                <input type="password"  value="<?php echo $arrdata["password"]; ?>" class="form-control input-field" name="password" id="password" required ></div><br>
                <div class="input-icons">
                    <i class=" fa fa-file-photo-o icon"></i>
                <input class="form-control p-5 input-field" type="file" name="image" required ></div><br>
                <div class="input-icons">
                    <i class="material-icons icon">date_range</i>
                <input type="date" value="<?php echo $arrdata["dob"]; ?>" class="form-control input-field" name="date" id="date" required></div><br>
                <div class="form control bg-white"style="width:100%;">
                <div class="input-icons">
                    <i class="fa fa-venus-double icon"></i>
                      <label style="margin-left:50px;" >A+</label>
                      <input type="radio" value="A+"   name="blood" <?php if($arrdata['blood']=="A+"){ echo "checked"; } ?> >
                      <label style="margin-left:50px;" >B+</label>
                      <input type="radio" value="B+"   name="blood"  <?php if($arrdata['blood']=="B+"){ echo "checked"; } ?> >
                      <label style="margin-left:50px;" >O+</label>
                      <input type="radio" value="O+"   name="blood" <?php if($arrdata['blood']=="O+"){ echo "checked"; } ?>  >
                      <label style="margin-left:50px;" >AB+</label>
                      <input type="radio" value="AB+"   name="blood" <?php if($arrdata['blood']=="AB+"){ echo "checked"; } ?> >
                      <label style="margin-left:50px;" >A-</label>
                      <input type="radio" value="A-"   name="blood"  <?php if($arrdata['blood']=="A-"){ echo "checked"; } ?>>
                      <label style="margin-left:50px;" >B-</label>
                      <input type="radio" value="B-"   name="blood" <?php if($arrdata['blood']=="B-"){ echo "checked"; } ?> >
                      <label style="margin-left:50px;" >O-</label>
                      <input type="radio" value="O-"   name="blood" <?php if($arrdata['blood']=="O-"){ echo "checked"; } ?> >
                      <label style="margin-left:50px;" >AB-</label>
                      <input type="radio" value="AB-"   name="blood"  <?php if($arrdata['blood']=="AB-"){ echo "checked"; } ?>>  </div></div><br>
                <div class="input-icons">
                    <i class="fas fa-mobile-alt icon"></i>
                <input type="tel" value="<?php echo $arrdata["mobile"]; ?>" class="form-control input-field" name="mobile" id="mobile" placeholder="Mobile No" required></div><br>
                <div class="form control bg-white"style="width:100%;padding:10px; ">
                <div class="input-icons">
                    <i class="fas fa-city icon"></i>
              <select name="city" style="margin-left:55px;" required>
              <option value="">Select</option>
              <option value="Ahmedabad"<?php if($arrdata['city']=='Ahmedabad'){echo "selected";} ?>>Ahmedabad</option>
              <option value="Amreli" <?php if($arrdata['city']=='Amreli'){echo "selected";} ?>>Amreli</option>
              <option value="Baroda" <?php if($arrdata['city']=='Baroda'){echo "selected";} ?>>Baroda</option>
              <option value="Gandhinagar"<?php if($arrdata['city']=='Gandhinagar'){echo "selected";} ?>>Gandhinagar</option>
              <option value="Surat"<?php if($arrdata['city']=='Surat'){echo "selected";} ?>>Surat</option>
              <option value="Rajkot"<?php if($arrdata['city']=='Rajkot'){echo "selected";} ?>>Rajkot</option>
              <option value="Bhavnagar"<?php if($arrdata['city']=='Bhvnagar'){echo "selected";} ?>>Bhavnagar</option>
              </select>
              </div></div><br>
              <input type="submit" name="update" value="Update" class="btn btn-block  btn-primary" style="width:100%;padding:10px;">
              <br><br>
            </form>
        </div>
</body>
</html>