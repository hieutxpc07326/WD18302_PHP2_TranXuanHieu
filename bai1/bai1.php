<?php 
echo "PC07326 - Lab 1.1 <br> ";
$courses = [
    'block1'=>'Lập trình PHP2',
    'block2'=>'Môn PHP',
    'block3'=>'Lập Trình web'
];
//echo $courses ['block1'];
//model 
function get_courses ():array {
    global $courses;

    return array_values($courses);
}
//var_dump(get_courses());
function find_by_block($block){
    global $courses;

    return array_key_exists($block ,$courses) ?$courses[$block]:"PHP2";
}
//echo find_by_block("block1");
$list_of_courses = get_courses();

$block = (!empty($_GET['block']))?$_GET['block']:'' ;

$course_name = find_by_block($block);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab1.1</title>
</head>
<body>
    <h1> <?= $course_name ?> </h1>
    <form action="">

        <select name="block" id="">
    <?php foreach ($list_of_courses as $key=>$value): ?>
            <option value=""><?= $value?> </option>
    <?php endforeach; ?>
        </select>
        <button type="submit"> Tìm Khóa Học  </button>
    </form>
</body>
</html>