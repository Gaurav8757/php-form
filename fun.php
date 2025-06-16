<?php 
// function func1(){
//     echo "This is function 1<br>";

//     function func2(){
//         echo "This is function 2<br>";
//     }
// }
// func1();
// func2();


// // Example of a function that defines another function inside it
// This is a PHP script that defines a function inside another function
func1();
function func1(){
    echo "This is function 1<br>";

    function func2(){
        echo "This is function 2<br>";
    }
    func2();
}


// variable functions
function func3(){
    echo "This is function 3<br>";
}

$func = "func3";
$func(); // Calls func3 using a variable function
?>