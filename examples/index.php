<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/classes/MyProject/autoloader.php';

use MyProject\ShowExamplePage;

$title = 'Welcome to the Tutorial';

$infotext = <<< 'INFOTEXT'
###Installation
    Please read the Installation instructions in the README.md file.

###Concept of PbTpl
The concept of PbTpl as opposed to the most template engines with own languages is simple search replace
without any logic in the templates. Even without using regular expressions.

This may sound a bit poor at first, but it depends on how you deal with it.

The concept of PbTpl is to fill small templates and fill it into templates of a higher level. 
The highest Template i.e. main.tpl or outer.tpl might have placeholder 
like _{CONTENT}_, _{NAVIGATION}_ and _{FOOTER}_. The footer for expample could be filled with a
string in $footerHtml. $footerHtml could be provided from the content of a text file or a constant or
could be the result of an own Class that is using a seprarte footer.tpl file to provide the HTML string.

To make a long story short: The logic behind the concept of PbTpl lies in PHP and 
not in a template language. PHP works with template snippets that create 
independent HTML structures, which are then connected to form a larger whole.


INFOTEXT;


//$content = require ('includes/inc_01.php');
$content = 'Below you can see some short instructions for using the PbTpl class.';
$phpFile = __DIR__ . '/includes/inc_index.php';
$tplCode = __DIR__ . '/templates/content_index.tpl';

ShowExamplePage::show($title, $infotext, $content, $phpFile, $tplCode);



