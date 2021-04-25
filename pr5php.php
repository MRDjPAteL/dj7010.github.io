<?php require_once "header.php"?>

<nav id="navbar-example3" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">PHP EXAMPLES</a>
  <nav class="nav nav-pills flex-column">
    <a class="nav-link" href="#pr2">Practical 5.2</a>
    <a class="nav-link" href="#pr3">Practical 5.3</a>
    <a class="nav-link" href="#pr4">Practical 5.4</a>
  </nav>
</nav>

<div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" tabindex="0">
  <h4 id="pr2">Practical 5.2</h4>
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
  <h4 id="pr3">Practical 5.3</h4>
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
  <h4 id="pr4">Practical 5.4</h4>
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
</div>

<?php require_once "footer.php"?>