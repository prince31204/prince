<?php
              $n=5;
             for($i=0;$i<$n;$i++){
              for($k=$n;$k>$i+1;$k--){
                echo "&nbsp; ";
              }
              for($j=0;$j<=$i;$j++){
                echo "#";
              }
              echo "<br>";
             }
            ?>