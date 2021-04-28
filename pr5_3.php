<?php require_once "header.php"?>

<p><form method="post">        
      Enter the Number:<br>  
      <input type="number" name="number" id="number">  
      <input type="submit" name="submit" value="Submit" />  
     </form>  
     <?php   
        if($_POST)  
        {  
        $num = $_POST['number'];  
        $reverse = strrev($num);  
          
        if($num == $reverse){  
            echo "The number $num is Palindrome";     
        }else{  
            echo "The number $num is not a Palindrome";   
        }  
      }     
      ?>
  </p>

<?php require_once "header.php"?>
