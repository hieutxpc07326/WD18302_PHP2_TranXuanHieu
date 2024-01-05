<?php
function get_courses ():array {
    include 'data.php';

    return array_values($courses);
}
//var_dump(get_courses());
function find_by_block($block){
    include 'data.php';

    return array_key_exists($block ,$courses) ?$courses[$block]:"PHP2";
}
?>