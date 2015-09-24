<?php

date_default_timezone_set('Asia/Kolkata');

include("./db.php");
echo "PageLoad -> 200";


//program starts

//vars
$year = date("Y");
$month= date("m");
$day= date("d");
$hour= date("h");
$minute= date("i");
$second= date("s");


//vars for insert



//


//insert into DB
$second =1;

for($i=0; $i<11; $i++){

//settype($second, "integer");

$second += mt_rand(2,6);



//if($second < 10){
//	$second1 = "0".$second;
//}
//else{
//	$second1 = $second;
//}

$OutputCurrent = 2 + (mt_rand(0,10)/10);
$WaterMeterReading = 990 + 90*(mt_rand(0,10)/10);
$HeatSinkTemperature = 80 + 10*(mt_rand(0,10)/10);
$OutputFrequency = 2200 + 100*(mt_rand(0,10)/10);
$VoltMeterReading = 11 + (mt_rand(0,10)/10);
$Turbulance = mt_rand(40,3476);
$ThroughputData = mt_rand(0,76387);

$sql = "INSERT INTO `data` (`id`, `year`, `month`, `day`, `hour`, `minute`, `second`, `OutputCurrent`, `WaterMeterReading`, `HeatSinkTemperature`, `OutputFrequency`, `VoltMeterReading`, `Turbulance`, `ThroughputData`) 

VALUES ('','$year', '$month', '$day', '$hour', '$minute', '$second', '$OutputCurrent', '$WaterMeterReading', '$HeatSinkTemperature', '$OutputFrequency', '$VoltMeterReading', '$Turbulance', '$ThroughputData');";


$result = mysql_query($sql) or die(mysql_error());

 sleep(4);

}


?>