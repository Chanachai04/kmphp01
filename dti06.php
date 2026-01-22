<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{padding: 40px;}
    .form-group{
      margin-bottom:5px;
      padding-bottom:10px;
    }
    label{display: block; margin-bottom: 10px;}
    input[type="text"], input[type="password"], input[type="number"], select{
      width: 100%;
      padding: 10px;
    }
    input[type="submit"]{
      background-color: green;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="reset"]{
      background-color: red;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <h1 style="text-align:center">All Form with PHP</h1>
  <hr>
  <Form action="./dti06_result.php" methon="GET" enctype="">
    <div class="form-group">
      <label for="fname">ชื่อ-สกุล</label>
      <input type="text" id="fname" name="fname">
    </div>
    <div class="form-group">
      <label for="pword">รหัสผ่าน</label>
      <input type="password" id="pword" name="pword">
    </div>
    <div class="form-group">
      <label for="age">อายุ</label>
      <input type="number" id="age" name="age">
    </div>
    <div class="form-group">
      <label for="gender">เพศ</label>
      <input type="radio" id="gender" name="gender" value="ชาย" checked>ชาย
      <input type="radio" id="gender" name="gender" value="หญิง">หญิง
      <input type="radio" id="gender" name="gender" value="LGBTQ+">LGBTQ+
    </div>
    <div class="form-group">
      <label for="plang">ภาษาโปรแกรมที่ชอบ</label>
      <input type="checkbox"  name="plang[]" value="C">C
      <input type="checkbox"  name="plang[]" value="JAVA">JAVA
      <input type="checkbox"  name="plang[]" value="Python">Python
      <input type="checkbox"  name="plang[]" value="PHP">PHP
    </div>
    <div class="form-group">
      <label for="food">อาหารที่ชอบ</label> 
      <input type="checkbox"  name="food1" value="KFC">KFC
      <input type="checkbox"  name="food2" value="Pizza">Pizza
      <input type="checkbox"  name="food3" value="Donut">Donut
      <input type="checkbox"  name="food4" value="Burger">Burger
    </div>
    <div class="form-group">
      <label for="country">ประเทศที่ชอบ</label> 
      <select name="country" id="country">
        <option value="Thailand">Thailand</option>
        <option value="Japan">Japan</option>
        <option value="Korea">Korea</option>
        <option value="China">China</option>
      </select>
    </div>
    <div class="form-group">
      <label for="province">จังหวัดที่ชอบ</label> 
      <select name="province" id="province">
        <option value="Bangkok">Bangkok</option>
        <option value="Nonthaburi">Nonthaburi</option>
        <option value="Pathumthani">Pathumthani</option>
        <option value="Nakhon Pathom">Nakhon Pathom</option>
      </select>
    </div>
    <div class="form-group">
      <label for="bdate">วันเกิด</label>
      <input type="date" name="bdate" id="bdate" />
    </div>
    <div class="form-group">
      <label for="likelevel">ระดับความชอบ</label>
      0<input type="range" name="likelevel" id="likelevel" />100
    </div>
    <div class="form-group">
      <label for="comment">ความคิดเห็น</label>
      <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
    </div>
    <input type="hidden" name="message"  value="I love you" />
    <div class="form-group">
      <input type="submit" value="ตกลง">
      <input type="reset" value="ยกเลิก">
    </div>
  </Form>
</body>
</html>