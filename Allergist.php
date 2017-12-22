<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .listdynamic {
	list-style: none;
	position: relative;
}
    .listdynamic .li {
	float: left;
	margin: 3%;
	padding: 4%;
}
.listdynamic li ul{
    list-style: none;
    position: relative;
    
}
.listdynamic li ul li{
    padding: 10px;
	margin: 10px;
	width: 100px;

	color: green;
	font-size: 27px;
	border-radius: 50%;
	line-height: -moz-block-height;
	text-align: center;
    
}
.listdynamic li ul li .fa-times{
    color:  red;
    
}

.none {
	
}

            
        </style>
         
    </head>
    <body>
     <?php include 'header.php';
     include 'configure/Database.php';
     include 'pdf/fpdf.php';
         $data=new Database();
         $id="";
     ?>
        <?php
         if (isset($_GET['id'])){
             $id=$_GET['id'];
           
         }
         if($_SERVER['REQUEST_METHOD']=='POST'){
             $symtom=$_POST['symtom'];
          
             
              $query="select * from  patient_admitted order by id desc";
                    $result=$data->insert($query);
                   $row=$result->fetch_assoc();
                    $p_id =$row['id'];
             
             echo "  <div class='panel'>
                 <div class='list-group '>
                        
                     <div class='list-group-item active'>Your Selected Symtoms </div>";
             foreach ($symtom as $key=> $value){
                 echo "
                     <div class='list-group-item '>".$value."</div> ";
             }
             echo "  </div> </div>";
              
             
             
           
                      
                    foreach ($symtom as $key=> $value){
                        $query="insert into patient_diease(name,p_id) values('$value','$p_id')";
                        $data->insert($query);
                      
                           
                    }
             
             
            
             
             
         }
         
     
        
        ?>
        <?php
    
                 $query="select * from name_of_symtom where symtomCode='$id'";
                $result=$data->select($query);
        
        ?>
        <div class="body">
            <a class=" btn btn-success none " href="pdfcreator.php"> See prescription </a>
            <div class="panel">
                <div class="well text-left ">
                   
                    <ul class="listdynamic">
                        <li class="li"> <h2> Symptom Display dynamically : 
                                <?php 
                                if($result){
                                $row=$result->fetch_assoc();
                                echo "<span style=color:#449D44>".$row['symtomName']."</span>";
                                }
                                ?>
                            
                            
                            
                            </h2></li>
                            
                   
                      
                            
                        </ul>
                    
                    
                      <nav aria-label="...">
                    <ul class="pager">
                      <li><a href="">Previous</a></li>
                      <li><a href="dynamic.php?id=<?php echo $row['id']+1; ?>">Next</a></li>
                      <li><a href="#" class="btn btn-sm">submit</a></li>
                    </ul>
                    </nav>
                 
                
                 
                </div>
                
                 
                
            </div>
          
            
            <div class="panel">
                <div class="panel-title"> <h4>symptoms Table:</h4></div>
                <form action="" method="post" >
                    
              
                 <table class="table table-hover table-striped pull-left   tab-pane">
                 <thead >
                 <td><h2>Serial</h2></td>
                <td> <h2>Name Of symptoms</h2></td>
                <td> <h2>checkable</h2></td>
                    
                </thead>
                
                <?php
            
       if($result){
                
                
                $i=0;
                 foreach ($result as $row){
                       $i++;
                 
                   
                ?>
                
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['symtomName'];?></td>
                    <td>
                        <input type="checkbox" name="symtom[<?php echo $row['id'];?>]"  value="<?php echo $row['symtomName'];?>"  class="checkbox" />
                    </td>
                </tr>
                
                
                 <?php  } }  else {
                 echo 'no Symtom name ';
 }?>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="submit" class="btn btn-default sub" >
                    </td>
            
                </tr>
              
               
            </table>
                
               </form>
                
            </div>
            
             
           
            
            
            
            
        </div>
        
        
        
 
        
    </body>
    
</html>

