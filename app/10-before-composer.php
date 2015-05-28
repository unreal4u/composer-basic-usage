<?php

include('../vendor/zendframework/zend-validator/ValidatorInterface.php');
include('../vendor/zendframework/zend-validator/Translator/TranslatorAwareInterface.php');
include('../vendor/zendframework/zend-validator/AbstractValidator.php');
include('../vendor/zendframework/zend-validator/CreditCard.php');

$ccValidator = new Zend\Validator\CreditCard();

if (!$ccValidator instanceof Zend\Validator\CreditCard) {
	echo 'Houston! We have a problem';
} else {
	echo 'ccValidator is a valid object';
}
echo PHP_EOL;

