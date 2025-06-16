<?php
// echo 'for loop example' . "<br>" . `<br>`;
// for($gaurav = 0; $gaurav < 2; $gaurav++) {
//     echo "Gaurav have a good count: " . $gaurav . "<br>";
// }

// for($i = 0; $i < 10; $i++) {
//     echo "This is a loop iteration: " . $i . "<br>";
//     if($i == 5) {
//         echo "Reached halfway through the loop at iteration: " . $i . "<br>";
//         break; // Exiting the loop when halfway is reached
//     }
// }


// echo 'while loop example' . "<br>" . `<br>`;

// $y = 0;
// while($y <= 10) {
//     echo "This is a while loop iteration: " . $y . "<br>";
//     if($y == 5) {
//         echo "Skipped halfway through the while loop at iteration: " . $y . "<br>";
//         $y++; // increment before continue
//         continue; // move to next iteration after halfway point
//     }
//     $y++;
// }

$y = 8;
do {
    echo "This is a do-while loop iteration: " . $y . "<br>";
    $y++;
} while($y <= 12);



// echo '<br>' . 'nested for loop example' . "<br>" . `<br>`;

// for ($i = 0; $i < 10; $i++) {
//     for($j = 0; $j < 5; $j++) {
//         echo "Outer loop iteration: " . $i . ", Inner loop iteration: " . $j . "<br>";
//         if ($j == 2) {
//             echo "Breaking inner loop at j = 2<br>";
//             break; // Breaks out of the inner loop
//         }
//     }
// }

?>