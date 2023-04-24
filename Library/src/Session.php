<?php 
namespace src\App\Request;
require "Library.php";

class Session extends Library {
    
    public function __construct() {
        session_start();
        parent::__construct($_SESSION);
    }
    }
    
    $session = new Session();
    
    $session->session = 'loged';

    print_r ($_SESSION);    
    
    $session->offsetUnset('session');
    echo $session->offsetUnset('session'); 