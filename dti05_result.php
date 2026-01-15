<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>ผลการคำนวณ</h1>
  <hr>
  <?php
  if (empty($_GET["num1"]) || empty($_GET["num2"])) {
    echo "<p>กรุณาป้อนข้อมูลให้ครบ</p>";
    header("Refresh: 3; url=dti05.php");
  } else if ($_GET["num1"] == 0 || $_GET["num2"] == 0) {
    echo "<p>ไม่สามารถคำนวณได้ เนื่องจากมีการป้อนเงิน 0 หรือ มีการป้อนคน 0</p>";
    header("Refresh: 3; url= dti05.php");
  } else {
    $result = $_GET['num1'] / $_GET['num2'];
    echo "เงิน ", $_GET['num1'] . "บาท<br/>";
    echo "คน ", $_GET['num2'] . "บาท<br/>";
    echo "หารกันคนละ ", $result . "บาท<br/>";
  }
  ?>
</body>

</html>