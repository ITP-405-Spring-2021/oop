<?php

require_once('./Product.php');

class Book extends Product {
  public function __construct($name, $publicationDate, $pages)
  {
    parent::__construct($name, $publicationDate);
    $this->pages = $pages;
  }

  public function isLong()
  {
    return $this->pages > 300;
  }
}