

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Database</title>

    <?php  include 'links.php'   ?>
    <?php  //include 'aaa.css'   ?>
    
    <link rel="stylesheet" href="mbsshowstyle.css">

    


</head>
<body>

<div class="main-div">
    <h1>Database</h1>

    <div class=center-div>

        <div class="table-responsive">

        <table>


            <thead>


                <tr>

                    <th>id</th> 
                    <th>name</th>
                    <th>phone</th> 
                    <th>land_phone</th>
                    <th>district</th>
                    <th>shakha</th>
                    <th>illom</th>
                    <th>ammathu_illom</th> 
                    <th>year_of_birth</th>                    
                    <th>qualification</th>
                    <th>what_are_you_doing</th>
                    <th>more_details_about_you</th>
                    <th>blood_group</th> 
                    <th>father_mother</th>
                    <th>wife/husband</th>
                    <th>brothers_sisters</th>
                    <th>children</th>
                    
                               
                
                </tr>


            </thead>

            <tbody>
            
                <?php
                    include'connection.php';
                    $selectquery="select * from mbsdata where hide=0";
                    $query=mysqli_query($con,$selectquery);
                    #nums=mysqli_num_rows($query);
                    while($res=mysqli_fetch_array($query)){

                ?>                  
                   
                    <tr>

                        <td><?php echo $res["id"]; ?> </td>
                        <td><?php echo $res["name"]; ?> </td>  
                        <td><?php echo $res["phone"]; ?> </td>
                        <td><?php echo $res["landphone"]; ?> </td>                         
                        <td><?php echo $res["district"]; ?> </td>
                        <td><?php echo $res["shakha"]; ?> </td>
                        <td><?php echo $res["illom"]; ?> </td>
                        <td><?php echo $res["ammathuillom"]; ?> </td>
                        <td><?php echo $res["yearofbirth"]; ?> </td>
                        <td><?php echo $res["qualification"]; ?> </td>                        
                        <td><?php echo $res["whatareyoudoing"]; ?> </td>
                        <td><?php echo $res["moredetailsaboutyou"]; ?> </td>
                        <td><?php echo $res["bloodgroup"]; ?> </td>
                        <td><?php echo $res["fathermother"]; ?> </td>
                        <td><?php echo $res["wife"]; ?> </td>
                        <td><?php echo $res["brotherssisters"]; ?> </td>                        
                        <td><?php echo $res["children"]; ?> </td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                   
                    

            </tbody>


        </table>

        

        </div>
        
        <div>
            <h4>.</h4>
        </div>
        
        <a href="mbsdata.php">Insert New Data</a>
        <a href="mbsshowsearchresults.php">Search Database</a>
    </div>
    
</div>

    
</body>
</html>