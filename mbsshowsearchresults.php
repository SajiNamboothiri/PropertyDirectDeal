

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

            <h4>Search</h4>
            

                <form class="form-horizontal" action="mbsshowsearchresults.php" method="POST">
                    <div class="form-group">

                        
                        
                        <input type="text" class="form-control" placeholder="Type any portion to search" name="term" value=""/>
                        
                     
                        <input type="submit" class="btnRegister"  name="name" value="Name"/>
                        <input type="submit" class="btnRegister"  name="illom" value="Illom"/>
                        <input type="submit" class="btnRegister"  name="shakha" value="Shakha"/>
                        <input type="submit" class="btnRegister"  name="district" value="District"/>
                        <input type="submit" class="btnRegister"  name="bloodgroup" value="Blood_Group"/>
                        <input type="submit" class="btnRegister"  name="yearofbirth" value="Year_of_Birth"/>
                        <input type="submit" class="btnRegister"  name="qualification" value="Qualification"/>
                        
                        <a href='mbsdata.php'>Insert_New_Data</a>
                        <a href='mbsshowdata.php'>View_Full_Database</a>
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
                                
                                $term="^%&";                                

                                if(isset($_POST['clear'])){$term="^%&";
                                    $query = "SELECT * FROM mbsdata WHERE name LIKE '%$term%'";}
                                
                                elseif(isset($_POST['name'])) {$term=$_POST['term'];                                
                                $query = "SELECT * FROM mbsdata WHERE name LIKE '%$term%'";}
                                

                                elseif(isset($_POST['illom'])) {$term=$_POST['term'];                                
                                $query = "SELECT * FROM mbsdata WHERE illom LIKE '%$term%'";}

                                elseif(isset($_POST['shakha'])) {$term=$_POST['term'];                              
                                $query = "SELECT * FROM mbsdata WHERE shakha LIKE '%$term%'";}

                                elseif(isset($_POST['district'])) {$term=$_POST['term'];                              
                                $query = "SELECT * FROM mbsdata WHERE district LIKE '%$term%'";}

                                elseif(isset($_POST['bloodgroup'])) {$term=$_POST['term'];                              
                                $query = "SELECT * FROM mbsdata WHERE bloodgroup LIKE '%$term%'";}

                                elseif(isset($_POST['yearofbirth'])) {$term=$_POST['term'];                             
                                $query = "SELECT * FROM mbsdata WHERE yearofbirth LIKE '%$term%'";}

                                elseif(isset($_POST['qualification'])) {$term=$_POST['term'];                               
                                $query = "SELECT * FROM mbsdata WHERE qualification LIKE '%$term%'";}

                                

                                
                                    $data = mysqli_query($con, $query) or die('');

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
