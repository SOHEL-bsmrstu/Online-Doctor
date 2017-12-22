<?php include 'header.php';
 include '../configure/Database.php';
$db=new Database();
?>	
            <div class="box round first grid">
                <h2>Add New Post</h2>
                
                <?php
                 if($_SERVER['REQUEST_METHOD']=='POST'){
                     $title=$_POST['title'];
                     $date=$_POST['date'];
                     
                       
                       
                       
                        $file_name = $_FILES['img']['name'];
                     $file_size = $_FILES['img']['size'];
                     $file_temp = $_FILES['img']['tmp_name'];

                     $div = explode('.', $file_name);
                     $file_ext = strtolower(end($div));
                     $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                     $uploaded_image = "uploads/".$unique_image;

                     move_uploaded_file($file_temp, $uploaded_image);
                    
                    
                       
                         $content=$_POST['content'];
                         $select=$_POST['select'];
                         if($title!=" " && $date!=" " && $select!=" " && $uploaded_image!=" "){
                             $query="insert into post(title,date,content,cat,img)values('$title','$date','$content','$select','$uploaded_image')";
                             if($db->insert($query)){
                                 echo 'success';
                             }
                             
                             
                         }  else {
                             echo 'insert..';
                         }
                         
                     
                 }
                ?>
                <div class="block">               
                 <form action="" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="select">
                                    <option value="1">Category One</option>
                                    <option value="2">Category Two</option>
                                    <option value="3">Cateogry Three</option>
                                </select>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td>
                                <label>Date Picker</label>
                            </td>
                            <td>
                                <input type="text" name="date" id="date-picker" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file" name="img" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea name="content" class="tinymce"></textarea>
                            </td>
                        </tr>
						<tr>
                            <td></td>
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
         &copy; Copyright <a href=""> Doctor Bari</a>. All Rights Reserved.
        </p>
    </div>
</body>
</html>
