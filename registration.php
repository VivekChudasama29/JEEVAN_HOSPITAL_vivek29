<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
    <style>
       .input-field {
         
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
        .left{
            box-shadow:0px 0px 19px 5px blueviolet;
            width: 100%;
            margin-left: 130px;
            padding: 40px; 
            background:linear-gradient(40deg,skyblue,purple);
        }
        .right{
            box-shadow:0px 0px 19px 5px blueviolet;
            width: 100%;
            margin-left: 100px;padding: 40px;
            background:linear-gradient(40deg,orange,yellowgreen);
        }
          
    </style>
   
     <?php
     error_reporting(0);
      
     $msg = "";
      
     $f=true;
     if (isset($_POST['save'])) {
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
       {
        $sql = "select * from  patients where sno='{$sno}' or email='{$email}'";
         $result = mysqli_query($db,$sql) or die("Query unsuccessful") ;
             if (mysqli_num_rows($result) > 0) {
              ?>
                      <div class="container mt-5">
                  <div class="alert alert-warning"><strong> warning: </strong>Patients is Already Exists.</div>
                </div>
               <?php
             } else {
              $sql1 = "insert into patients (sno,sname,email,password,gender,blood,image,dob,mobile,city) VALUES ('$sno','$sname','$email','$password','$gender','$blood','$image','$date','$mobile','$city')";
      
              $result=mysqli_query($db, $sql1);
            
              if($result){
                  header('location:login.php');
              }else{
                   die("Not inserted");
              }  
              if (move_uploaded_file($tempname, $folder)) {
                echo "";
            } else {
                echo "";
            }
             }
     
         
     }
     }
     ?>
<section class="contact">
    <div class="container m-5 p-5">
        <div class="row">
            <div class="col-sm-6" id="emp" >
                <div class="left pb-5" >
                     <h1 style="color:rgb(252, 208, 11); text-align: center;">Registration </h1>
                     <br><br><br>
                    <h4 class="mt-3 mb-3 p-3" style="color:rgb(0, 255, 136)">Welcome To Our Jivan Jyot Hospital</h4>
                    <br><br><br>
                    <div id="testy1">
                    <h5 class="text-warning"><span style="color: darkred;"></span>   Happy Life is Healthy Life.</h5><br><br><br><br>
                    <h5 class="text-light"><span style="color: darkred;"></span>   Stay Home , Stay Safe</h5><br><br><br><br>
                    <h5 style="color:chartreuse;"><span style="color: darkred;"></span>   You Can Not Enjoy Your Wealth ,If You Can Not Enjoy Your Health.</h5><br><br><br><br>
                    <h5 style="color: rgb(78, 104, 34);"><span style="color: darkred;"></span>   Health  Is  Wealth.</h5><br><br><br><br>
                    <h5 class="text-danger"><span style="color: darkred;"></span>   Eat The Best , Leave The Rest.</h5><br><br><br><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right" >
                    <h2 style="color:orangered; text-align: center;">JEEVAN HOSPITAL  </h2>
                  
                    <div class="container   mr-3 ml-3  p-3  " >
                      <form name="myform" method="POST" enctype="multipart/form-data">
                          <div class="input-icons">
                         <i class="	far fa-dot-circle icon">
                        </i>
                      <input type="text" class="form-control input-field" name="sno" id="sno" placeholder="Patients No" ></div><br>

                            <div class="input-icons">
                                  <i class="fas fa-user-alt icon">
                                 </i>
                            <input type="text" class="form-control input-field" name="sname" id="sname" placeholder="Patients Name" ></div><br>
                            <div class="form control bg-white">
                            <div class="input-icons">
                                <i class="fa fa-venus-double icon">
                              </i>
                                    <label style="margin-left:50px;" >Male</label>
                                    <input type="radio" value="Male"   name="gender"  class="gender">
                                
                                    <label style="margin-left:50px;">Female</label>
                                    <input type="radio" value="Female"  name="gender"  class="gender">
                                </div></div><br>
                            <div class="input-icons">
                                <i class="fa fa-envelope icon">
                              </i>
                            <input type="text" class="form-control input-field" name="email" id="email" placeholder="Email Id" ></div><br>
                            <div class="input-icons">
                                <i class="	fas fa-key icon">
                              </i>
                            <input type="password" class="form-control input-field" name="password" id="password"  ></div><br>	
                            
                            <div class="input-icons">
                                <i class=" fa fa-file-photo-o icon">
                              </i>
                            <input class="form-control p-5 input-field" type="file" name="image" value="" required></div><br>
                            <div class="input-icons">
                                <i class="material-icons icon">date_range
                              </i>
                            <input type="date" class="form-control input-field" name="date" id="date" required></div><br>
                            <div class="form control bg-white"style="width:100%;">
            <div class="input-icons">
                <i class="fa fa-venus-double icon">
              </i>
                    <label style="margin-left:50px;" >A+</label>
                    <input type="radio" value="A+"   name="blood"  >
                    <label style="margin-left:50px;" >B+</label>
                    <input type="radio" value="B+"   name="blood"  >
                    <label style="margin-left:50px;" >O+</label>
                    <input type="radio" value="O+"   name="blood"  >
                    <label style="margin-left:50px;" >AB+</label>
                    <input type="radio" value="AB+"   name="blood"  >
                    <label style="margin-left:50px;" >A-</label>
                    <input type="radio" value="A-"   name="blood"  >
                    <label style="margin-left:50px;" >B-</label>
                    <input type="radio" value="B-"   name="blood"  >
                    <label style="margin-left:50px;" >O-</label>
                    <input type="radio" value="O-"   name="blood"  >
                    <label style="margin-left:50px;" >AB-</label>
                    <input type="radio" value="AB-"   name="blood"  >  </div></div><br>
                            <div class="input-icons">
                                <i class="fas fa-mobile-alt icon">
                              </i>
                            <input type="text" class="form-control input-field" name="mobile" id="mobile" placeholder="Mobile No" ></div><br>
                            <div class="form control bg-white"style="padding:10px; ">
                            <div class="input-icons">
                                <i class="fas fa-city icon">
                              </i>
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
                            <input class="btn btn-success" style="width:45%;" type="submit" name="save" value="Submit" >
                            <input class="btn btn-danger " style="width:45%;" type="reset" value="Reset" >    <br><br>

                            <p>Already  have an account?<a style="padding-left: 20px;" href="login.php">login Now</a></p>
                            
                            
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
</body>
</html>