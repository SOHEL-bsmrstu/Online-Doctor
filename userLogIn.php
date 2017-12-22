<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/font-awesome.css">
        <link rel="stylesheet" href="css/adminLogInStyle.css">
     
     
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
               <style>
 
.login_admin_form {
	margin-top: 10%;
	position: relative;
}
                </style>
    <body>
       <?php 

include 'configure/Database.php';

include 'lib/Session.php';
Session::init();

$data=new Database();
$id='';
if (isset($_GET['cat'])){
    $id=$_GET['cat'];
}

    if($_SERVER['REQUEST_METHOD']=='POST'){
          $username= $_POST['name'];
          $email=$_POST['email'];
          
          $query="select * from  types_of_care where id='$id'";
                $result=$data->select($query);
                $row=$result->fetch_assoc();
                $cat=$row['care_name'];
        
              
             
             
               $query="insert into patient_admitted(name,email,cat) values('$username','$email','$cat')";            
                     
                        $result=$data->insert($query);
                      
                        if ($result){
                            
               
                              
                                 header("location:Allergist.php?id=$id");
                              
                            
                        } else {
                            echo 'error';
                            
                        }
                           
                    }
             
             
            
             
             
         
?>

        
        
      

        <div class="loginmodal-container login_admin_form" style="margin-top:">
                                    <div >
                                        <h4 id="show" style="color:red"></h4>
                                    </div>
            <h1>Login <span class="admin"> </span></h1><br>
                                        <form method="post" action="" name="login_admin" id="login_admin" onsubmit=" ">
                                            <input type="text" name="name" id="user" placeholder="Enter  Name">
                                            <input type="email" name="email" id="pass" placeholder="Enter email">
                                            <input type="submit" name="login_submit" id="login_submit" onclick="" class="login loginmodal-submit" value="Login">
				       </form>
					
				  <div class="login-help">
					
				  </div>
				</div>
			
		
   
   
   
   
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
           <script src="../js/FieldValidation.js"></script>
        <script src="../js/bootstrap.min.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
          
        </script>
        <script>
       
        /* $(document).ready(function(){
             $("#login_admin").submit(function(){
                 
                var name=$('#user').val();
                var pass=$('#pass').val();
                var tbl='admin';
                       $.ajax({  
                url:"formValidation.php",  
                method:"POST",  
                data:{name:name,pass:pass,tbl:tbl},  
                dataType:"text",  
                success:function(data)  
                { 
                    if(data!=''){
                          $("#show").html(data);
                    }else{
                         window.location.href="index.php";
                    }
                }  
           });
     
               return false;
             });
             
         });
             
      
        */
        
        </script>
        
    </body>
</html>
