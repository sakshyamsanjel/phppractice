<?php
$a=readline("Enter a number:");
$a=intval($a);
$count=0;
for($i=1; $i<=$a; $i++)
{
    if(($a % $i) == 0) {
        $count++;
    }
}
if($count==2) {
    echo "given number is prime number";
}
else {
    echo "given number is not prime number";
}
?>