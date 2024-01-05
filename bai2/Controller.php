<?php
include 'Model.php';
$list_of_courses = get_courses();

$block = (!empty($_GET['block']))?$_GET['block']:'' ;

$course_name = find_by_block($block);
include 'view.php';
?>