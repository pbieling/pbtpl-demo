<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/classes/MyProject/autoloader.php';

use MyProject\ShowExamplePage;

$title = 'Example 4 - Make it safely';

$infotext = <<< 'INFOTEXT'
PbTpl is a tool designed to simplify the use of simple find-replace.
    
The use is not only on HTML strings, but is intended for text files of all kinds.

And of course, nesting templates is a normal use case. For this reason, there
must be no automatic masking of strings inserted into templates.

But in many cases it will be necessary to transform the passed parameters before or during the transfer.

The class *PbClasses\Util\Filter* can be used for this purpose, for example to prevent HTML 
code from being injected into the output.
INFOTEXT;


$content = require ('includes/inc_04.php');
$phpFile = __DIR__ . '/includes/inc_04.php';
$tplCode = __DIR__ . '/templates/content_04.tpl';

ShowExamplePage::show($title, $infotext, $content, $phpFile, $tplCode);



