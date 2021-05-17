<?php require_once "header.php"?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$uploadOk1 = 1;
$uploadOk2 = 1;
$ext1 = pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION);
$ext2 = pathinfo($_FILES["pdf"]["name"], PATHINFO_EXTENSION);
$loc="img/";
if ($_FILES["photo"]["size"] > 200000) {
 echo "Please Check Your File Size. It's too Large to Upload.<br>";
 $uploadOk1 = 0;
}
if($ext1 = "jpeg" || $ext1 = "png") {
 
 $uploadOk1 = 1;
} 
else{
 echo "Please Uplode jpeg or png File Format only.<br>";
 $uploadOk1 = 0;
}
if($ext2 != "pdf") {
 echo "Please Uplode PDF File Format only.<br>";
 $uploadOk2 = 0;
}
if (($uploadOk1==0 ) || ($uploadOk2 == 0)) {
 echo "The Files was not Uploaded Successfully.<br>";
// if everything is ok, try to upload file
} 
else 
{
 if (move_uploaded_file($_FILES["photo"]["tmp_name"],$loc.$_FILES["photo"]["name"]) && move_uploaded_file($_FILES["pdf"]["tmp_name"], $loc.$_FILES["pdf"]["name"])) {
 echo "The Files was Uploaded Successfully.<br>";
 } else {
 echo "The Files was not Uploaded Successfully.Please Re-Upload it.<br>";
 }
}
}
?>
<form action="pr6_4.php" method="post" enctype="multipart/form-data">
 Select employee image to upload:
 <input type="file" name="photo" id="photo"><br>
 Select employee aadhar card to upload:
 <input type="file" name="pdf" id="pdf"><br>
 <input type="submit" name="submit">
</form>

<?php require_once "footer.php"?>
