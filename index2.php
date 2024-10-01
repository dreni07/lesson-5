<?php

    // echo 'Hello World';
    // phpinfo();
    $x = 'Hello';
    // print_r($x);
    // echo gettype($x) . '<br>';

    // $y = 9.7;
    // echo gettype($y);

    // $z = 2;
    // echo gettype($z);

    // $u = true;
    // echo gettype($u);

    // $integer_type = 3;
    // echo gettype($integer_type) . '<br>';

    // $double_type = 2.75;
    // echo gettype($double_type) . '<br>';

    // $str_type = 'Dren';
    // echo gettype($str_type);

    // function displayPhpVersion(){
    //     echo "This is php version".phpversion();
    //     echo "\n";
    // }
    // displayPhpVersion();

    // function greeting(){
    //     echo 'Hello';
    // }

    // greeting();# calls the function
    function sum(){
        $value = 546 + 876;
        echo $value;
    }
    sum();

    function findMax($x,$y){
        if($x > $y){
            return $x;
        }
        return $y;
    }
    $a = 20;
    $b = 30;
    $test = findMax($a,$b);
    echo "The Max Between $a and $b is $test";

    function isEven($number){
        if($number % 2 === 0){
            return 'number is even';
        }
        return 'number is odd';
    }
    $isEvenNum = isEven(5);
    echo $isEvenNum;

    

    
    


?>