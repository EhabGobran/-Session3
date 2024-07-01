<?php
$myName='Ehab';
$myAge='21';
echo 'my name is'.$myName.'. i have '.$myAge."<br>";

// case sensitive
$myName='Ehab ahmed';
$myNamE='Ehab gobran';
echo 'my name is'.$myName.' but u can call me '.$myNamE.'<br>';

// loosely typed lang
// assigning by value (default)
$x =42;
$y = &$x;
$x = 100;
echo $y."<br>".$x."<br>";

$numOfCalls=5;
$numOfMassages=8;
define("HEADER","calls");

function nonZero(&$myAge){
--$myAge;
}
nonZero($myAge);

echo PHP_OS_FAMILY.'<br>';
echo PHP_VERSION.'<br>';
echo __DIR__ .'<br>';
echo __LINE__ .'<br>';

$g=$$x='ahmed';
echo var_dump($$x).'<br>';
print_r($$x).'<br>';

// scalar Types   bool (true , false)  int (100)  float(10.0556)  string (''"")
// computed Types   array  object   callable   iterable
// special Types   resource    null

$isAvailable=true;
var_dump($isAvailable);
print_r($isAvailable);
echo '<br>';
 // falsy values   false , 0 -0  0.0  -0.0  null  []  '0'   ''
if($isAvailable){
    echo 'this is a truthy value<br>';
}else   echo 'this is a falsy value<br>';

echo PHP_INT_MAX.'<br>';
echo PHP_INT_MIN.'<br>';

$f=(float) 84.0;
echo $x.'<br>';

 var_dump(is_int($f));
// 5.3   ceil(5.3)  ,  floor(5.999999)

$myName='Ehab';
echo $myName.'<br>';
// herodoc == ""     nowdoc  == ''
$proglangs=array('Rust','Go','javascript','C#','python');
$proglangs[1]='Kotlin';
echo "i need to learn more about $proglangs[1] and $proglangs[2] <br>";
 $classes = [
   ['a' , 'b' , 'c'] ,
   ['d' , 'e' , 'f'] ,
   ['g' , 'h' , 'i'] ,
 ];

 var_dump($classes[2][2]);

 $classes = ['class1' , 'class2' , 'class3'];

 $users = [
   ['name' => 'ahmed' , 'age' => 50 , 'pw' => '5455' , 'ewhrwe@gmail.com' , 123456789],
 ];

 $products = [
   'clothes' => [
     ['name' => 'x' ,'price' => 55 , 'date' => 'date 1'],
     ['name' => 'y' ,'price' => 100 , 'date' => 'date 1'],
   ],
   'food' => [
    [ 'x' , 55 ,  'date 1'],
     [ 'y' , 100 ,  'date 1'],
   ]
   ];

 echo $products['clothes'][0]['name'];

 echo $products['food'][0][1];


 $arr = [true => 'sayed' , null => 'ahmed' , 1 => '1' , '3' => 'string 1' ];

 echo $arr['3'];
 echo $arr[3];

 $arr = [1 , 2 , 3, 40 => 4, 'num' => 5, 6, 7, 8];
 unset($arr);
//  $r = array_shift($arr);
//  $r = array_pop($arr);


 $arr = ['a' => 'ahmed' , 'b' => null];

 var_dump(array_key_exists('b', $arr));
 var_dump(isset($arr['b']));



// operators  +  -  * / %  **

 $x = 5 ;

 $x = $x + 10 ;

 $x += 1;

var_dump($x);

$x = 'ahmed' . ' sayed';

$x .= ' and my age is 20';

 var_dump($x);

// ==   ===   !=   !==  <  >  <=  <=>

 var_dump(100 == '100'); //  value
 var_dump(100 === '100'); //  value  & type




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>