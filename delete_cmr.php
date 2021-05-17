<?php require_once "header.php"; ?>
<!---->

<?php
require_once 'config.php';
$data = $_POST;
$id=$_POST['c_id'];
$deleteSql = "DELETE FROM `customer` WHERE `c_id`='$id'";
if ($conn->query($deleteSql) === TRUE) {
	// Set session variables
	$_SESSION["message"] = "Customer Removed Successfully";
	redirect("pr9_1.php");
} else {
    echo "Error: " . $deleteSql . "<br>" . $conn->error;
}
$conn->close();
?>

<?php require_once "footer.php";
?>

</body>
</html>