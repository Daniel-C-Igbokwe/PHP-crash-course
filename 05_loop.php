<?php 

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($x=0; $x <= 10; $x++) {
//     echo 'Number' . $x . '</br>';
// }

/*While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;

// while($x <= 15) {


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$post = ['First Post', 'Second Post', 'Thrd Post'];

// for($x = 0; $x < count($post); $x++) {
//   echo $post[$x];
// }

foreach($posts as $index => $post) {
  echo $index + 1 . ' - ' . $post . '<br>';
}