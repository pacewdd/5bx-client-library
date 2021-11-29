<?php

/**
 * @filename: sample.php
 * @project: 5BX Test Client sample implementation
 * @dependencies: 5bx.php
 * Example using 5BX Client directly, without composer
 */

require __DIR__ . '/src/_5bx.php';

use Pacewdd\Bx\_5bx;


// Replace these values with your own
define('_5BX_API_LOGIN_ID', 'XXXXXXXXX');
define('_5BX_API_KEY', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX');



// Sample implementation
// Create a 5bx object
// add your parameters using the methods below
// get your response by execting the authorize_and_capture() method
// $response is a JSON object, already encoded
  try {
	  $transaction = new _5bx(_5BX_API_LOGIN_ID, _5BX_API_KEY);
	  $transaction->amount('5.99');
	  $transaction->card_num('4111111111111111'); // credit card number
	  $transaction->exp_date ('0418'); // expiry date month and year
	  $transaction->cvv('333'); // card cvv number
	  $transaction->ref_num('1234'); // your reference or invoice number
	  $transaction->card_type('visa'); // card type
	  $response = $transaction->authorize_and_capture(); // returns JSON object
  } catch (Exception $e) {
	  die($e->getMessage());
  }


// Once you've got the response, do what you need to do...
  // ...redirect and output errors
  // ...commit to database
  // ...etc
  // 

echo '<pre>';
print_r($response);
die;






