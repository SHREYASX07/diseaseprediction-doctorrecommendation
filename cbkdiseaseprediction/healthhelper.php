<?php
error_reporting(0);
session_start();

require_once "inc/config.php";
require_once "inc/dbhelper.php";

class HealthHelper
{
    function addUser()
    {
        $id                 = $_POST['id'];
        $hospital_name      = $_POST['hospital_name'];
        $hospital_phone     = $_POST['hospital_phone'];
        $hospital_email     = $_POST['hospital_email'];
        $hospital_city      = $_POST['hospital_city'];
        $hospital_address   = $_POST['hospital_address'];
        $doctor_name        = $_POST['doctor_name'];
        $doctor_phone       = $_POST['doctor_phone'];
        $doctor_qualification= $_POST['doctor_qualification'];
        $doctor_speciality  = $_POST['doctor_speciality'];
        
        $username           = $_POST['username'];
        $password           = $_POST['password'];
        
        $newfilename = "";
        $imagefile = $_POST['photo_file'];
        if($_FILES['photo']['type']=='image/jpeg' || $_FILES['photo']['type']=='image/gif' || $_FILES['photo']['type']=='image/png')
        {
            if($_FILES['photo']['error']>0)
            {
                echo "Error :".$_FILES['photo']['error'];
            }        
            else
            {
                $imagepath="photos/";
                
                if(!is_dir($imagepath))
                {
                    mkdir($imagepath,0777);
                }
                
                if(is_uploaded_file($_FILES['photo']['tmp_name']))
                {
                    $filename  = $_FILES['photo']['name'];
                    $extension = end(explode(".",$filename)); 
                    $newfilename = "img_".time().".".$extension;
                   
                    move_uploaded_file($_FILES['photo']['tmp_name'],$imagepath.$newfilename); 
                }
            }
        }
        else
        {
            $newfilename = $imagefile;
        }
        
        $db=new Database();
        $db->open();
        $sql = "";
        
        if($id)
        {
            $sql= "UPDATE `users` SET `hospital_name`= '".$hospital_name."', `hospital_phone`='".$hospital_phone."', `hospital_email`='".$hospital_email."', 
            `hospital_city`='".$hospital_city."',`hospital_address`='".$hospital_address."',`doctor_name`='".$doctor_name."',`doctor_phone`='".$doctor_phone."',
            `doctor_qualification`='".$doctor_qualification."',`doctor_speciality`='".$doctor_speciality."', `photo` = '".$newfilename."',`username`='".$username."', `password`='".$password."' WHERE `id`=".$id;   
        }
        else
        {
            $sql    = "SELECT * FROM `users` WHERE `username` ='".$username."'";
            $result = $db->query($sql);
            
            if($db->num_of_rows($result))
            {
                return false;
            }
        
            $sql= "INSERT INTO `users` (`id`, `hospital_name`, `hospital_phone`, `hospital_email`, `hospital_city`,`hospital_address`, 
             `doctor_name`, `doctor_phone`, `doctor_qualification`, `doctor_speciality`,`photo`,`username`, `password`) 
            VALUES (NULL, '".$hospital_name."', '".$hospital_phone."', '".$hospital_email."', '".$hospital_city."','".$hospital_address."', 
            '".$doctor_name."', '".$doctor_phone."', '".$doctor_qualification."', '".$doctor_speciality."','".$newfilename."',
            '".$username."', '".$password."');";   
        }
    
        $result = $db->query($sql);
        
        return $result;       
    }
    
    function checkLogin()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

        $db=new Database();
        $db->open();
        $sql="SELECT * FROM `users` WHERE `username` ='".$username."' and `password`='".$password."' AND `status` = 1";
        $result=$db->query($sql);
        $row=$db->fetchobject($result);
        return $row;   
    }
    
    function addAppointment()
    {
        $date               = $_POST['date'];
        $name               = $_POST['name'];
        $phone              = $_POST['phone'];
        $email              = $_POST['email'];
        $user_id            = $_POST['user_id'];
        $disease_predicted  = $_POST['disease_predicted'];
        
        $db=new Database();
        $db->open();
        $sql = "";
        
        $sql= "INSERT INTO `appointments` (`id`, `date`, `name`, `phone`, `email`, `user_id`, `disease_predicted`) 
               VALUES (NULL, '".$date."', '".$name."', '".$phone."', '".$email."', '".$user_id."','".$disease_predicted."');";   
        
        $result = $db->query($sql);
        
        return $result;       
        
    }
    
    function appointments()
    {
        $db=new Database();
        $db->open();
        $sql="SELECT * FROM `appointments` WHERE `user_id` ='".$_SESSION['userid']."' ORDER BY `date` DESC";
        $result=$db->query($sql);
        
        if($result)
        {
            ?>
            <table class="table table-bordered">  
                <tr>
                    <th width="9%">Date</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th width="8%">Actions</th>
                </tr>
                <?php
                while($row = $db->fetcharray($result))
                {
                    ?>
                    <tr>
                        <td><?php echo date('d/m/Y',strtotime($row['date'])); ?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['phone'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td>
                            <a class="btn btn-xs btn-primary" href="appointments.php?id=<?php echo $row['id'];?>&task=remove"><i class="fa fa-times-circle"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>  
            <?php
        }
    }
    
    function deleteAppointment($id)
    {
        $db=new Database();
        $db->open();
        
        $sql="DELETE FROM `appointments` WHERE `id` = ".$id;
        $result=$db->query($sql);
        
        echo "<script>window.location='appointments.php';</script>";
    }
}
?>