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
