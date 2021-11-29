# 5BX Client Library

This is a simple client library to be used with a website integrating with the 5BX mock payment gateway.

Before you being, you must acquire a 5BX Gateway login id and API key.  Talk to your instructor.

Install the 5bx-clilent-library using composer, or download and import manually into your project

## Install using composer

Add a `repositories` section to your `composer.json` file, with the following information: 

```json
"repositories": [
        {
            "type": "git",
            "name": "pacewdd/5bx-client-library",
            "url": "https://github.com/pacewdd/5bx-client-library"
        }
    ]
```


## Use the 5BX Client Library


Use and instantiate the 5bx class, then authorize your mock transaction through the gateway.

```php

    // Sample implementation
    // Create a 5bx object
    // add your parameters using the methods below
    // get your response by executing the authorize_and_capture() method
    // $response is a PHP object
    
        use Pacewdd\Bx\_5bx

        $transaction = new _5bx($my_login_id, $my_api_key);
        $transaction->amount('5.99');
        $transaction->card_num('4111111111111111'); // credit card number
        $transaction->exp_date ('0418'); // expiry date month and year
        $transaction->cvv('333'); // card cvv number
        $transaction->ref_num('2011099'); // your reference or invoice number
        $transaction->card_type('visa'); // card type
        $response = $transaction->authorize_and_capture(); // returns Object

    // Once you've got the response, do what you need to do...
    // ...output errors
    // ...commit to database
    // ...etc

    echo '<pre>';
    print_r($response);

```


## Required Parameters

You must pass the following parameters:

* The total sale amount:   eg 12.99    (no $ sign, two decimal places)  
* The credit card number eg: 4111111111111111  (see valid list below)  
* The card type:  eg:  visa   (visa, mastercard, amex)  
* The expiry date: eg: 0418 (mmyy)  
* The CVV number:  eg: 333 (see valid list below)  
* A Reference string:  eg: 1234  (your invoice number)  



## Test Credit Card Numbers.  All others will fail

### Valid American Express test numbers

* 341112137888476
* 375846938924142
* 375819691831002
* 349362036755456
* 371014648224485

### Valid Mastercard test numbers

* 5555555555554444
* 5520149879607344
* 5146605214018285
* 5106794018235507
* 5583406647365389
* 5312452978759194

### Valid Visa numbers

* 4111111111111111
* 4556721364649864
* 4794461141474193
* 4742232662667264
* 4539965555490826
* 4716069285065050


## Test CVV numbers.  All other numbers will fail

Valid CVV numbers:

301 to 499 inclusive

