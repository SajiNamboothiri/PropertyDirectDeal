<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sell Your Property</title>
  <?php 
  include 'links.php';
  
  /*include 'bbb.css';
  
  */
  
  
   ?>
  
  <link rel="stylesheet" href="styleseller.css">
  </head>

<body>
<!--div class="container register"-->
    <div class="row">
        <div class="col-md-12 register">
            <!--div class="tab-content" id="mytabcontent"-->
                <!--div class="tab-pane fade show active"id="home" role="tabpanel" aria-labelledby="home-tab"-->
                <!--/div!>-->
                         <h3 class="register-heading">Sell Your Property</h3>
                         
                    <form action="" method="POST">
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                         <input type="text" class="form-control" placeholder="Name"name="name" value=""required/>
                                </div>
                                <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Phone"name="phone" value=""required/>
                                </div>
                                <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Location"name="location" value=""required/>
                                </div>
                                <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Minimum Price"name="price" value=""required/>
                                </div>
                                
                            <!--</div>-->

                            <!--<div class="col-md-6">-->

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Details"name="details" value=""required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Google Maps Link"name="map_link"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Video Link"name="video_link"/>
                                </div>

                                    <input type="submit" class="btnRegister" name="submit" value="Register Free"/> 
                                    <a href="shortlistforseller.php">View Buyers </a>
                                    <a href="shortlistforbuyer.php">View Sellers </a>
                                    <a href="how.php">Get Contact Details of Buyers </a>
                                    
                                                       
                            </div>
                        </div>
                    </form>
                          
                             
                </div>
            <!--/div!>-->
        </div>
    </div>
<!--/div!>-->


</body>
</html>
<?php include 'connection.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $location=$_POST['location'];
    $price=$_POST['price'];
    $details=$_POST['details'];
    $map_link=$_POST['map_link'];
    $video_link=$_POST['video_link'];
    
    $insertquery="INSERT INTO seller(Name,Phone,Location,Minimum_Price,Details,Google_Maps_Link,Video_Link)VALUES('$name','$phone','$location','$price','$details','$map_link','$video_link')";


    
    $res=mysqli_query($con,$insertquery);
    
    if($res){
        ?>
        <script>
            alert("Your details have been inserted in the database. It will be published after our review. (Pls call 9746389999 for immediate review). Please click on 'Get Contact Details of Buyers' button to proceed further.");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data Not Inserted");
        </script>
        <?php
    
    }
}




?>