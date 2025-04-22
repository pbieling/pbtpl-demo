<?php
use PbClasses\PbTpl;

//put it in try-catch block!
$c = new PbTpl('content.tpl');
//$this is my template object with all 

//This is may search-replace array.
//The keys are converted to upper case
//We recommend to set all keys to lower case where possible. 
//If data comes from another source, e.g. from a database table, 
//it can usually be taken over as it is.

$seRe = [
    'first' => 'First replacement',
    'second' => 'Second replacement'
];
//ATTENTION!
//Don't use different keys that are converted to the same search value!
//e.g. 'first' and 'First' and 'FIRST'. Only the first value would fill the placeholder!

$myRenderedHTML =  $c->fillTpl('content', $seRe);

// If the template only contains a single placeholder, 
// you can make it simpler
$html = $c->fillTpl('poor_template', 'single_placeholder', 'This is the text that will be insertetd.');

//If there is notheing to replace:
$nothingReplaced = $c->fillTpl('ready_element');

//======== TEMPLATES IN A LOOP=========//

//Key-value array:

$rowArr = [];
$rowArr[] = ['repl1' => 'a',
    'repl2' => 'b',
    'repl3' => 'c',
    'repl4' => 'd'
];
$rowArr[] = ['repl1' => '1',
    'repl2' => '2',
    'repl3' => '3',
    'repl4' => '4'
];
$rowArr[] = ['repl1' => '5',
    'repl2' => '6',
    'repl3' => '7',
    'repl4' => '8'
];

$filledTpl = $c->fillRowTpl('more_replacements', $rowArr);

//Two arrays:
$search = array('repl1', 'repl2', 'repl3');
$rowReplArr = [];
$rowReplArr[] = ['b','c','d'];
$rowReplArr[] = ['1','2','2'];
$rowReplArr[] = ['4','5','6'];
$filledTpl2 = $c->fillRowTpl('more_replacements', $search, $rowReplArr);

//You can find more information in the examples and in
//vendor/pbieling/pbclasses-min/test/PbTplTest.php









