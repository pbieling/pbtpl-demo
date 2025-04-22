<?php
use PbClasses\PbTpl;

try {
    $c = new PbTpl('./templates/content_hello.tpl');
} catch (\Exception $exc) {
    echo $exc->getMessage();
    exit;
}

$seRe = [ //search-replace array
    'head' => 'Hello world',
    'paragraph' => 'I would be very happy if my examples were clear.',
   
];
return $c->fillTpl('content',$seRe);

