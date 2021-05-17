<?php require_once "header.php"; ?>
<!---->

<?php
require_once 'config.php';
$data = $_POST;
$cm_nm=$_POST['cm_nm'];
$add=$_POST['add'];
$pin=$_POST['pin'];
$p_no=$_POST['p_no'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$insertSql = "INSERT INTO  customer values(null,'$cm_nm','$add','$pin','$p_no','$email','$pwd')";
if ($conn->query($insertSql) === TRUE) {
	// Set session variables
	$_SESSION["message"] = "New Customer Created Successfully";
	redirect("view_cmr.php");
} else {
    echo "Error: " . $insertSql . "<br>" . $conn->error;
}
$conn->close();
?>

<?php require_once "footer.php"; ?>