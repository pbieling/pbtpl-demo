<?php
use PbClasses\PbTpl;
use MyProject\DbConnection;
use PbClasses\Util\Filter;

try {
    $db = DbConnection::get();
    $table = 'customer';
    $rowsArr = $db->selectAssoc($table); //We want all.   
} catch (\Exception $exc) {
    echo $exc->getMessage(); 
    exit;
}

try {
    $c = new PbTpl('./templates/content_05.tpl');
    $seRe = [
        //building the headline from the keys of the first row.
        'head_row' => getHeadRow($c, array_keys($rowsArr[0])), 

        'body_rows' => getBodyRows($c, $rowsArr)
    ];
    return $c->fillTpl('content', $seRe);
    
} catch (\Exception $exc) {
    echo $exc->getMessage();
    exit;
}

function getHeadRow($c, $keyArr) {
    return $c->fillRowTpl('th', 'entry', $keyArr);
}

function getBodyRows($c, $rowsArr) {
    $rowBuffer = '';
    
    foreach($rowsArr as $row) {
        //The values from the table should be masked with htmlentities.
        //We use the filter class that was introduced in the previous eyample.
        $tdRow = $c->fillRowTpl('td', 'entry', Filter::numericArr(array_values($row)));
        $rowBuffer .= $c->fillTpl('body_row', 'td_row', $tdRow);
    }
    return $rowBuffer;
    
}

