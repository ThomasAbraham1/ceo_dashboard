<?php
require_once 'Classes/PHPExcel/IOFactory.php';
if(isset($_FILES['excelFile']) && !empty($_FILES['excelFile']['tmp_name'])){
    $excelObject = PHPExcel_IOFactory::load($_FILES['excelFile']['tmp_name']);
    $getSheet = $excelobject->getActiveSheet()->toArray(null);

    echo '<pre>';
    echo json_encode($getSheet);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="excelFile" id="">
        <input type="submit" value="Submit">
    </form>
</body>
</html>