<?php
        echo "<br>";
        $x = 1;
        while($x <= 5){
          $y = 1;
          while($y <= $x){
            echo "$y ";
            $y++;
          }
          echo "<br>";
          $x++;
        }
        echo "<br>";
        for($x = 5; $x >= 1; $x--){
          for($y = 5; $y > $x; $y--){
            echo "&nbsp";
          }
          for($z = 1; $z <= $x; $z++){
            echo "<b>$z <b>";
          }
          echo "<br>";
        }
        echo "<br>";
        $x = 5;
        while($x >= 1){
          $y = 5;
          while($y >= $x){
            echo "$y ";
            $y--;
          }
          echo "<br>";
          $x--;
        }
      ?>
      