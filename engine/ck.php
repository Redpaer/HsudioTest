<?php
session_start();



	$city = $_POST['city']; 

	$c = "https://api.openweathermap.org/geo/1.0/direct?q=".$city."&limit=5&appid="; //Добавить айди от опеввез

	$ch = curl_init($c);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HEADER, false);
	$res = curl_exec($ch);
	curl_close($ch);
	$res = json_decode($res, true);
	$lat = ($res[1]['lat']);	
	$lon = ($res[1]['lon']);
	$t = "https://api.openweathermap.org/data/2.5/weather?lat=".$lat."&lon=".$lon."&units=metric&appid="; //Добавить айди от опеввез

	$c = curl_init($t);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($c, CURLOPT_HEADER, false);
	$rez = curl_exec($c);
	curl_close($c);
	$rez = json_decode($rez, true);

	$sun = $rez["weather"][0]["main"];
	$temp = $rez["main"]["temp"];
	
	echo "<div>В городе ".$city." сейчас ".$sun.", тепература: ".$temp."</div>";

exit;

?>