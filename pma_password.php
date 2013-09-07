<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appfog之MySQL資料庫資訊取得</title>
</head>
<body>
<?php
$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mysql_config = $services_json["mysql-5.1"][0]["credentials"];
$username = $mysql_config["username"];
$password = $mysql_config["password"];
$hostname = $mysql_config["hostname"];
$port = $mysql_config["port"];
$db = $mysql_config["name"];
?>
<div class="box">
<p>MySql主機: <input type="text" class="textbox" value="<?php echo $hostname;?>" /><br/></p>
<p>MySql埠號: <input type="text" class="textbox" value="<?php echo $port;?>" /><br/></p>
<p>MySql資料庫名稱: <input type="text" class="textbox" value="<?php echo $db;?>" /><br/></p>
<p>MySql用戶名稱: <input type="text" class="textbox" value="<?php echo $username;?>" /><br/></p>
<p>MySql密碼: <input type="text" class="textbox" value="<?php echo $password;?>" /><br/></p>
</div>
</body>
</html>