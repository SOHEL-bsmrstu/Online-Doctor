<?php
include 'header.php';
 include '../configure/Database.php';
 $DB=new Database();

     
 
 ?>	
            <div class="box round first grid">
                
                <h2>Add New Category of care types</h2>
                <?php
                 if ($_SERVER['REQUEST_METHOD']=='POST'){
                $name=$_POST['name'];
                $cat=$_POST['cat'];
                $query="insert into medicine(name,cat) values('$name','$cat')";


                              if($DB->insert($query)){
                    echo '<h3 style="color: green"> success full</h3>';
                }  else {
                     echo '<h3 style="color: red"> Not success full</h3>';
                }
            }    ?>
               <div class="block copyblock"> 
                   <form method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input name="name" type="text" placeholder="Enter Category Name..." class="medium" />
                            </td>
                        </tr>
                            <tr>
                            <td>
                                <label>Select Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">
                                    
                                                                          <?php
                                
                               $query="select * from types_of_care";
                               $result=$DB->insert($query);


                                if($result){
                                  
                                    foreach ($result as $row){
                                   
                                        ?>
                                    <option ><?php echo $row['care_name'];?></option>
                                    <?php
                                    
                                    } }?>
                                </select>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div id="site_info">
       <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
