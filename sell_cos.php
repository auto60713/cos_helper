<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<style>
.smt{

  background-color: #8AD467;

}

</style>
<body>
    <a href="stock.html"><div class="button title">賣出<img src="b.png" id="back"></div></a>


<form action="/action_page.php">
  <input type="text" class="ip1" name="date"   placeholder="日期" value="<?php echo date("Y-m-d"); ?>"><br>
  <input type="text" class="ip1" name="name"   placeholder="商品名稱" disabled="disabled" value="褲子"><br>
  <input type="text" class="ip1" name="id"     placeholder="編號"     disabled="disabled" value="1148"><br>
  <input type="text" class="ip1" name="type"   placeholder="款式"     disabled="disabled" value="黑"><br>
  <input type="text" class="ip1" name="number" placeholder="數量" value="1"><br>
  <input type="text" class="ip1" name="cost"   placeholder="價格"><br>
  <input type="text" class="ip1" name="note" placeholder="備註"><br>
  <input type="submit" class="smt" value="送出">
</form> 
</body>
</html>