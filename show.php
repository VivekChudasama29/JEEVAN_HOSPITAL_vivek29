<?php
session_start();
if (!isset($_SESSION['ademail'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location:adminlogin.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['ademail']);
    header("location:demo.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    <script>
        $(document).ready(function(){
             $(".b1").click(function(){
             $(".form1").slideToggle("slow");
              });
        });
        $(document).ready(function(){
             $(".pat1").click(function(){
             $(".pat2").slideToggle("slow");
              });
        });
    </script>
</head>
<body>

    <style>
            table{

        background-color: rgb(126, 193, 117);
        margin: 40px 20%;
        padding: 30px;
        position:absolute;
        width: 800px;
        height: 200px;
        border: blue;
        box-shadow: 2px 2px 12px #908359, -1px -1px 8px #908359;
    }
    tr{
        cursor: pointer;
        transition: all .2s ease-in;
        
    }
    thead{
        color:darkgreen;
        font-size: medium;
        background-color: aqua;
    }
    
    thead,td{
        padding: 12px;
        text-align: center;
        border-bottom: 2px solid #908359;
    }

   

          .box-container .box2{
            width: 350px;   border-radius: 15px;
            text-align: center;      margin: 15px;  
            background:linear-gradient(white,rgb(90, 88, 88),white);
             box-shadow:2px 10px 12px rgb(71, 72, 94);
             display:inline-block;   box-sizing:border-box;                
        }
        .box-container .box2 .image{
            margin:25px ;     border:3px solid orangered;  }     
        .box-container .box2 h1{
            color: rgb(239, 251, 10);
            font-size: 1.5rem;
            padding: .5rem 0;
        }
        body{
            background: linear-gradient(57deg,rgb(182, 227, 249),rgb(254, 241, 156));
        
        }
        .myform{
            margin:100px 50px;
            padding: 30px;
            background-color:rgb(212, 249, 135);
            border-radius: 40px;
            border:3px solid red;
            
        }
        input{
            width:99%;
            padding: 1px;
            border-radius: 10px;
            padding-left:10px;
          
        }
        h2{
            padding: 30px;
            text-transform: uppercase;
            font-size: x-large;
            font-weight: bolder;
            color: blue;
            background-color: chartreuse;
            text-align: center;
        }
        b{
            color: darkblue;
            

        }
        .check input{
            width: auto;
   
        }
        .btn1 input{
            width: 150px;
            margin: 30px;
            padding: 10px;
            border-radius: 20px;
        }
        
        .sea{
        width:35%;
        padding: 3px;
        border:3px solid blue;
        padding-left:10px;
        margin-right:25px;
      
    } 
    .btn2{
        padding: 5px;
        width:15%;
        background-color:green;
        color:yellow;
        border-radius:20px;
       
    }
    .adm .b1{
       
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
        .adm h1 {
            background-color: rgb(249, 234, 137);
            color: rgb(255, 0, 247);
            font-size: 24px;
            padding: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px dotted orange;
        }
      
        .adm b{
            color:rgb(13, 33, 255);
        }
        .adm span{
            color:green;
        }
        .adm{
            border-radius: 20px;
            background-color: #f2e5a6;
            width: 470px;
            padding: 25px;
            margin: 55px auto 0;
            box-shadow: 0px 0px 20px rgb(0,0,0,0.5);
        }    
    </style>

       <div class="container">
                    
            <h1 style="padding-top: 30px;text-align: center;color:rgb(255, 166, 1)">JEEVAN HOSPITAL</h1>
            <div class="container">
            <div class="adm">
                <h1>Admin Profile</h1>
                <b>Name :&nbsp;&nbsp; </b><span> <?php  echo  $_SESSION['adminnm'] ;?></span><br>
                <b>Email :&nbsp;&nbsp;</b><span> <?php  echo  $_SESSION['ademail'] ;?></span><br>
                <b>Mobile No. :&nbsp;&nbsp;</b><span> <?php  echo  $_SESSION['admob'] ;?></span><br><br>
                <form method="post">
                    <input type="submit" class="btn btn-block btn-danger" name="logout" value="Logout" >
                </form> 
            </div>
            

            </div>
            <div  style="text-align: center;">
                <input style="border-radius:20px;margin-top:25px; width:150px;" class="btn-success b1 p-3" type="button" name="doc" value="Doctor ">
            </div>
        <?php
        $f=true;
          $con=mysqli_connect("localhost","root","","test") or die("Connection Failed");
          //  $db=mysql_select_db("phpmyadmin",$con) or die("databases not connect");
      
            if(isset($_POST["doc_save"])){
                $doctornm=$_POST['doctornm'];
                $departnm=$_POST['departnm'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $day=$_POST['day'];
                $fees=$_POST['fees'];
                 $drimg = $_FILES["image"]["name"];
                 $tempname = $_FILES["image"]["tmp_name"];
                 $folder = "./image/" . $drimg;
                 $chk="";  
                foreach($day as $chk1)  
                 {  
                   $chk .= $chk1.",";  
                 }
                 if(strlen($doctornm)<=0)
                 {
                 ?>
                         <div class="container mt-5">
                         <div class="alert alert-danger"><strong> warning: </strong>Invalid Doctor Name</div>
                         </div>
                 <?php
                         $f=false;
                 }
 
                 if(strlen($departnm)<=0)
                 {
                 ?>
                         <div class="container mt-5">
                         <div class="alert alert-danger"><strong> warning: </strong>Invalid Department Name</div>
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
                else{ }
     
            
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
                        <div class="alert alert-danger"><strong> warning: </strong>Only Nummeric  Mobile Number</div>
                        </div>
                <?php
                        $f=false;
                }

                if(is_numeric($fees))
                { ; }
                else
                {
                ?>
                        <div class="container mt-5">
                        <div class="alert alert-danger"><strong> warning: </strong>Enter valid Fees.</div>
                        </div>
                <?php
                        $f=false;
                }
                if($f==true)
                {$sql = "select * from  doctor where doctornm='{$doctornm}' or email='{$email}'";
                 $result = mysqli_query($con,$sql) or die("Query unsuccessful") ;
                     if (mysqli_num_rows($result) > 0) {
                      ?>
                              <div class="container mt-5">
                          <div class="alert alert-warning"><strong> warning: </strong>Doctors is Already Exists.</div>
                        </div>
                       <?php
                     } else {
                $q="insert into doctor(doctornm,departnm,email,drimg,mobile,day,fees)values('$doctornm','$departnm','$email','$drimg','$mobile','$chk','$fees')";
                $res=mysqli_query($con,$q) or die('Record not inserted');
                $result = mysqli_query($con,"SELECT * FROM doctor");
                // if($res){
                //     // echo "Data inserted Successfully";
                //     header('location:docdata.php');
                // }else{
                //      die("Not Inserted");
                // }
                ?> 
                <div class="container pt-3">
                <div class="alert alert-success"><strong> Success : </strong>Doctor Add Successfully .</div> 
                </div>
             <?php
                
                if (move_uploaded_file($tempname, $folder)) {
                    echo "";
                } else {
                    echo "";
                }
            }}}
            if(isset($_POST["doc_update"])){
                $doctornm=$_POST['doctornm'];
                $departnm=$_POST['departnm'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $day=$_POST['day'];
                $fees=$_POST['fees'];
                 $drimg = $_FILES["image"]["name"];
                 $tempname = $_FILES["image"]["tmp_name"];
                 $folder = "./image/" . $drimg;
                 $chk="";  
                 foreach($day as $chk1)  
                  {  
                    $chk .= $chk1.",";  
                  }
                
               if(strlen($doctornm)<=0)
                {
                ?>
                        <div class="container mt-5">
                        <div class="alert alert-danger"><strong> warning: </strong>Invalid Doctor Name</div>
                        </div>
                <?php
                        $f=false;
                }
  
               if(strlen($departnm)<=0)
                {
                ?>
                        <div class="container mt-5">
                        <div class="alert alert-danger"><strong> warning: </strong>Invalid Department Name</div>
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
                else{ }
     
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
                        <div class="alert alert-danger"><strong> warning: </strong>Only Numeric Mobile Number</div>
                        </div>
                <?php
                        $f=false;
                }

                if(is_numeric($fees))
                { ; }
                else
                {
                ?>
                        <div class="container mt-5">
                        <div class="alert alert-danger"><strong> warning: </strong>Enter valid Fees.</div>
                        </div>
                <?php
                        $f=false;
                }
                if($f==true){
                $sql = "select * from  doctor where doctornm='{$doctornm}' ";
                $result = mysqli_query($con,$sql) or die("Query unsuccessful") ;
                    if (mysqli_num_rows($result) > 0) {
                        $q="update doctor set  departnm='$departnm',email='$email',drimg='$drimg',mobile='$mobile',day='$chk',fees='$fees' where doctornm='$doctornm'";
                $res=mysqli_query($con,$q) or die('Record not updated');
                
                ?> 
                <div class="container pt-3">
                <div class="alert alert-success"><strong> Success : </strong>Doctor Update Data Successfully .</div> 
                </div>
             <?php
                if (move_uploaded_file($tempname, $folder)) {
                    echo "";
                } else {
                    echo "";
                }
                    } else {?>
                        <div class="container mt-5">
                        <div class="alert alert-warning"><strong> warning: </strong>Doctor Name is not Available..</div>
                      </div>
                      <?php
            }}}
            if(isset($_POST["doc_delete"])){
                $doctornm=$_POST['doctornm'];
               
                if(strlen($doctornm)<=0)
                {
                ?>
                        <div class="container mt-5">
                        <div class="alert alert-danger"><strong> warning: </strong>Invalid Doctor Name</div>
                        </div>
                <?php
                        $f=false;
                }
                if($f=true){
                    $sql = "select * from  doctor where doctornm='{$doctornm}' ";
                    $result = mysqli_query($con,$sql) or die("Query unsuccessful") ;
                        if (mysqli_num_rows($result) > 0) {
                            $q="delete from doctor where doctornm='$doctornm' ";
                            $res=mysqli_query($con,$q) or die('Record not deleted');
                            if($res)
                            {
                              
                            }
                   
                    ?> 
                    <div class="container pt-3">
                      <div class="alert alert-success"><strong> Success : </strong>Doctor Delete Data Successfully .</div> 
                    </div>
                 <?php
                        } else {?>
                          <div class="container mt-5">
                        <div class="alert alert-warning"><strong> warning: </strong>Doctor Name is not Available..</div>
                      </div>
                    <?php
            }}}
        ?>
   
    
    <div class="myform form1">
        <h2>Doctor</h2><br>
        <form method="POST" action="" name="myform" enctype="multipart/form-data">      
            <b>Doctor Name : </b><br>
            <input type="text" name="doctornm" ><br><br>
            <b>Department Name : </b><br>
            <select name="departnm" style="width:99%;" >
            <option value="">Select</option>
            <option value="Pathology">Pathology</option>
            <option value="Cardiology">Cardiology</option>
            <option value="Physiotherapy">Physiotherapy</option>
            <option value="Orthopaediecs">Orthopaediecs</option>
            <option value="Neurology">Neurology</option>
            <option value="Haematology">Haematology</option>
            <option value="Surgery">Surgery</option>
            <option value="Pharmacy">Pharmacy</option>
            <option value="Dermatology">Dermatology</option>
            
            </select><br><br>

                <b>Email :</b><br>
               <input type="email" name="email" ><br><br>
           
                <b>Image :</b>
                <input  type="file" name="image" value="" required><br><br>

                <b>Mobile :</b><br>
               <input type="tel" name="mobile" ><br><br>
         
                <b>Day :</b><br>
                <div class="check" >
               &nbsp &nbsp<input  type="checkbox" name="day[]" value="Monday">Monday  &nbsp &nbsp
               <input type="checkbox" name="day[]" value="Tuesday"> Tuesday &nbsp &nbsp
               <input type="checkbox" name="day[]" value="Wednesday"> Wednesday &nbsp &nbsp
               <input type="checkbox" name="day[]" value="Thursday"> Thursday &nbsp &nbsp
               <input type="checkbox" name="day[]" value="Friday"> Friday &nbsp &nbsp
               <input type="checkbox" name="day[]" value="Saturday"> Saturday</div><br><br>
           
                <b>Fees :</b><br>
               <input type="text" name="fees" ><br><br>
            <div class="btn1 btn-center">
               <input class="btn-success" type="submit" name="doc_save" value="Submit">
               <input class="btn-warning" type="submit" name="doc_update" value="Update">
               <input class="btn-danger" type="submit" name="doc_delete" value="Delete">
             
            </div>
        </form>
         <button class="btn btn-block style btn-secondary mr-5" style="border-radius: 20px;"  name="doc_view" ><a href="doc.php" ><h4 style="color:white;">View</h4></a></button>
        </div>
    </div>
    <div class="Container" style="text-align: center;">
        <input style="border-radius:20px;margin-top:25px;margin-bottom:25px;  width:150px;" class="btn-primary pat1 p-3" type="button" name="doc" value="Patients "><br/>
        <div class="pat2">
        <button class="btn btn-outline-secondary mr-5" name="btninsert"><a href="insert.php" ><img width="50%" src="./image/add.png"> </a></button><br><br>
            <form method="post">
            
            <button class="btn recordsearch btn-outline-secondary  mr-5"> <img width="50%" src="./image/search.png"> </button>
            <button class="btn recordall btn-outline-secondary" style="padding:20px;"><input type="submit" style="padding:30px;" value="All Patients" name="alldata" ></button>
   </form>
            <br><br>
            <div class="search">
            <form method="POST" name="formsearch"> 
                 <input type="text" class="sea" name="txtsearch" placeholder="Enter your Text">
                 <input type="submit"class="btn2 mb-5" name="btnsearch"value="Search">
            </form>
            
            <table border="5">
            <thead>
            <tr><th>ID</th><th>SNO</th><th>Name</th><th>Email</th><th>Blood</th><th>Image</th><th>DOB</th><th>Mobile No</th><th>City</th><th>Action</th><th>Action</th><th>Action</th></tr>
            </thead>
            <?php

            if(isset($_POST['btnsearch'])){
            $con = mysqli_connect("localhost", "root", "", "test");
            $txtval=$_POST['txtsearch'];
             $seque = "select sid,sno,sname,email,blood,image,dob,mobile,city from patients where CONCAT(sid,sno,sname,email,mobile,city) like '%$txtval%' order by sid asc ";
          $resultsear = mysqli_query($con, $seque);
            if (mysqli_num_rows($resultsear)>0)
             {
            
              while($row = mysqli_fetch_array($resultsear))
             {
            ?>
            <tr>
            
            <td ><?php echo $row["sid"];?></td>
            <td ><?php echo $row["sno"];?></td>
            <td><?php echo $row["sname"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["blood"]; ?></td>
            <!-- <td><?php echo $row["password"]; ?></td> -->
            <td>  <img  width="100px" src="./image/<?php echo $row['image']; ?>"></td>  
            <td><?php echo $row["dob"]; ?></td>
            <td><?php echo $row["mobile"]; ?></td>
            <td><?php echo $row["city"]; ?></td>
            
            <td><a href="update.php?sid=<?php echo $row['sid']; ?>"><img width="30px" height="30px" src="./image/edit.png"></a></td>
            <td><a href="delete.php?sid=<?php echo $row['sid']; ?>" ><img width="30px" height="30px" src="./image/delete.png"></a></td>
            <td><a href="view.php?sname=<?php echo $row['sname']; ?>" ><img width="30px" height="30px" src="./image/view.png"></a></td>
            </tr>
               

            <?php
             }
            } }else
            {?>
                <tr>
                    <td  colspan="12"> 
                        <div class="container mt-5">
                            <div class="alert alert-warning"><strong> warning: </strong>Searching Patients are Not Available.  </div>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
         
            </table>
            </div>
        

        <?php

$db = mysqli_connect("localhost", "root", "", "test");
if(isset($_POST['alldata'])){
$sql = "select sid,sno,sname,email,blood,image,dob,mobile,city from patients order by sid asc ";  
$result = mysqli_query($db, $sql);

?>
<div class="allpatients">
<table border="5">
<thead>
<tr><th>ID</th><th>SNO</th><th>Name</th><th>Email</th><th>Blood</th><th>Image</th><th>DOB</th><th>Mobile No</th><th>City</th><th>Action</th><th>Action</th><th>Action</th></tr>
</thead>
<?php

if ($result)
 {

  while($row = mysqli_fetch_array($result))
 {
?>
<tr>

<td ><?php echo $row["sid"];?></td>
<td ><?php echo $row["sno"];?></td>
<td><?php echo $row["sname"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["blood"]; ?></td>
<!-- <td><?php echo $row["password"]; ?></td> -->
<td>  <img  width="100px" src="./image/<?php echo $row['image']; ?>"></td>  
<td><?php echo $row["dob"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["city"]; ?></td>

<td><a href="update.php?sid=<?php echo $row['sid']; ?>"><img width="30px" height="30px" src="./image/edit.png"></a></td>
<td><a href="delete.php?sid=<?php echo $row['sid']; ?>" ><img width="30px" height="30px" src="./image/delete.png"></a></td>
<td><a href="view.php?sname=<?php echo $row['sname']; ?>" ><img width="30px" height="30px" src="./image/view.png"></a></td>
</tr>


<?php
 }
} }
?>

</table>
</div>
</div>
</div>

</body>
</html>