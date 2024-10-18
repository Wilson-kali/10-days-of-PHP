<?php
/**
 * WELCOME TO PHP LOOPS
 * Loops are itarative statements that help to executed a block of code repeatedly to a set number of times
 * Loops execute a block only if the conditions are true.
 * TYPES OF LOOPS 
 * 1. FOR LOOP
 * 2. WHILE LOOP
 * 3. DO...WHILE LOOP
 * 4. FOREACH LOOP
 * ========================================================================================================
 * 
 *1. FOR LOOP
 *  SYNTAX
 *   for(intialization; condition; step) {
 *              // code to be executed
 *                           }
 */
// SIMPLE EXAMPLE 1 TO PRINT I LOVE PHP 5 TIMES
echo " SIMPLE EXAMPLE 1 TO PRINT I LOVE PHP 5 TIMES<br>";
for ($x=0;$x<5;$x++) {
    echo " I Love PHP!<br>";
}
echo"<br><br>";
 //SIMPLE EXAMPLE 2
 // Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
 // There will be no hyphen(-) at starting and ending position.

echo" Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.<br>";
 for ($x= 1;$x <=10;$x++) {
    if ($x < 10) {
        echo "$x-";
    }
    else {
        echo "$x";
    }
 }
 echo"<br><br>";

 // SIMPLE EXAMPLE 3
  //Create a script using a for loop to add all the integers between 0 and 30 and display the total.
  echo"A script using a for loop to add all the integers between 0 and 30 and display the total.<br>";
  $sum=0;
  for ($x=0;$x<= 30;$x++) {
  $sum += $x;
  }
 echo"$sum";
 echo"<br><br>";

 // SIMPLE EXAMPLE 4
 // Create a script to construct the following pattern, using nested for loop.
echo"A script to construct the following pattern, using nested for loop.<br>";

for ($x= 1;$x<= 5;$x++) {
    echo "*<br>";
    
} 
?>
