

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Required on Rent</title>

    <?php  include 'links.php'   ?>
    <?php  //include 'aaa.css'   ?>
    
    <link rel="stylesheet" href="styleshortlist.css">

    


</head>
<body>

<div class="main-div">
    <h1>List of Requirements on Rent</h1>

    <div class=center-div>

        <div class="table-responsive">

        <table>


            <thead>


                <tr>

                    <th>Id</th> 
                    <th>Name</th>
                    
                    <th>Preferred_Location</th>
                    <th>Rent_Range</th>
                    <th>Details</th>
                    
                </tr>


            </thead>

            <tbody>
            
                <?php
                    include'connection.php';
                    $selectquery="select * from buyer1 where Added=1";
                    $query=mysqli_query($con,$selectquery);
                    #nums=mysqli_num_rows($query);
                    while($res=mysqli_fetch_array($query)){

                ?>                  
                   
                    <tr>

                        <td><?php echo $res["Id"]; ?> </td>
                        <td><?php echo $res["Name"]; ?> </td>
                        
                        <td><?php echo $res["Preferred_Location"]; ?> </td>
                        <td><?php echo $res["Rent_Range"]; ?> </td>
                        <td><?php echo $res["Details"]; ?> </td>
                     
                    </tr>
                    <?php
                    }
                    ?>
                   
                    

            </tbody>


        </table>

        </div>
        <a href="seller1.php">Register and Get Contact Details</a>
    </div>

</div>

    
</body>
</html>