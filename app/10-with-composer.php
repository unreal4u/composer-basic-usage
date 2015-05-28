<?php

include('../vendor/autoload.php');

$ccValidator = new Zend\Validator\CreditCard();

if (!$ccValidator instanceof Zend\Validator\CreditCard) {
	echo 'Houston! We have a problem';
} else {
	echo 'ccValidator is a valid object';
}
echo PHP_EOL;

