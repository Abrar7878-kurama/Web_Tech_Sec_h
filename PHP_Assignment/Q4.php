<?php
      $num1=320;
      $num2=189;
      $num3=8;
      if($num1>$num2 && $num1>$num3){
      	echo "Numbers Are: ".$num1.", ".$num2.", ".$num3."<br />";
        echo "Largest Number : ".$num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo  "Numbers Are: ".$num1.", ".$num2.", ".$num3."<br />";
          echo "Largest Number : ".$num2;
        }
        else
          echo  "Numbers Are: ".$num1.", ".$num2.", ".$num3."<br />";
          echo "Largest Number : ".$num3;
      }
?>