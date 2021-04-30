<?php

class calculate{

    function triangle ($sideA, $sideB)
  {
       $maxLength = $sideA + $sideB - 1;
      echo '<h1>'. 'Answer:'.'The maximum range of a triangles last edge is ' . $maxLength.'.'.'</h1>';
       
     
    }
    
    
    function binarycount($biNum)
    { 
        $count = 0;
        while($biNum)
        {
            $count += ($biNum & 1);
            $biNum = $biNum >> 1;
        }
    echo '<h1>' . 'Answer:'.'The number of ones in a binary representation of an integer is ' . $count.'.'.'</h1>';
    
    }
  

    function parts ($pthOne, $pthTwo)
    {
          $output =  str_replace('/', '', $pthOne);
          $output .= "/" . str_replace('/', '', $pthTwo);
      echo '<h1>' . 'Answer:' . '("'.$pthOne . '")'. '("' .$pthTwo. '")'. '→ ' .'"'. $output. '"'.'</h1>';
      

    }
  
    function sastry ($sasNum)
    {
    $conca = $sasNum . $sasNum+1;
    $check = 0;
    for ($i = 1; $i * $i <= $conca; $i++) {
            if (($conca % $i == 0) && ($conca / $i == $i)) {
                $check = 1;
                echo '<h1>' . 'Answer: '. $sasNum. '→ ' .$conca . '→'.'TRUE(' . $sasNum. ' is a perfect square)'. '</h1>';
            }
        }
    if($check == 0){
      echo '<h1>' . 'Answer:'. $sasNum. '→ '. $conca . '→'.'FALSE(' . $sasNum. ' is not a perfect square)'. '</h1>';
       
    }
   
}   
}
  