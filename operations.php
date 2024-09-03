<?php
// Operations / Operators C, C++, Java, Python 
// PHP (---), .NET(---), Java(---), NodeJS, Python(---), Go, Ruby, React, Angular, Vue, 


$to = rand(1000,5000); //rand(0,100); //rand(); 
$be = rand(6000,8000); //rand(0,100); 

echo $to." ---- ".$be;
// ==  === !=  <> > < 
// AND OR NOT && || !  

// T T T 
// T F FALSE


//Conditions 
if (($to == $be) || ($to > $be)) 
  echo "<br>Login Successful";
else 
  echo "<br>not Equal<br>";



if ($to > $be)
  {
  echo "<br>To is Higher, ";
  echo "value is ".$to;
  }
elseif ($to == $be)
  {
    echo "<br>Be is Higher ";
    echo "value is ".$be;
  }
elseif ($to < $be )
{
    echo "<br>Smaller ".$to;
}  
else 
  echo "<br>Out of range"; 

echo "<br>"; 

$s=5;      
switch ($s)
{
    case 1: echo "one<br>"; break; 
    case 2: echo "two<br>"; break;
    case 3: echo "three<br>"; break;
    case 2: echo "Two four <br>"; break;
    case 5: echo "Five<br>"; break;
}


// LOOP what??  C, C++, Java 
// while (condition)
// do ... while (condition)
// for (ini, cond, inc)
// foreach()  


for ($f=0; $f<10; $f++)  // ++ -- increment or decrement 
{
    echo "<br>For No Worries ".$f;
}

while ($f<20)
{
    echo "<br>While worries ".$f; 
    $f++; 
}

do 
{
    echo "<br> Do Worries ".$f;
    $f++;  
}
while ($f>30);

$x=15; 
$nr = array (1,4,7,9,31,4,543,23,543,53,54,332,34,55,334,66,31,332,3,56,23,34,2,11,34,12,);
echo "<br>";
//echo $nr; // We can not use echo to print an array variable 

print_r($nr); 
echo "<br>"; 
echo "<pre>"; 
print_r($nr);

foreach ($nr as $n) // array variabels  (VAR/KEY  as Value)
{
    echo "<br>FOREach ".$n;
} 

// C, C++, Java 
for ($i=0; $i<15; $i++)
{
  echo "<br>FOR ".$nr[$i];
}

?>