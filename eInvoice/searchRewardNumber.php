<?php
 $services_json = json_decode(getenv("VCAP_SERVICES"),true);
 $mysql_config = $services_json["mysql-5.1"][0]["credentials"];
 $username = $mysql_config["username"];
 $password = $mysql_config["password"];
 $hostname = $mysql_config["hostname"];
 $port = $mysql_config["port"];
 $db = $mysql_config["name"];
 $link = mysql_connect("$hostname:$port", $username, $password);
 $db_selected = mysql_select_db($db, $link);
 mysql_query("set names utf8");
 $str = "SELECT * FROM demo_reward_number WHERE stage = '".$_POST[stage]."'";     
 $result =  mysql_query($str);
 while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
 
		echo $row[2].";".$row[3].";".$row[4].";".$row[5].";".$row[6].";".$row[7].";".$row[8];
		
	}

?>