<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data</title>
  <?php include 'links.php'; ?>
  <link rel="stylesheet" href="mbsinputstyle.css">
  </head>
<body>
    

    <div class="row">
        
        <div class="col-md-12">
            
                        <h3 class="register-heading">Please Enter Your Details</h3>
                        
                    <form action="" method="POST">
                        <div class="row register-form">

                            <div class="col-md-12">
                                

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name"name="name" value=""required/>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Mobile"name="phone" value=""/>
                                    </div>

                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="LandPhone"name="landphone" value=""/>
                                    </div>

                                    <div class="form-group">
                                     
                                    <select name="district">
                                    <option value="">Select your District</option>

                                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                    <option value="Kollam">Kollam</option>
                                    <option value="Pathanamthitta">Pathanamthitta</option>
                                    <option value="Alappuzha">Alappuzha</option>
                                    <option value="Kottayam">Kottayam</option>
                                    <option value="Idukki">Idukki</option>
                                    <option value="Ernakulam">Ernakulam</option>
                                    <option value="Thrissur">Thrissur</option>
                                    <option value="Palakkad">Palakkad</option>
                                    <option value="Malappuram">Malappuram</option>
                                    <option value="Kozhikkod">Kozhikkod</option>
                                    <option value="Wayanad">Wayanad</option>
                                    <option value="Kannur">Kannur</option>
                                    <option value="Kasargod">Kasargod</option>
                                    </select>

                                    </div>


                                    
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Shakha"name="shakha" value=""required/>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                       <input type="text" class="form-control" placeholder="Illom"name="illom" value=""/>
                                    </div>
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Ammathu_Illom"name="ammathuillom" value=""/>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Year_of_Birth"name="yearofbirth" value=""/>
                                    </div>
                                    
                            
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Qualification"name="qualification" value=""/>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="What_are_you_doing?"name="whatareyoudoing" value=""/>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="More_details_about_you"name="moredetailsaboutyou" value=""/>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                     
                                    <select name="bloodgroup">
                                    <option value="">Select your Blood Group</option>

                                    <option value="a+">A+</option>
                                    <option value="a-">A-</option>
                                    <option value="b+">B+</option>
                                    <option value="b-">B-</option>
                                    <option value="o+">O+</option>
                                    <option value="o-">O-</option>
                                    <option value="ab+">AB+</option>
                                    <option value="ab-">AB-</option>
                                    
                                    </select>

                                    </div>

                                    
                                    
                                    <h6>Names of first relatives:</h6>
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Father,Mother"name="fathermother" value=""/>
                                    </div>
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Wife/Husband"name="wife" value=""/>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Brothers,Sisters"name="brotherssisters" value=""/>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Children"name="children" value=""/>
                                    </div>
                                    
                                    
                                    <div class="botbuttons">
                                        <input type="submit" class="btnRegister"  name="submit" value="Submit"/> 
                                        
                                        <a href="mbsshowdata.php">View Database </a>                                 
                                        <a href="mbsshowsearchresults.php">Search Database </a>
                                    </div>      
                         
                            </div>
                        </div>
                        
                    </form>
             
        </div>

        

        
    </div>



</body>
</html>
<?php include 'connection.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $landphone=$_POST['landphone'];
    $district=$_POST['district'];
    $shakha=$_POST['shakha'];
    $illom=$_POST['illom'];
    $ammathuillom=$_POST['ammathuillom'];
    
    
    $yearofbirth=$_POST['yearofbirth'];
    $qualification=$_POST['qualification'];
    $whatareyoudoing=$_POST['whatareyoudoing'];
    $moredetailsaboutyou=$_POST['moredetailsaboutyou'];
    
    $bloodgroup=$_POST['bloodgroup'];
    $fathermother=$_POST['fathermother'];
    $wife=$_POST['wife'];
    $brotherssisters=$_POST['brotherssisters'];
    $children=$_POST['children'];
    

    
    $insertquery="INSERT INTO mbsdata(name,phone,landphone,district,shakha,illom,ammathuillom,yearofbirth,qualification,whatareyoudoing,moredetailsaboutyou,bloodgroup,fathermother,wife,brotherssisters,children)VALUES('$name','$phone','$landphone','$district','$shakha','$illom','$ammathuillom','$yearofbirth','$qualification','$whatareyoudoing','$moredetailsaboutyou','$bloodgroup','$fathermother','$wife','$brotherssisters','$children')";


    
    $res=mysqli_query($con,$insertquery);
    
    if($res){
        ?>
        <script>
            alert("The details are inserted in the database.Thank you.If you wish to change any details, please contact us by phone.");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Error:Data Not Inserted");
        </script>
        <?php
    
    }
}




?>