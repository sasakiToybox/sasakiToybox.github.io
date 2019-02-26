<!DOCTYPE html>
<!DOCTYPE php>
<html>
<head>
<meta charset="utf-8">
<title>送受信</title>
<!--CSS用のテキスト-->
<style type="text/css">
.balloon1-left {
  position: relative;
  display: inline-block;
  margin: 1.5em 0 1.5em 15px;
  padding: 7px 10px;
  min-width: 120px;
  max-width: 100%;
  color: #555;
  font-size: 16px;
  background: #e0edff;
}

.balloon1-left:before {
  content: "";
  position: absolute;
  top: 50%;
  left: -30px;
  margin-top: -15px;
  border: 15px solid transparent;
  border-right: 15px solid #e0edff;
}

.balloon1-left p {
  margin: 0;
  padding: 0;
}



</style>
<!--ここまで-->
</head>
<body>

<form>
<input type="text" name="a">
<input type="submit" value="送信するよ">
</form>


<!---->
<?php
$mozi=htmlspecialchars($_GET["a"],ENT_QUOTES);
print isset($_GET["a"]) && $_GET["a"]!=""?$mozi."":"何かしゃべって！";
?>

<img src="pet_kotoba_oshieru_oumu.gif" alt="サンプル" align="top">

<p class="balloon1-left">何かしゃべって！</p>
</body>
</html>
