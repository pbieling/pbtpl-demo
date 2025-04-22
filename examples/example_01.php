<?php
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/classes/MyProject/autoloader.php';

use MyProject\ShowExamplePage;

$title = 'Example 1 - Say Hello!';

$infotext = <<< 'INFOTEXT'
This is the first example with a simple key->value array.
    
Here we use a single content template with the identifier [content].

To make things easier to understand, we put the examples into simple include files and display
the result in the yellow box.

Let me say that the concept of PbClasses ist to work with classes and not with inlude files 
and simple functions. But it's exactly right for this purpose.

The code for PHP and the templates is shown below.

Later you can take a look at the files  
___classes/MyProject/ShowExamplePage.php___   
___examples/templates/outer.tpl___   
to see how a whole example page is put together. of course using PbTpl.
INFOTEXT;


$content = require ('includes/inc_01.php');
$phpFile = __DIR__ . '/includes/inc_01.php';
$tplCode = __DIR__ . '/templates/content_hello.tpl';

ShowExamplePage::show($title, $infotext, $content, $phpFile, $tplCode);



