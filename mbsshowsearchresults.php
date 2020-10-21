

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>Search</title>

        <?php  include 'links.php'   ?>

        <?php  //include 'aaa.css'   ?>
        
        <link rel="stylesheet" href="mbsshowstyle.css">       


    </head>


    <body>

       

        <div class="main-div">

            <h4>Search(Type any portion of your shakha name)</h4>
            

                <form class="form-horizontal" action="mbsshowsearchresults.php" method="POST">
                    <div class="form-group">

                        
                        
                        <input type="text" class="form-control" placeholder="Search by Shakha" name="shakha" value=""/>
                        
                     
                        <input type="submit" class="btnRegister"  name="submit" value="Search"/>
                        <a href='mbsdata.php'>Insert New Data</a>
                        <a href='mbsshowdata.php'>View Full Database</a>
                        <input type="submit" class="btnRegister" name="clear" value="Clear" id="clear"/>

                    </div>

                <form>



            <h4>Search Results</h4>

            <div class="center-div">

                <div class="table-responsive">

                    <table class="table table-striped-table-hover">
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

                                


                                include 'connection.php';

                                
                                
                                $shakha="^%&";
                                

                                if(isset($_POST['clear']))
                                {
                                   
                                    
                                    $shakha="^%&";
                                     
                                }


                                
                                if(isset($_POST['submit']))

                                {
 
                                                            
                                    
                                    $shakha=$_POST['shakha'];
                                    

                                }

                                
                                
                                    $query = "SELECT * FROM MBSdata WHERE 
                                     
                                     
                                    shakha LIKE '%$shakha%'";

                                    $data = mysqli_query($con, $query) or die('error');

                                    while($row = mysqli_fetch_assoc($data))
                                    {
                                        ?>
                                        <tr>

                                            <td><?php echo $row['id']; ?> </td>
                                            <td><?php echo $row['name']; ?> </td>  
                                            <td><?php echo $row['phone']; ?> </td>
                                            <td><?php echo $row['landphone']; ?> </td>                         
                                            <td><?php echo $row['district']; ?> </td>
                                            <td><?php echo $row['shakha']; ?> </td>
                                            <td><?php echo $row['illom']; ?> </td>
                                            <td><?php echo $row['ammathuillom']; ?> </td>
                                            <td><?php echo $row['yearofbirth']; ?> </td>
                                            <td><?php echo $row['qualification']; ?> </td>                        
                                            <td><?php echo $row['whatareyoudoing']; ?> </td>
                                            <td><?php echo $row['moredetailsaboutyou']; ?> </td>
                                            <td><?php echo $row['bloodgroup']; ?> </td>
                                            <td><?php echo $row['fathermother']; ?> </td>
                                            <td><?php echo $row['wife']; ?> </td>
                                            <td><?php echo $row['brotherssisters']; ?> </td>                        
                                            <td><?php echo $row['children']; ?> </td>

                                        </tr>
                                        <?php 
                                    }


                                
                            ?> 
                            
                                                            
                        </tbody>

                    </table>
                </div>

                


                                
            </div>


        </div>

           
    </body>
     
</html>
