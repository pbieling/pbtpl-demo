<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/classes/MyProject/autoloader.php';

use MyProject\ShowExamplePage;

$title = 'Example 2 - Template composition';

$infotext = <<< 'INFOTEXT'
A template file contains one or more templates that should - but do not  have to - be related in terms of content. 
The outermost template should be at the top or alone in a separate file if used in different contexts.

A template object contains all templates of the template file (or a corresponding string) passed to the constructor.

The use of the individual templates, e.g. for navigation or a content area or for rows or cells in a table, as well as the assembly of the page does not result from the template itself but must be controlled by the program logic.

The purpose of use can be documented through comments in the templates and naming of the template identifiers. But that is not binding.

Creative uses are also possible, as the example shows.
INFOTEXT;


$content = require ('includes/inc_02.php');
$phpFile = __DIR__ . '/includes/inc_02.php';
$tplCode = __DIR__ . '/templates/content_composition.tpl';


ShowExamplePage::show($title, $infotext, $content, $phpFile, $tplCode);



