<?php
namespace src\App\Request;
require "Library.php";

class Post extends Library {

    public function __construct() {
        parent::__construct($_POST);
    }
}
    
