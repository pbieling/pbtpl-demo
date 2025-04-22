<?php
use PbClasses\PbTpl;

try {
    $c = new PbTpl('./templates/content_rows.tpl');
} catch (\Exception $exc) {
    echo $exc->getMessage();
    exit;
}


$tableData1 = [
    [
        "ID"        => 1,
        "Name"      => "Alpha",
        "TestValue" => "Value 1"
    ],
    [
        "ID"        => 2,
        "Name"      => "Bravo",
        "TestValue" => "Value 2"
    ],
    [
        "ID"        => 3,
        "Name"      => "Charlie",
        "TestValue" => "Value 3"
    ],
    [
        "ID"        => 4,
        "Name"      => "Delta",
        "TestValue" => "Value 4"
    ],
    [
        "ID"        => 5,
        "Name"      => "Echo",
        "TestValue" => "Value 5"
    ]
];
$tablerows1 = $c->fillRowTpl('table_row', $tableData1);

//A second table
$keyArr =     [
        "id", "name", "testvalue"
    ];

$tableValueData = [
    [
        101,
        "Foxtrot",
        "Test Value A"
    ],
    [
       102,
       "Golf",
       "Test Value B"
    ],
    [
        103,
        "Hotel",
        "Test Value C"
    ],
    [
        104,
        "India",
        "Test Value D"
    ],
    [
       105,
       "Juliet",
       "Test Value E"
    ],
    [
        106,
        "Kilo",
        "Test Value F"
    ]
];
$tablerows2 = $c->fillRowTpl('table_row', $keyArr, $tableValueData);

//Fill the cotent template
$seRe = [
    'table_rows1' =>  $tablerows1,
    'table_rows2' =>  $tablerows2
];
return $c->fillTpl('content', $seRe);

