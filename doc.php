<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Doctor </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link href="side1.css" rel="stylesheet">
        <script>
        $(document).ready(function(){
             $(".b1").click(function(){
             $(".form1").slideToggle("slow");
              });
        });
        </script>
        
    </head>
    <body>
        <style>
          .box-container .box2{
            width: 350px;   border-radius: 15px;
            text-align: center;      margin: 15px;  
            background:linear-gradient(white,rgb(90, 88, 88),white);
             box-shadow:2px 10px 12px rgb(71, 72, 94);
             display:inline-block;   box-sizing:border-box;                
        }
        .box-container .box2 .image{
            margin:25px ; transition: 1s;    border:3px solid orangered;  }     
        .box-container .box2 .image:hover{
            transform: scale(1.2);
            border: 3px groove blue ;
        }
        .box-container .box2 h1{
            color: rgb(239, 251, 10);
            font-size: 1.5rem;
            padding: .5rem 0;
        }
        body{
            background: linear-gradient(57deg,rgb(182, 227, 249),rgb(254, 241, 156));
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
        img {
            margin:25px ;       transition: 1s;
        }
        
        img:hover{
            transform: scale(1.2);
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
    <?php

$db = mysqli_connect("localhost", "root", "", "test");

$sql = "select * from  doctor";  
$result = mysqli_query($db, $sql);

?>
      <section id="doctors1">
        
        <div id="demo2" class="carousel slide" data-ride="carousel">
        
           
  <div id="doctors" > 
               <h1 class="text-danger text-center" style="padding-top:130px;">Doctors</h1>
                  <div class="container-fluid">
                      <div class="box-container mb-5  ml-3 pt-3 pr-3 pl-3 pb-5" style="margin-right:100px;" >
<?php

if ($result)
 {

  while($row = mysqli_fetch_array($result))
 {
?>
                         <div class="box2" style="margin-left: 50px;padding-bottom: 70px; ">
                                  <img  class="image rounded-circle" style="width: 50%;" src="./image/<?php echo $row['drimg']; ?>">
                                  <h1> <?php echo $row['doctornm']?></h1><br>
                                  <h5 style="color: aqua;"><?php echo $row['departnm']?></h5><br><br>
                                  <h5 style="color:blue;"><?php echo $row['email']?></h5><br>
                                  <h5 style="color: rgb(255, 0, 0);padding: 15px;">Mo :<?php echo $row['mobile']?></h5><br>
                                  <h5 style="color:rgb(255, 8, 132)">Available on<?php echo $row['day']?></h5><br>
                                  <h5 style="color:green">Fees :  ₹<?php echo $row['fees']?></h5>
                          </div>

          

<?php
 }
} 
?>

                   
                    </div>   
                  </div>
            </div>
    
</div>
</section>
    </body>
</html>