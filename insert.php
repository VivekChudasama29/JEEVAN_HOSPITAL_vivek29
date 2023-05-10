
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>  
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
            /* background: linear-gradient(to bottom, #c0f2a6,rgb(110, 227, 151)); */
            background-color:	#99FF66;
            width: 470px;
            padding: 25px;
            margin: 55px auto 40px;

            box-shadow: 0px 0px 20px rgb(0,0,0,0.5);
        }    
    </style>
    <?php
error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
$f=true;
if (isset($_POST['save'])) {
  // $sid=$_POST['sid'];
  $sno=$_POST['sno'];
  $sname=$_POST['sname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $blood=$_POST['blood'];
  $date=$_POST['date'];
  $city=$_POST['city'];
  $mobile=$_POST['mobile'];
    $image = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $image;
 
    $db = mysqli_connect("localhost", "root", "", "test");
    if(empty($sno))
         {
          ?>
          <div class="container mt-5">
      <div class="alert alert-danger"><strong> warning: </strong>Enter Valid Patient No </div>
    </div>
    <?php
         $f=false;
         }
         function checkemail($str) {
           return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
     }
     if(!checkemail($email)){
      ?>
      <div class="container mt-5">
  <div class="alert alert-danger"><strong> warning: </strong>Invalid Email Address</div>
</div>
<?php
     }
     else{
     
     }
     if(strlen($password)<= 8)
     {
      ?>
      <div class="container mt-5">
  <div class="alert alert-danger"><strong> warning: </strong>Password length is more than 8 character</div>
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
       
       if(strlen($mobile)==10)
         {;}else{
          ?>
          <div class="container mt-5">
      <div class="alert alert-danger"><strong> warning: </strong>Invalid Mobile  No</div>
    </div>
    <?php
         $f=false;
         }
       if(is_numeric($mobile))
         { ; }
       else
       {
        ?>
        <div class="container mt-5">
    <div class="alert alert-danger"><strong> warning: </strong>enter value for student mobile number</div>
  </div>
  <?php
    
         $f=false;
       }
  if($f==true)
  { $sql = "select * from  patients where sno='{$sno}' or email='{$email}'";
  $result = mysqli_query($db,$sql) or die("Query unsuccessful") ;
      if (mysqli_num_rows($result) > 0) {
       ?>
               <div class="container mt-5">
           <div class="alert alert-warning"><strong> warning: </strong>Patients is Already Exists.</div>
         </div>
        <?php
      } else {
    // Get all the submitted data from the form
    $sql = "insert into patients (sno,sname,email,password,gender,blood,image,dob,mobile,city) VALUES ('$sno','$sname','$email','$password','$gender','$blood','$image','$date','$mobile','$city')";
 
    // Execute query
    $result=mysqli_query($db, $sql);
    if($result){
        // echo "Data inserted Successfully";
        header('location:show.php');
    }else{
         die("Not inserted");
    }
    ?> 
    <div class="container pt-3">
      <div class="alert alert-success"><strong> Success : </strong>Patients Add Successfully .</div> 
    </div>
    <?php
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
  }}
?>
    <h1 style="padding-top: 30px;text-align: center;color:rgb(255, 166, 1)">JEEVAN HOSPITAL</h1>
        <div class="appform form1">
                <h2 style="text-align:center;color:blue">Add Patients</h2><br>
                  <form action="" method="POST" enctype="multipart/form-data">
                      <div class="input-icons">
                          <i class="	far fa-dot-circle icon"></i>
                      <input type="text" class="form-control input-field" name="sno" id="sno" placeholder="Patients No" ></div><br>
                      <div class="input-icons">
                          <i class="fas fa-user-alt icon"></i>
                      <input type="text" class="form-control input-field" name="sname" id="sname" placeholder="Patients Name" ></div><br>
                      <div class="form control bg-white"style="width:100%;">
                      <div class="input-icons">
                          <i class="fa fa-venus-double icon"></i>
                            <label style="margin-left:50px;" >Male</label>
                            <input type="radio" value="Male"   name="gender"  class="gender">
                            <label style="margin-left:50px;">Female</label>
                            <input type="radio" value="Female"  name="gender"  class="gender">
                      </div></div><br>
                      <div class="input-icons">
                          <i class="fa fa-envelope icon"></i>
                      <input type="text" class="form-control input-field" name="email" id="email" placeholder="Email Id" ></div><br>
                      <div class="input-icons">
                          <i class="	fas fa-key icon"></i>
                      <input type="password" class="form-control input-field" name="password" id="password"  ></div><br>	
                      <div class="input-icons">
                          <i class=" fa fa-file-photo-o icon"></i>
                      <input class="form-control p-5 input-field" type="file" name="image" value="" required></div><br>
                      <div class="input-icons">
                          <i class="material-icons icon">date_range</i>
                      <input type="date" class="form-control input-field" name="date" id="date" required></div><br>
                      <div class="form control bg-white"style="width:100%;">
                      <div class="input-icons">
                          <i class="fa fa-venus-double icon"></i>
                            <label style="margin-left:50px;" >A+</label>
                            <input type="radio" value="A+"   name="blood"  >
                            <label style="margin-left:50px;" >B+</label>
                            <input type="radio" value="B+"   name="blood"  >
                            <label style="margin-left:50px;" >O+</label>
                            <input type="radio" value="O+"   name="blood"  >
                            <label style="margin-left:50px;" >A-</label>
                            <input type="radio" value="A-"   name="blood"  >
                            <label style="margin-left:50px;" >B-</label>
                            <input type="radio" value="B-"   name="blood"  >
                            <label style="margin-left:50px;" >O-</label>
                            <input type="radio" value="O-"   name="blood"  >
                            <label style="margin-left:50px;" >AB+</label>
                            <input type="radio" value="AB+"   name="blood"  >
                            <label style="margin-left:50px;" >AB-</label>
                            <input type="radio" value="AB-"   name="blood"  >  </div></div><br>
                      <div class="input-icons">
                          <i class="fas fa-mobile-alt icon"></i>
                      <input type="text" class="form-control input-field" name="mobile" id="mobile" placeholder="Mobile No" ></div><br>
                      <div class="form control bg-white"style="width:100%;padding:10px; ">
                      <div class="input-icons">
                           <i class="fas fa-city icon"></i>
                      <select name="city" style="margin-left:55px;" required>
                      <option value="">Select</option>
                      <option value="Ahmedabad">Ahmedabad</option>
                      <option value="Amreli">Amreli</option>
                      <option value="Baroda">Baroda</option>
                      <option value="Gandhinagar">Gandhinagar</option>
                      <option value="Surat">Surat</option>
                      <option value="Rajkot">Rajkot</option>
                      <option value="Bhavnagar">Bhavnagar</option>
                      </select>
                      </div></div><br>
           <!-- <div class="input-icons">
               <i class="	fas fa-city icon">
              </i>
            <input type="text" class="form-control input-field" name="city" id="city" placeholder="Enter City" required ></div><br> -->
                    <input type="submit" name="save" value="Save" class="btn btn-block  btn-success" style="padding: 10px;width:100%;">
                    <br><br>
                  </form>
        </div>           
</body>
</html>