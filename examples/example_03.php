<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/classes/MyProject/autoloader.php';

use MyProject\ShowExamplePage;

$title = 'Example 3 - Building lists and tables';

$infotext = <<< 'INFOTEXT'
To fill templates repeatedly, you don't need any loop logic but 
use the fillRowTpl() method. Here too, the parameters can be used 
in different ways, as shown in the example.
INFOTEXT;


$content = require ('includes/inc_03.php');
$phpFile = __DIR__ . '/includes/inc_03.php';
$tplCode = __DIR__ . '/templates/content_rows.tpl';

ShowExamplePage::show($title, $infotext, $content, $phpFile, $tplCode);



