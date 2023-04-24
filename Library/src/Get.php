<?php
namespace src\App\Request;
require "Library.php";

class Get extends Library {
    
    public function __construct() {
        parent::__construct($_GET);
    }
}
    
