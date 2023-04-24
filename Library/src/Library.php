<?php
namespace src\App\Request;
class Library{

private $data;

public function __construct(&$array) {
    $this->data =& $array;
}
public function __isset($offset) {
    return isset($this->data[$offset]);
}
public function __get($offset) {
    if (isset($this->data[$offset])) {
        return $this->data[$offset];
    } else {
        return null;
    }
}
public function __set($offset, $value) {
    $this->data[$offset] = $value;
}
public function __unset($offset) {
    if (isset($this->data[$offset])) {
        unset($this->data[$offset]);
    }  else {
        return "The offset does not exist";
    }
}
public function __call($methodName, $arguments){
    echo "There is no method with ".$methodName." name.";
}
static function __callStatic($methodName, $arguments){
    echo "There is no method with ".$this->metodName." name.";
}
}