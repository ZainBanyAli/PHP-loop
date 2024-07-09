<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!--  Q#1.-->

<?php
for($x=1; $x<=10; $x++)
{
    if($x < 10)
    {
        echo "$x-";
    }
    else
    {
        echo "$x"."\n";
    }
}
?> 


<br>
<!------------------------------------------------------------------------------------->
<!--  Q#2-->

<?php

$sum = 0;


for($x=1; $x<=30; $x++)
{
    $sum += $x;
}

echo "$sum"."\n";
?>

<br>
<!------------------------------------------------------------------------------------->
<!-------Q#3------>
  
<?php
function generatePattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        $char = chr(64 + $i); // chr(65) is 'A', chr(66) is 'B', etc.
        
        for ($j = 1; $j <= $n; $j++) {
            if ($j <= $n - $i + 1) {
                echo "A ";
            } else {
                echo "$char ";
            }
        }
        
        echo "<br>";
    }
}

$n = 5;
generatePattern($n);
?>

<br>
<!------------------------------------------------------------------------------------->
<!-------Q#4------>
<?php
$n = 5;
function Pattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($j <= $n - $i) {
                echo "1 ";
            } else {
                echo "$i ";
            }
        }
        
        echo "<br>";
    }
}

Pattern($n);
?>



<br>
<!------------------------------------------------------------------------------------->
<!-------Q#5------>
<?php
function genPattern($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($i == $j) {
                echo "$i ";
            } else {
                echo "0 ";
            }
        }
        
        echo "<br>";
    }
}

$n = 5;
genPattern($n);
?>


<br>
<!------------------------------------------------------------------------------------->
<!-------Q#6------>
<?php

$n = 6;

$x = 1;

for($i = 1; $i <= $n - 1; $i++)
{
    $x *= ($i + 1); 
}

echo "The factorial of  $n = $x"."\n";
?>


<br>
<!------------------------------------------------------------------------------------->
<!-------Q#7------>

<?php

function printFibonacci($n) {
   
    $a = 0;
    $b = 1;

    
    echo $a . " " . $b . " ";

   
    for ($i = 2; $i < $n; $i++) {
        $next = $a + $b; 
        echo $next . " "; 
        $a = $b; 
        $b = $next; 
    }
}

$n = 10; 
printFibonacci($n);
?>


<br>
<!------------------------------------------------------------------------------------->
<!-------Q#8------>


<?php
$text = "orange coding acadmy";

$search_char = "c";

$count = "0";

for($x = "0"; $x < strlen($text); $x++)
  { 
    if(substr($text, $x, 1) == $search_char)
    {
        $count = $count + 1;
    }
  }

echo $count."\n";

?>



<br>
<!------------------------------------------------------------------------------------->
<!-------Q#9------>

<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <table border="1" cellpadding="3px" cellspacing="0px">
        <?php
       
        $rows = 6;
        $columns = 5;

      
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>"; 
           
            for ($j = 1; $j <= $columns; $j++) {
                $result = $i * $j;
                echo "<td>$i * $j = $result</td>";
            }
            echo "</tr>"; 
        }
        ?>
    </table>

<!------------------------------------------------------------------------------------->
<!-------Q#10------>

<?php

for ($i = 1; $i <= 50; $i++) {
   
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz ";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz ";
    }
    elseif ($i % 5 == 0) {
        echo "Buzz ";
    }
    else {
        echo $i . " ";
    }
}
?>


<br>
<!------------------------------------------------------------------------------------->
<!-------Q#11------>

<?php 
$n = 6; 

function FloydsTriangle($n) 
{ 
    $val = 1; 
  
    for($i = 1; $i <= $n; $i++) 
    { 
       
        for($j = 1; $j <= $i; $j++) 
        { 
            print($val." "); 
            $val++; 
        } 
        print("<br>"); 
    } 
} 

FloydsTriangle($n); 
?> 


<br>
<!------------------------------------------------------------------------------------->
<!-------Q#12------>

<?php



$letters = range('A', 'E'); 
$maxRows = 5; 

echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;A <br>";
for ($i = 2; $i <= $maxRows; $i++) {

    for ($j = $maxRows - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }

    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }
    echo "<br>";
}

for ($i = $maxRows - 1; $i > 1; $i--) {

    for ($j = $maxRows - $i; $j > 0; $j--) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }

    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . "&nbsp;&nbsp;&nbsp;&nbsp;"; 
    }
    echo "<br>";
}
        echo "<br>";
   
?>











<br>
<!--================================================================================================----->
<!-------Q#1------>

<?php

function IsPrime($n)
{
   
    for ($x = 2; $x < $n; $x++)
    {
        
        if ($n % $x == 0)
        {
            return 0;
        }
    }
    return 1;
}

$a = IsPrime(3);

if ($a == 0)
    echo 'This is not a Prime Number.....' . "\n";
else
    echo 'This is a Prime Number..' . "\n";
?>

<br>
<!--================================================================================================----->
<!-------Q#2------>


<?php
function reverse_string($str1)
{
    $n = strlen($str1);
    
    if ($n == 1)
    {
        return $str1;
    }
    else
    {
        $n--;
        
        
        return reverse_string(substr($str1, 1, $n)) . substr($str1, 0, 1);
    }
}

print_r(reverse_string('remove') . "\n");
?>



<br>
<!--================================================================================================----->
<!-------Q#3------>

<?php
function is_str_lowercase($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return false; 
         }
         }
      return true; 
       }

var_dump(is_str_lowercase('abc def ghi')); 
var_dump(is_str_lowercase('abc dEf ghi')); 
?>


<br>
<!--================================================================================================----->
<!-------Q#4+5------>
<?php
$a = 15;
$b = 27;

echo "\nThe number before swapping is:\n";
echo "Number a =" . $a . " and b=" . $b;

$temp = $a;
$a = $b;
$b = $temp;

echo "\nThe number after swapping is: \n";
echo "Number a =" . $a . " and b=" . $b . "\n";
?>

<br>
<!--================================================================================================----->
<!-------Q#6------>

<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $n = strlen((string)$num);
    
    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $n);
        $temp = (int)($temp / 10);
    }
    
    return $sum == $num;
}

$input = 370;

if (isArmstrong($input)) {
    echo "$input is an Armstrong Number";
} else {
    echo "$input is not an Armstrong Number";
}
?>


<br>
<!--================================================================================================----->
<!-------Q#7------>
<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));
    return $str == strrev($str);
}

$input = "Eva, can I see bees in a cave?";

if (isPalindrome($input)) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}
?>


<br>
<!--================================================================================================----->
<!-------Q#8------>

<?php
function removeDuplicates($arr) {
    return array_unique($arr);
}

$input = array(1, 2, 2, 3, 4, 4, 5);

$output = removeDuplicates($input);
print_r($output);
?>

<!--------------------->
<br>




</body>
</html>