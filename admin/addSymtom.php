<?php
include 'header.php';
 include '../configure/Database.php';
 $DB=new Database();

     
 
 ?>	
            <div class="box round first grid">
                
                <h2>Add New Category of care types</h2>
                <?php
                 if (isset($_GET['id'])){
                     $symtomCode=$_GET['id'];
                 
                 if ($_SERVER['REQUEST_METHOD']=='POST'){
                $care_name=$_POST['care_name'];
                $query="insert into name_of_symtom(symtomName,symtomCode) values('$care_name','$symtomCode')";


                              if($DB->insert($query)){
                    echo '<h3 style="color: green"> success full</h3>';
                }  else {
                     echo '<h3 style="color: red"> Not success full</h3>';
                }
            }}    ?>
               <div class="block copyblock"> 
                   <form method="post">
                    <table class="form">					
                        <tr>
                            <td>
                                <input name="care_name" type="text" placeholder="Enter Category Name..." class="medium" />
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
