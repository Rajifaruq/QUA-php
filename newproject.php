<?php
//user's info here
//$name="we are writing codes";
//100.5;100;
$a=4;
$b=3;
$c=2;
/*echo$c;
echo"<br>";
$name="we are good";
echo$name;*/
 function roots($a,$b,$c){$d=$b*$b-4*$a*$c;
 if ($d >=0){
    $x1 =(-$b + sqrt($d))/(2*$a);
    $x2 =(-$b - sqrt($d))/(2*$a);
    echo "Roots are: $x1, $x2 \n ";
 }else {
        $x1 = -$b/(2*$a);
        $x2 = sqrt(-$d)/(2*$a);
        echo "Roots are: $x1 +or- $x2 i \n";
    }
}
echo "Equation is 4x^2+3x+2=0\n";
  roots(4,3,2);
  echo"<br>";
/*  echo "\nEquation is x*x+4x+5=0\n";
  roots(1,4,5);*/
?>