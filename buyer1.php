<!DOCTYPE html>
<html lang="en">
<head>
  <title>Get on Rent</title>
  <?php include 'links.php'; ?>
  <link rel="stylesheet" href="stylebuyer.css">
  </head>
<body>
    
<!--div class="container register"!>-->
    <div class="row">
        
        <div class="col-md-12">
            <!--div class="tab-content" id="mytabcontent"!>-->
                <!--div class="tab-pane fade show active"id="home" role="tabpanel" aria-labelledby="home-tab"!>-->
                        <h3 class="register-heading">Get on Rent</h3>
                        
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
                                     <input type="text" class="form-control" placeholder="Preferred Location"name="location" value=""required/>
                                    </div>
                            
                                
                                <!--</div>-->

                                <!--<div class="col-md-6">-->

                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Rent Range"name="price" value=""required/>
                                    </div>

                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Details"name="details" value=""required/>
                                    </div>
                           
                                    <!--<input type="submit" class="btnRegister" onclick="how.php" name="submit" value="Register"/>-->
                                    <!--<input type="submit" class="btnRegister" onclick="how.php" name="submit" value="Register"/>-->
                                    <input type="submit" class="btnRegister"  name="submit" value="Register Free"/> 
                                    <a href="shortlistforbuyer1.php">View Availability </a>
                                    <a href="how.php">Get Contact Details for Availability </a>        
                         
                            </div>
                        </div>
                        
                    </form>
                       
                <!--/div!>-->
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

    
    $insertquery="INSERT INTO buyer1(Name,Phone,Preferred_Location,Rent_Range,Details)VALUES('$name','$phone','$location','$price','$details')";


    
    $res=mysqli_query($con,$insertquery);
    
    if($res){
        ?>
        <script>
            alert("Your details have been inserted in the database. It will be published after our review. (Pls call 9746389999 for immediate review). Please click on 'Get Contact Details for Availability' button to proceed further.");
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