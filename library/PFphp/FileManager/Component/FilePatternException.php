<?php

namespace PFphp\FileManager\Component;

class FilePatternException extends \Exception{
    #code
   
    public function __construct($message = null, $code = 0,\Exception $previous = null){
        parent::__construct( $message, $code,$previous );
    }
    
}