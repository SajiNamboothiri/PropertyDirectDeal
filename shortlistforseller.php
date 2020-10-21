

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>List of Buyers</title>

    <?php  include 'links.php'   ?>
    <?php  //include 'aaa.css'   ?>
    
    <link rel="stylesheet" href="styleshortlist.css">

    


</head>
<body>

<div class="main-div">
    <h1>List of Buyers</h1>

    <div class=center-div>

        <div class="table-responsive">

        <table>


            <thead>


                <tr>

                    <th>Id</th> 
                    <th>Name</th>
                    
                    <th>Preferred_Location</th>
                    <th>Price_Range</th>
                    <th>Details</th>
                    
                </tr>


            </thead>

            <tbody>
            
                <?php
                    include'connection.php';
                    $selectquery="select * from buyer where Added=1";
                    $query=mysqli_query($con,$selectquery);
                    #nums=mysqli_num_rows($query);
                    while($res=mysqli_fetch_array($query)){

                ?>                  
                   
                    <tr>

                        <td><?php echo $res["Id"]; ?> </td>
                        <td><?php echo $res["Name"]; ?> </td>
                        
                        <td><?php echo $res["Preferred_Location"]; ?> </td>
                        <td><?php echo $res["Price_Range"]; ?> </td>
                        <td><?php echo $res["Details"]; ?> </td>
                     
                    </tr>
                    <?php
                    }
                    ?>
                   
                    

            </tbody>


        </table>

        </div>
        <a href="seller.php">Register and Get Contact Details</a>
    </div>

</div>

    
</body>
</html>