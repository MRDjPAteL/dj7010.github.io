<?php require_once "header.php"?>

<p><form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" id="number">  
    <input type="submit" name="submit" value="Submit" />  
  </form>  
  <?php   
    if($_POST){  
        $fact = 1;  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
  ?>  
  </p>

<?php require_once "footer.php"?>