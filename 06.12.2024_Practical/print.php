<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Table</title>
</head>
<body>
   <?php
      require_once 'dbconf.php';
      require_once 'myfunc.php';

      $teacher_id = $_GET['teacher_id'];

      TeacherDetails($teacher_id,$connect);
   ?>
</body>
</html>