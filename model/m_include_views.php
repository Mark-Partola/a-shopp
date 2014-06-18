<?php

/*
 *  1 - имя вьюхи, которая подключается,
 *  2 - массив переменных, которые будут передаваться в шаблон
*/
function include_views($filename, $vars = array()){
    foreach($vars as $name => $value){
        $$name = $value;
    }

    ob_start();
    include($filename);
    return ob_get_clean();

}