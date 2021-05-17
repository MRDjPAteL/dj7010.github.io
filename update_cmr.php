<?php require_once "header.php"; ?>
<!---->

<?php
require_once 'config.php';
$data = $_POST;
$id=$_POST[`c_id`];
$cm_nm=$_POST['cm_nm'];
$add=$_POST['add'];
$pin=$_POST['pin'];
$p_no=$_POST['p_no'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$updateSql = "UPDATE `customer` SET `cm_nm`=`$cm_nm`,`add`=`$add`,`pin`=`$pin`,`p_no`=`$p_no`,`email`=`$email`,`pwd`= `$pwd` WHERE `c_id`=`id`";
if ($conn->query($updateSql) === TRUE) {
	// Set session variables
	$_SESSION["message"] = "Password Changed Successfully";
	redirect("pr9_1.php");
} else {
    echo "Error: " . $updateSql . "<br>" . $conn->error;
}
$conn->close();
?>



 <?php
require_once "footer.php";?>

</body>
</html>                
