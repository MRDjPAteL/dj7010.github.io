<?php require_once "header.php"?>

<!DOCTYPE html>
<html>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
echo "Name:".$_FILES['file']['name']."<br>";
echo "Type:".$_FILES['file']['type']."<br>";
echo "Temp name:".$_FILES['file']['tmp_name']."<br>";
echo "Size:".$_FILES['file']['size'];
}
?>
 <form method="post" enctype="multipart/form-data">
 <h2> Upload File</h2>
 
 <br><br>
 <input type="file" name="file" id="fileToUpload">
 <input type="submit" name="submit">
 </form>
<br>
</body>
</html>

<?php require_once "footer.php"?>