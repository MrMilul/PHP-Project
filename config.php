<?php

define("PAGE_URL" , "http://localhost/PhpProject1");


foreach (glob("lib/*.php") as $file){
    include_once ($file);
}


