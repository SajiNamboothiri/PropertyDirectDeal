<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buy a Property</title>
  <?php include 'links.php'; ?>
  <link rel="stylesheet" href="stylebuyer.css">
  </head>
<body>
    
<!--div class="container register"!>-->
    <div class="row">
        
        <div class="col-md-12">
            <!--div class="tab-content" id="mytabcontent"!>-->
                <!--div class="tab-pane fade show active"id="home" role="tabpanel" aria-labelledby="home-tab"!>-->
                        <h3 class="register-heading">Buy a Property</h3>
                        
                    <form action="" method="POST">
                        <div class="row register-form">

                            <div class="col-md-6">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name"name="name" value=""required/>
                                    </div>
                                    <div class="form-group">
                                       <input type="text" class="form-control" placeholder="Phone"name="phone" value=""required/>
                                    </div>
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Preferred Location"name="location" value=""required/>
                                    </div>
                            
                                
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Price Range"name="price" value=""required/>
                                    </div>

                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Details"name="details" value=""required/>
                                    </div>
                           
                                    <!--<input type="submit" class="btnRegister" onclick="how.php" name="submit" value="Register"/>-->
                                    <!--<input type="submit" class="btnRegister" onclick="how.php" name="submit" value="Register"/>-->
                                    <input type="submit" class="btnRegister"  name="submit" value="Register"/> 
                                    <a href="shortlistforbuyer.php">View Sellers </a>
                                    <a href="how.php">Get Contact Details of Sellers </a>        
                         
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

    
    $insertquery="INSERT INTO buyer(Name,Phone,Preferred_Location,Price_Range,Details)VALUES('$name','$phone','$location','$price','$details')";


    
    $res=mysqli_query($con,$insertquery);
    
    if($res){
        ?>
        <script>
            alert("Your details have been inserted in the database. Please click on 'Get Contact Details of Sellers' button to proceed further.");
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