<?php
     include 'configure/Database.php';
   
         $data=new Database();
         $id=$_POST['v'];
  
               $query="select * from name_of_symtom where id='$id' ";
                $result=$data->select($query);
                $row=$result->fetch_assoc();
                
                         echo "<span style=color:#449D44>".$row['symtomName']."</span>";
     
      