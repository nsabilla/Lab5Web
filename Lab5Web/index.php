<?php

require("database.php");
require_once("header.php");
require_once("form.php");

 class Main{
    private $konfig = [];
    public function __construct($namVar)
    {
        $this->konfig=$namVar;
    }
    public function y($main){
        if (array_key_exists($main,$this->konfig)){
            require($this->konfig[$main]);
        }
        else{
            require($this->konfig["home"]);
        }
    }
}

$url=[
    "home"=>"home.php",
    "about"=>"about.php",
    "contact"=>"contact.php",
    "add"=>"add.php",
    "update"=>"update.php",
    "hapus"=>"hapus.php"
];
$istimewa = new main($url);
$istimewa->y(@$_REQUEST["mod"]);
require_once("footer.php");