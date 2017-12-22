<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        
        
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
     
        <div class="container mainbody">
            <div class="headsection">
                 <div class="">
                     <nav class="">
                         <ul class="list">
                             <li>
                                 <a class="" href="#"><img alt="Brand" src="img/LogoSample_ByTailorBrands (2).jpg" class="img-circle img-responsive"> </a>
                             </li>
                             <li class="heading">       
                                   <h1>ডাক্তার বাড়ি</h1>  
                            </li>
                            <li class="search">
                                   <form class="  form-inline" role="search">
                                    <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                                 
                             </li >
                         </ul>
                         <ul class="navbar-right navbar ">
                  
                         </ul>
                       
                             
                  
                      
                      </nav>
                     
                 
                
            </div>
      
                
                
                
       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">HOME <span class="sr-only">(current)</span></a></li>
        <li><a href="">ABOUT US</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    
  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
                
            </div>
<?php 

include 'configure/Database.php';
include 'lib/Formated.php';
$f=new Formated();
?>
            <div class="bodysection">
                <div class="leftcontent pull-left">
                    <div class="well ">
                        <h2>Our Important Events</h2>
                    </div>
                    <div class="row">
                       
                         <div class="col-sm-6 col-md-4 design">
                          <div class="thumbnail ">
                               <div class="icon">
                          <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                               </div>
                            <div class="caption">
                              <h3>Doctor consultant</h3>
                              <p>..ist group item heading.</p>
                              <p><a href="#" class="btn btn-default" role="button">Button</a> </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-md-4 design">
                          <div class="thumbnail ">
                               <div class="icon">
                           <i class="fa fa-user-md" aria-hidden="true"></i>
                               </div>
                            <div class="caption">
                              <h3>Our Medicine</h3>
                              <p>..ist group item heading.</p>
                              <p><a href="#" class="btn btn-default" role="button">Button</a> </p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-4 design">
                          <div class="thumbnail ">
                               <div class="icon">
          <i class="fa fa-snowflake-o" aria-hidden="true"></i>
                               </div>
                            <div class="caption">
                              <h3>Thumbnail label</h3>
                              <p>..ist group item heading.</p>
                              <p><a href="#" class="btn btn-default" role="button">Button</a> </p>
                            </div>
                          </div>
                        </div>
                        
                        
                    </div>
                    
                 
                             
                                
 
                    
                </div>
                <div class="rightcontent pull-right">
                   
                     <div class="list-group ">
                        <a href="#" class="list-group-item active">
                        Care Types
                        </a>
                         <?php
                         $dataObject=new Database();
                         $query="select * from types_of_care";
                         $result=$dataObject->select($query);
                         foreach ($result as $row){
                         ?>
                         <a href="userLogIn.php?cat=<?php echo $row['id']; ?>" class="list-group-item"><?php echo $row['care_name'];?> </a>
                         
                         <?php }?>
                  
                      </div>
            
                
                
                 
                    
                </div>
                
            </div>
           


              <div class="post_menu container">
                <div class="row ">
                    <div class="col-lg-8 ">
                           <div class="well ">
                               <h1 style="margin-left: 10%;font-family: cursive;color: #006868">Health Tips....</h1>
                    </div>
                        
                                                                    <?php
    
                 $query="select * from post ";
                $result=$dataObject->select($query);
                   if($result){
                
                
                $i=0;
                 foreach ($result as $row){
        
        ?>
	
                        
                        <div class="media mm">
                            <div class="media-left mm2">
                                 
                                <img src="admin/<?php echo $row['img'];?>">
                     
                                </div>
                        
                              <div class="media-body">
                                  <h4 >
                                      <a style="color: #006868" href="ShowTips.php?id=<?php echo $row['id'];?>"> <?php echo $row['title'];?></a> 
                                <span style="color: green;font-size: 15px;font-family: cursive"> <br><?php echo $row['date'];?></span>
                            </h4>    
                            <p>
                              <?php echo $f->textShorten($row['content']);?>
                            </p>
                    
                            </div>
                          
                        </div>
                        
                 <?php }
                   }
                   ?>
                     
                      
                         
                     
                      
                    
                        
                    </div>
                      
                   
                    
                    
                    <!--post right-->
                    
                    <div class="col-md-4 ">
                           
                <div class="n_header">
                 <h3>Category For Health Tips</h3>
            </div>
            <ul class="nav nav-tabs nav_menu">
                <li class="active"><a href="#">populer</a>
                </li>
                <li><a href="#">Latest & update</a></li>
               
             
              </ul>
         
       
                  <div class="media mm">
                            <div class="media-left mm2">
                                 
                            <img src="img/3.jpg">
                     
                                </div>
                        
                            <div class="media-body">
                                   <h4>
                                health tips
                            </h4>    
                            <p>
                                healt tips details....
                            </p>
                    
                            </div>
                            
                        </div>
                            <div class="media mm">
                            <div class="media-left mm2">
                                 
                            <img src="img/2.jpg">
                     
                                </div>
                        
                            <div class="media-body">
                                   <h4>
                                health tips
                            </h4>    
                            <p>
                                healt tips details....
                            </p>
                    
                            </div>
                            
                        </div>

      
                        
                    </div>
                    
                </div>
                
            </div>
                
          
                
            </div>
        
      
        
       

                
        
        
    


<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
          <div class="logofooter"> <img alt="Brand" src="img/LogoSample_ByTailorBrands (2).jpg" class="img-circle img-responsive"></div>
        <p>.</p>
        <p><i class="fa fa-map-pin"></i> 210,     1</p>
        <p><i class="fa fa-phone"></i>  9999 878 398</p>
        <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">GENERAL LINKS</h6>
        <ul class="footer-ul">
          <li><a href="#"> Career</a></li>
          <li><a href="#"> Privacy Policy</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
          <li><a href="#"> Client Gateway</a></li>
          <li><a href="#"> Ranking</a></li>
          <li><a href="#"> Case Studies</a></li>
          <li><a href="#"> Frequently Ask Questions</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2016 - All Rights </p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="#">webenlance.com</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Faq's</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Site Map</a></li>
      </ul>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>

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
              
                    
                     </script>
        
    </body>
    
                              
    
</html>


        