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
   
         $data=new Database();
      
         $d=0;
     ?>
        <?php
     if (isset($_GET['id'])){
         $id=$_GET['id'];
              $query="select * from name_of_symtom where id='$id' ";
                $result=$data->select($query);
                $row=$result->fetch_assoc();
                $d=$id;
                
     }
      
         ?>
         
        <?php
       
             
     
             
            
                      
                        
             
         


       
        ?>
        <div class="body">
            <a class=" btn btn-success none " href="pdfcreator.php"> See prescription </a>
            <div class="panel">
                <div class="well text-left ">
                   
                    <ul class="listdynamic">
                        <li class="li"> <h2> Symptom Display dynamically : 
                        
                            
                                <span id="s_bord">
                                    <?php 
                                          
                               /*  echo "<span style=color:#449D44>".$row['symtomName']."</span>";*/
                                    ?>
                                </span>
                            
                            </h2></li>
                            
                   
                      
                            
                        </ul>
                    
                    
                      <nav aria-label="...">
                    <ul class="pager">
                      <li><a href="">Previous</a></li>
                      <li><a href="" class="btn btn-sm " >nex</a></li>
                      <li>  <form>
                        <input type="submit" value="next" id="bb">
                    </form></li>
                    </ul>
                    </nav>
                  
                 
                
                 
                </div>
                
         
                
            </div>
          
            
        
            
             
           
            
            
            
            
        </div>
        
        
         <?php include 'footer.php';?>

 
                 
    </body>
 <script type="text/javascript">
$(document).ready(function(){
    var i=1;
    $('#bb').click(function(){
  
          i++;
        $.ajax({
            
         
            url:"next2.php",
            method:'POST',
           data:{v:i},
            dataType:'text'
            
            success:function(data){
                $('#s_bord').html(data);
               
                
            }
            
            
        });
      return false;
 
    });
    
});

</script>
   
    
</html>

