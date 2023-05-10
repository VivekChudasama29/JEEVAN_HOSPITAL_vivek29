
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>ADMIN</title>
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
    </style>
   
    <div classs="container   pl-3 " style="margin: 55px 8px 25px 8px;">
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-6">
                <h2 style="color:chocolate ;font-weight: bolder;text-align: center;">JEEVAN HOSPITAL</h2><br>
                <h3 style="color: rgb(255, 0, 191);font-weight: bolder;text-align: center;">ADMIN LOGIN</h3><br>
                <?php
                             session_start();
                          $con=mysqli_connect("localhost","root","","test");
                         if(isset($_POST['submit'])){
                            if(isset($_POST['ademail']) && isset($_POST['adpswd'])){
                                $ademail=$_POST['ademail'];
                                $adpswd=$_POST['adpswd'];
                                $check="select * from admin where ademail='$ademail' and adpswd='$adpswd'";
                                $result=mysqli_query($con,$check);
                                if(mysqli_num_rows($result)>0){
                                    while($row=mysqli_fetch_assoc($result)){
                                        $_SESSION['adid']=$row['adid'];
                                        $_SESSION['adminnm']=$row['adminnm'];
                                        $_SESSION['ademail']=$row['ademail'];
                                        $_SESSION['adpswd']=$row['adpswd'];
                                        $_SESSION['admob']=$row['admob'];
                                       header("location:show.php?adminnm='".$row['adminnm']."'");
                                    
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
                        ?><br>
                <div class="admlog container  pr-5 pl-5 " style="padding-top:50px; background-color:yellowgreen; border-radius: 25px;">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="images/admin1.png" width="300px;"height="250px;" >
                        </div>
                        <div class="col-sm-6" >
                        <form name="adlogin" method="post" action="">
                            <div class="input-icons">
                                <i class="fa fa-envelope icon"></i>
                            <input type="email" class="form-control input-field" name="ademail" id="email" placeholder="Email Id" ></div><br>
                            <div class="input-icons">
                                <i class="fas fa-key icon"></i>
                            <input type="password" class="form-control input-field" name="adpswd" id="password"  ></div><br>	
                            <div class="form-group form-check">                        
                                <input class="form-check-input" type="checkbox" required>Remember Me  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
                                <a href="#" style="color: blue;">Forget Password ?</a>
                            </div><br>
                        
                            <input class="btn btn-success"   style="width:45%; margin-right: 25px;"  type="submit"  value="Submit" name="submit" >
                            <!-- <a href="view.php?sid=<?php echo $row['sid']; ?>"><img width="30px" height="30px" src="./image/edit.png"></a> -->
                            <input class="btn btn-danger " style="width:45%;" type="reset" value="Reset" >    <br><br> <br>
                        </form>   
                        </div>
                    </div>
                </div>   
           
                <div class="col-sm-2">

                </div>
            </div>
        </div>
    </div>
</body>
</html>