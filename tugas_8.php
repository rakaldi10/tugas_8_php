<?php
//perulangan do-while
// $b = 1000;
// do {
//     echo "perulangan do while <br>";
//      $b++;
// } while ($b <= 10);

$a = 20; //input 1
$b = "_";
$c = "x";
$x = $a / 2;
$f = 1;

echo "<table border='0'>";
for ($k = 0; $k < $a / 2; $k++) {
    echo "<td>";
    for ($z = 1; $z <= $a + 1; $z++) { //$z itu baris
        if ($z == 1 or $z == ($a + 1)) {
            for ($i = 1; $i <= $x; $i++) {
                echo $b;
            }
            echo "</br>";
        } else {
            if ($z <= $x) {
                for ($g = 0; $g <= $x - $z; $g++) {
                    echo $b;
                }
                for ($h = 2; $h <= $z; $h++) {
                    echo $c;
                    echo $c;
                }
                echo "</br>";
            } elseif ($z == $x + 1) {
                for ($j = 1; $j <= $a; $j++) {
                    echo $c;
                }
                echo "</br>";
            } else if ($z <= $a + 1) {
                for ($h = $x + 2; $h <= $z; $h++) {
                    echo $b;
                }
                for ($g = 0; $g <= $a - $z; $g++) {
                    echo $c;
                    echo $c;
                }
                echo "</br>";
            }
        }
    }
    echo "<td>";
}
echo "<tr>";
for ($k = 0; $k < $a / 2; $k++) {
    echo "<td>";
    for ($z = 1; $z <= $a + 1; $z++) { //$z itu baris
        if ($z == 1 or $z == ($a + 1)) {
            for ($i = 1; $i <= $x; $i++) {
                echo $b;
            }
            echo "</br>";
        } else {
            if ($z <= $x) {
                for ($g = 0; $g <= $x - $z; $g++) {
                    echo $b;
                }
                for ($h = 2; $h <= $z; $h++) {
                    echo $c;
                    echo $c;
                }
                echo "</br>";
            } elseif ($z == $x + 1) {
                for ($j = 1; $j <= $a; $j++) {
                    echo $c;
                }
                echo "</br>";
            } else if ($z <= $a + 1) {
                for ($h = $x + 2; $h <= $z; $h++) {
                    echo $b;
                }
                for ($g = 0; $g <= $a - $z; $g++) {
                    echo $c;
                    echo $c;
                }
                echo "</br>";
            }
        }
    }
    echo "<td>";
}
echo "</tr>";
echo "</table>";
