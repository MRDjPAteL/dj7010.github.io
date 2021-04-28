<?php require_once "header.php"?>

  <p><form method="post">  
      Enter the Number:<br>  
      <input type="number" name="number">  
      <input type="submit" value="Submit">  
     </form>    
    <?php  
    if($_POST)  
    {   
    $number = $_POST['number'];  
    $a = $number;  
    $sum  = 0;  
    while( $a != 0 )  
    {  
    $rem   = $a % 10;   
    $sum   = $sum + ( $rem * $rem * $rem );   
    $a   = $a / 10;  
    }  
    if( $number == $sum )  
    {  
    echo "Yes $number an Armstrong Number";  
    }else  
    {  
    echo "$number is not an Armstrong Number";  
    }  
  }  
  ?>
</p>

<?php require_once "footer.php"?>
