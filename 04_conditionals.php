<?php

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true$age=
 
}
*/
 



/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

// $age = 17;

/* if ($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'You are not old enough to vote';
} */

$t = date("H");




// if($t < 3){
//     echo 'Good morning';
// }  elseif($t < 17) {
//     echo 'Good Afternoon';
// } 
// else {
//     echo 'Good evening';
// }

// $posts = [];

// echo !empty($posts) ? $posts[0] : 'No Posts'; 

// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';

// $firstPost = !empty($posts) ?? $posts[0];

// echo $firstPost;

$favColor = 'red';

switch($favColor ) {
    case 'red';
        echo 'Your favorite color is red';
        break;
    case 'blue';
    echo 'Your favorite color is blue';
        break;
    case 'green';
    echo 'Your favorite color is green';
    break;
    default:
        'Your favorite color color is not red, blue or green';
}
