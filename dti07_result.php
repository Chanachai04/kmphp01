<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 40px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center">ผลการกรอกข้อมูล</h1>
    <hr>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
			<div>
					<strong>ชื่อ-สกุล: </strong> 
					<?php echo empty($_POST['fname']) ? "-" : $_POST['fname']; ?>
			</div>
			<div>
					<strong>รหัสผ่าน: </strong> 
					<?php echo empty($_POST['pword']) ? "-" : $_POST['pword']; ?>
			</div>
			<div>
					<strong>อายุ: </strong> 
					<?php echo empty($_POST['age']) ? "-" : $_POST['age'] . " ปี"; ?>
			</div>
			<div>
					<strong>เพศ: </strong> 
					<?php echo ($_POST['gender']) ?>
			</div>
			<div>
					<strong>ภาษาโปรแกรมที่ชอบ: </strong> 
					<?php echo empty($_POST['plang']) ? "-" : implode(", ", $_POST['plang']); ?>
			</div>
			<div>
					<strong>อาหารที่ชอบ: </strong> 
					<?php 
					if(!isset($_POST["food1"]) && !isset($_POST["food2"]) && !isset($_POST["food3"])&& !isset($_POST["food3"])){
						echo "-";
					}
					echo isset($_POST['food1']) ?  $_POST['food1']: "" ; 
					echo isset($_POST['food2']) ?  $_POST['food2']: ""  ;
					echo isset($_POST['food3']) ?  $_POST['food3']: ""  ;
					echo isset($_POST['food4']) ?  $_POST['food4']: ""  ;
					?>
			</div>
			<div>
					<strong>ประเทศที่ชอบ: </strong> 
					<?php echo empty($_POST['country']) ? "-" : $_POST['country']; ?>
			</div>
			<div>
					<strong>จังหวัดที่ชอบ: </strong> 
					<?php echo empty($_POST['province']) ? "-" : $_POST['province']; ?>
			</div>
			<div>
					<strong>วันเกิด: </strong> 
					<?php echo empty($_POST['bdate']) ? "-" : $_POST['bdate']; ?>
			</div>
			<div>
					<strong>ระดับความชอบ: </strong> 
					<?php echo empty($_POST['likelevel']) ? "-" : $_POST['likelevel']; ?>
			</div>
			<div>
					<strong>ความคิดเห็น:</strong> 
					<?php echo empty($_POST['comment']) ? "-" : $_POST['comment']; ?>
			</div>
			<div>
					<strong>ข้อมูลที่ซ่อน: </strong> 
					<?php echo empty($_POST['message']) ? "-" : $_POST['message']; ?>
			</div>
    <?php    
    }else{
        echo"สามารถประมวณผลข้อมูลได้กรุณาลองใหม่อีกครั้ง";
    }
    ?>
</body>
</html>
