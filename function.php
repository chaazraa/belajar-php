<?php 

//function sayHello($name = "aza")
//{
 //   echo "Hello $name".PHP_EOL;
//}

//for ($no = 1; $no <= 10; $no++) {
 //   sayHello("aci");
  //  sayHello("azzahra");
  //  sayHello("aca");
//}

//function quadrat($name)
//{ 
  //  return $name * $name;
//}
//$result = quadrat(5);

 //echo $result .PHP_EOL;

 function luas_lingkaran (int $r)
 {
    return 3.14 *pow($r,2); //pow($r,3){pangkat}
 }
 $result = luas_lingkaran(3);

 echo $result.PHP_EOL;
?>