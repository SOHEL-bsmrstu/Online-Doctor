<?php include 'header.php';?>
<?php

 include '../configure/Database.php';
 $DB=new Database();
$symtomCode="";
     
 
 ?>
            <div class="box round first grid">
                                                                  <?php
                                       if (isset($_GET['id'])){
                     $symtomCode=$_GET['id'];
                               $query="select * from  patient_admitted where id='$_GET[id]'";
                               $result=$DB->insert($query);
                               $name=$result->fetch_assoc();


                               
                                    ?>
                <h2>Symptom List Of  <span  style="color: #DC6A0A;"> <?php echo $name['name'];?></span></h2>
                
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Symptom Name</th>
							<th>Action</th>
						</tr>
					</thead>
                           
					<tbody>
       <?php
       
                   $query="select * from patient_diease where p_id='$_GET[id]'";
                       $result=$DB->insert($query);
                             if($result){
                                    $i=0;
                                    foreach ($result as $row){
                                   $i++;
                                        ?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
                                                        <td><?php echo $row['name'];?> </td>
							<td>
                                                          
                                                             <a href="?id=<?php echo $row['id'];?> " style="color: #DC6A0A">Delete</a>
                                                        
                                                        </td>
						</tr>
                                                
                                                <?php
                                                     
                                    }
                                  
                               }  else {
                                    echo '<h3 style="color: red"> Not success full</h3>';
                               }
                                       }           ?>
		
                                                
                                                
                                                <tr>
                                                    <td></td>
                                                    <td><a href="prescription.php?id=<?php echo $symtomCode;?>"><button style="background: #DC6A0A;color: #ffffff;height: 40px;margin-top: 20px;">Give Prescription</button></a></td>
                                                </tr>      
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
