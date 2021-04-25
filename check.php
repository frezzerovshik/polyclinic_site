<?php
	$routes = explode('/', $_SERVER['REQUEST_URI']);
			
	if ( !empty($routes[1]) )
		$page = $routes[1];
	$date = date("d.m");
	$ip = $_SERVER["REMOTE_ADDR"];
	$file1="statistics/ip".$page.".txt";
	$file2="statistics/count".$page.".txt";
	if(!file_exists($file2))
	{
		$cnt_all = 1;
		$cnt_today = 1;
		$cnt_IP = 1;
		$count = $cnt_all."\n".$date."\n".$cnt_today;
		$check = fopen($file2, "w+");
		fwrite($check, $count);
		fclose($check);
		$ip2 = fopen($file1, "w+");
		fwrite($ip2,$ip."\n");
		fclose($ip2);
	}
	else
	{
		$file = file($file2);
		foreach($file as $row)
		{
			$data1[] = $row;
		}
		$cnt_all = (int)$data1[0];
		$date2 = (float)$data1[1];
		$cnt_today = (int)$data1[2];
		$cnt_all++;
		if($date2 != $date)
			$cnt_today = 1;
		else 
			$cnt_today++;
		$count = $cnt_all."\n".$date."\n".$cnt_today;
		$check = fopen($file2, "w+");
		flock($check, LOCK_EX);
		fwrite($check, $count);
		flock($check, LOCK_UN);
		fclose($check);
		$ip2 = file($file1);
		$cnt_IP = count($ip2);
		if(in_array($ip."\n",$ip2)==false)
		{
			$ipopen = fopen($file1, "a");
			flock($ipopen,LOCK_EX);
			fwrite($ipopen, $ip."\n");
			flock($ipopen,LOCK_UN);
			$cnt_IP++;
			fclose($ipopen);
		}

	}
?>
