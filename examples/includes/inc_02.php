<?php
use PbClasses\PbTpl;


try {
    $c = new PbTpl('./templates/content_composition.tpl');
    $time = date('H:i:s');
    $seconds = (int) substr($time, -2);
    $remainder = $seconds % 3;
    $seRe = [
        'example_headline' => 'Juggling with templates',
        'time_output' => $c->fillTpl('time_output', 'time', $time),
        'time_dependent_text_block' => $c->fillTpl('text_block_' . $remainder , 'control_value', $remainder)
        
    ];
    return $c->fillTpl('content', $seRe);
    
} catch (\Exception $exc) {
    echo $exc->getMessage();
    exit;
}




