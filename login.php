<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    session_start();
    $con=mysqli_connect("localhost","root","","test");
        if(isset($_POST['submit'])){
            if(isset($_POST['email']) && isset($_POST['password'])){
                $email=$_POST['email'];
                $password=$_POST['password'];
                $check="select * from patients where email='$email' and password='$password'";
                $result=mysqli_query($con,$check);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        $_SESSION['sid']=$row['sid'];
                        $_SESSION['sno']=$row['sno'];
                        $_SESSION['blood']=$row['blood'];
                        $_SESSION['image']=$row['image'];
                        $_SESSION['sname']=$row['sname'];
                        $_SESSION['email']=$row['email'];
                        $_SESSION['password']=$row['password'];
                        $_SESSION['dob']=$row['dob'];
                        $_SESSION['city']=$row['city'];
                        $_SESSION['gender']=$row['gender'];
                        $_SESSION['mobile']=$row['mobile'];
                        header("location:main1.php?sno='".$row['sno']."' ");
                   
                    }
                }else{
                   ?>
                   <div class="container mt-5">
                  <div class="alert alert-warning"><strong> warning: </strong> Incorrect Email and password</div>
                </div>
                   <?php
                }
            }
        }
        
    ?>

<section class="contact">
    <div class="container m-5 p-5">
        <div class="row">
            <div class="col-sm-6" id="emp"  >
                <div class="left pb-5">
                     <h1 style="color:rgb(252, 208, 11); text-align: center;">Login </h1>
                     <br><br>
                    <h4 class="mt-3 mb-3 p-3" style="color:rgb(0, 255, 136)">Welcome To Our Jivan Jyot Hospital</h4>
                    <br><br>
                    <div id="testy1">
                    <h5 class="text-warning"><span style="color: darkred;"></span>   Happy Life is Healthy Life.</h5><br><br>
                    <h5 class="text-light"><span style="color: darkred;"></span>   Stay Home , Stay Safe</h5><br>
                    <h5 style="color:chartreuse;"><span style="color: darkred;"></span>   You Can Not Enjoy Your Wealth ,If You Can Not Enjoy Your Health.</h5><br>
                    <h5 style="color: rgb(78, 104, 34);"><span style="color: darkred;"></span>   Health  Is  Wealth.</h5><br>
                    <h5 class="text-danger"><span style="color: darkred;"></span>   Eat The Best , Leave The Rest.</h5><br>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right" >
                    <h2 style="color:orangered; text-align: center;">JEEVAN HOSPITAL  </h2>
                    <br><br>
              
                        
                    <div class="container   mr-3 ml-3  p-3   " >
                        <form name="myform" method="POST" enctype="multipart/form-data">
                           
                       
                        <div class="input-icons">
                                <i class="fa fa-envelope icon">
                              </i>
                            <input type="email" class="form-control input-field" name="email" id="email" placeholder="Email Id" ></div><br>
                            <div class="input-icons">
                                <i class="	fas fa-key icon">
                              </i>
                            <input type="password" placeholder=" Password" class="form-control input-field" name="password" id="password"  ></div><br>	
                            <div class="form-group form-check">                        
                                <input class="form-check-input" type="checkbox" required>Remember Me  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                                <a href="#" style="color: blue;">Forget Password ?</a>
                            </div><br>
                        
                            <input class="btn btn-success"   style="width:45%;" type="submit"  value="Submit" name="submit" >
                            <input class="btn btn-danger " style="width:45%;" type="reset" value="Reset" >    <br><br> <br>
                            <p>Don't  have an account?<a style="padding-left: 20px;color:blue;" href="registration.php">Registration Now</a></p>
                            
                            <hr><br>
                            <input class="btn btn-lg"type="button" onclick="location.href='registration.php'" style="background-color: aqua; width: 100%;" value="Create Account">
                            <br><br><br>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>