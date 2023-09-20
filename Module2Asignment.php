<?php

//Task 1: Looping with Increment using a Function
function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Call Task 1 function
printEvenNumbersWithForLoop(2, 20, 2);


// Task 2 Skip Multiples of 5


for ($i = 1; $i <= 50; $i++) {
    
    if ($i % 5 == 0) {
        continue; 
    }

    
    echo $i . " ";
}

//Task 3: Break on Condition


$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    
    $next = $first + $second;

    // Check if the next Fibonacci number is greater than 100
    if ($next > 100) {
        break; // Break out of the loop if greater than 100
    }

    // Print the current Fibonacci number
    echo $next . " ";

    // Update the variables for the next iteration
    $first = $second;
    $second = $next;
    $count++;
}

//Task 4: Fibonacci Series printing using a Function
function printFibonacci($count) {
    $fibonacci = [];
    
    if ($count >= 1) {
        $fibonacci[] = 0;
    }
    if ($count >= 2) {
        $fibonacci[] = 1;
    }
    
    for ($i = 2; $i < $count; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    
    foreach ($fibonacci as $number) {
        echo $number . " ";
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);




?>