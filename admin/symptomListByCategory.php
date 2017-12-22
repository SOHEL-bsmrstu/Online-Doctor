<?php include 'header.php';?>
<?php

 include '../configure/Database.php';
 $DB=new Database();

     
 
 ?>
            <div class="box round first grid">
                                                                  <?php
                                       if (isset($_GET['id'])){
                     $symtomCode=$_GET['id'];
                               $query="select * from types_of_care where id='$_GET[id]'";
                               $result=$DB->insert($query);
                               $name=$result->fetch_assoc();


                               
                                    ?>
                <h2>Symptom List Of  <span  style="color: #DC6A0A;"> <?php echo $name['care_name'];?></span></h2>
                
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
                           
					<tbody>
       <?php
       
                   $query="select * from name_of_symtom where symtomCode='$_GET[id]'";
                       $result=$DB->insert($query);
                             if($result){
                                    $i=0;
                                    foreach ($result as $row){
                                   $i++;
                                        ?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
                                                        <td><?php echo $row['symtomName'];?> </td>
							<td><a href="?id=<?php echo $row['id'];?>">Edit</a> || 
                                                          
                                                             <a href="?id=<?php echo $row['id'];?> " style="color: #DC6A0A">Delete</a>
                                                        
                                                        </td>
						</tr>
                                                
                                                <?php
                                                     
                                    }
                                  
                               }  else {
                                    echo '<h3 style="color: red"> Not success full</h3>';
                               }
                                       }           ?>
		
					</tbody>
				</table>
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
