<?php
/**
 * CONDITIONAL STATEMENTS ARE USED TO EXECUTE A BLOCK OF CODE BASED ON A PREDEFINED CONDITION
 * TYPES OF CONDITION STATEMENTS INLUDE
 * 1. IF ELSE STATEMENTS
 * SYNTAX
 *                   if (Condition) {
 *                   // code to be executed if condition is true
 *                                  }
 *                     else {
 *                     // Code to be executed if conditions is not true
 *                          }
 * 
 * 2.IF ELSEIF ELSE STATEMENT
 * SYNTAX
 * This contains a series of statemets
 *                      if (Condition 1) {
 *                          // code to be executed if condition 1 is true
 *                                  }
 *                      elseif(condition 2){
 *                          // code to be executed if condition 2 is true
 *                                  }
 *                               ....
 *                               ....
 *                               ....
 *                          else {
 *                           // code to be executed if all conditions are false
 *                                }
 */                         
// PRACTICAL EXAMPLE: If someomes age is less than 18 print you are a teenager, go sleep
// else print you are an udult go sleep.

$age = 20; // put new Values and test the program
if ($age<18) {
    echo "You are a Teenager, go sleep<br>";
}
else {
    echo "You are an udult you, can proceed<br>";
}


// PRACTICAL EXAMPLE: Implemets a university granding system giving student grades

$marks = 20; // put new values and text the program
if ($marks >=70 && $marks <=100) {
    echo "Your grade is A<br>";
}
elseif ($marks>=60 && $marks <= 69) {
    echo "Your grade is B<br>";
}
elseif ($marks>=50 && $marks <= 59) {
    echo "Your grade is C<br>";
}
elseif ($marks>= 40 && $marks <= 49) {
    echo "Your grade is D<br>";
}
elseif ($marks>= 0&& $marks <= 39) {
    echo "Your grade is E<br>";
}
else {
    echo "Invalid Mark, Please input Marks from (0-100)";
}
?>