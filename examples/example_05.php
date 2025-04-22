<?php
$pageId = '05';
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/classes/MyProject/autoloader.php';

use MyProject\ShowExamplePage;


$title = 'Example 5 - Showing data from database table';

$infotext = <<< 'INFOTEXT'
In this example we will display a whole table from the database using the class SqlPdo from PbClasses.
   

INFOTEXT;


$content = require ("includes/inc_$pageId.php");
$phpFile = __DIR__ . "/includes/inc_$pageId.php";
$tplCode = __DIR__ . "/templates/content_$pageId.tpl";

ShowExamplePage::show($title, $infotext, $content, $phpFile, $tplCode);


