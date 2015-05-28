<?php

require('../vendor/autoload.php');

$stringOperations = new unreal4u\stringOperations();
$result = $stringOperations->createSlug('th3/$3 áin\'t n0 vá/lïd char$...');
var_dump($result);
