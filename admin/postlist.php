<?php include 'header.php';
 include '../configure/Database.php';
$data=new Database();

?>
            <div class="box round first grid">
                <h2>Post List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Post Title</th>
							<th>Description</th>
							<th>Category</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                                                  <?php
                                                   function textShorten($text, $limit = 50){
		$text = $text. " ";
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, strrpos($text, ' '));
		$text = $text.".....";
		return $text;
	}
    
                 $query="select * from post ";
                $result=$data->select($query);
                   if($result){
                
                
                $i=0;
                 foreach ($result as $row){
        
        ?>
						<tr class="odd gradeX">
							<td><?php echo $row['title'];?></td>
							<td><?php echo textShorten($row['content']);?></td>
							<td><?php echo $row['cat'];?></td>
                                                        <td class="center"> <img style="width: 30px;height: 30px;" src="<?php echo $row['img'];?>"></td>
							<td><a href="">Edit</a> || <a href="">Delete</a></td>
						</tr>
                                                
                 <?php }
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
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <div id="site_info">
      <p>
         &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
        </p>
    </div>
	   
</body>
</html>
