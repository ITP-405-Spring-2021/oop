<?php

class Product {
  public function __construct($name, $createdAt)
  {
    $this->name = $name;
    $this->createdAt = $createdAt;
  }

  public function getDescription()
  {
    return $this->name . ' ' . $this->createdAt;
  }
}