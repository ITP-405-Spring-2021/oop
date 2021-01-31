<?php

require_once('./Product.php');
require_once('./Book.php');

$book = new Product('Pro Ember Data', 2021);
$book = new Book('Pro Ember Data', 2021, 176);

echo $book->name;
echo '<br>';
echo $book->getDescription();
echo '<br>';
var_dump($book->isLong());