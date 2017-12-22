<?php include 'header.php';?>
<?php

 include '../configure/Database.php';
 $DB=new Database();

     
 
 ?>
            <div class="box round first grid">
                <h2>Category List</h2>
                
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Patient Name</th>
                                                        <th>Patient Email</th>
							<th>Action</th>
						</tr>
					</thead>
                           
					<tbody>
                                                         <?php
                                
                               $query="select * from  patient_admitted";
                               $result=$DB->insert($query);


                                if($result){
                                    $i=0;
                                    foreach ($result as $row){
                                   $i++;
                                        ?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
                                                        <td><?php echo $row['name'];?> </td>
                                                            <td><?php echo $row['email'];?> </td>
							<td>
                                                            <a href="patient_symptom.php?id=<?php echo $row['id'];?>" style="color: green">Take Care</a>
                                                            || <a href="?id=<?php echo $row['id'];?> " style="color: #DC6A0A">Delete</a>
                                                           
                                                        </td>
						</tr>
                                                
                                                <?php
                                                     
                                    }
                                  
                               }  else {
                                    echo '<h3 style="color: red"> Not success full</h3>';
                               }
                                                ?>
		
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
