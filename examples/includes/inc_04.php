<?php
use PbClasses\PbTpl;
use PbClasses\Util\Filter;



try {
    $c = new PbTpl('./templates/content_04.tpl');
    $myList = [
        'abdde',
        "<b>Bold HTML</b>, that we don't want to see",
        '<script>alert("Hello")</script>'
    ];
    
    
    
    $seRe = [
        'bad_list' => $c->fillRowTpl('list_item', 'entry' , $myList),
        // public static function numericArr($arr, $filters = 'SPECIAL_CHARS') {
        'secured_list' => $c->fillRowTpl('list_item', 'entry' , Filter::numericArr($myList)),
       'secured_uppercase_list' => $c->fillRowTpl('list_item', 'entry' , Filter::numericArr($myList, 'SPECIAL_CHARS,STRTOUPPER')),
         
    ];
    return $c->fillTpl('content', $seRe);
    
} catch (\Exception $exc) {
    echo $exc->getMessage();
    exit;
}




