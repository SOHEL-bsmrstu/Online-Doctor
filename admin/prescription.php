<?php include 'header.php'; ?>	
<?php
include '../configure/Database.php';
$DB = new Database();
?>

<div class="box round first grid">
    <h2>Add New Post</h2>
    <div class="block">  
<?php
if (isset($_GET['id'])) {
    $symtomCode = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $m_name = $_POST['select'];
        $perDay = $_POST['perDay'];
        $comment = $_POST['comment'];
        $query = "insert into medicine_for_patient(m_name,per_day,p_id,comment)"
                . " values('$m_name','$perDay','$symtomCode','$comment')";


        if ($DB->insert($query)) {
            echo '<h3 style="color: green"> success full</h3>';
        } else {
            echo '<h3 style="color: red"> Not success full</h3>';
        }
    }
    ?>
            <form action="" method="post" >
                <table class="form">
            <?php
            $query = "select * from patient_admitted where id='$symtomCode'";
            $result = $DB->select($query);
            $row = $result->fetch_assoc();
            $catt = $row['cat'];
            $query = "select * from medicine";
            $result = $DB->select($query);
            //  echo $row['name']=$result->fetch_assoc();
            if ($result) {
                ?>


                        <tr>
                            <td>
                                <label>Select Medicine</label>
                            </td>
                            <td>
                                <select id="select" name="select">

                        <?php
                        foreach ($result as $row) {
                            ?>
                                        <option ><?php echo $row['name']; ?></option>
            <?php
        }
    } else {
        echo 'error...';
    }
}
?>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Per Day</label>
                    </td>
                    <td>
                        <input name="perDay" type="text" id="date-picker" />
                    </td>
                </tr>

                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Comment</label>
                    </td>
                    <td>
                        <textarea name="comment" class="tinymce"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Send" />
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
        &copy; Copyright <a href="http://trainingwithliveproject.com">Training with live project</a>. All Rights Reserved.
    </p>
</div>
</body>
</html>
