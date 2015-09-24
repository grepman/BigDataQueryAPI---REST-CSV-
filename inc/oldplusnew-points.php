<?php

header('Content-type: text/plain');
	//set the default time zone
	date_default_timezone_set('Asia/Kolkata');
	

	//get the length
	

		//$length = $_REQUEST['length'];
		//include database
		include("./db.php");

		//include modules
		include("./inc/mod_dateFormat.php");

			$query="select * from data order by id ASC" ;
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
                while($row = mysql_fetch_array($result)){
                	echo Dformat($row)." ";
                	echo Tformat($row).",";
                	echo $row['OutputCurrent'].",";
                	echo $row['WaterMeterReading'].",";
                	echo $row['HeatSinkTemperature'].",";
                	echo $row['OutputFrequency'].",";
                	echo $row['VoltMeterReading'].",";
                	echo $row['Turbulance'].",";
                	echo $row['ThroughputData']."\n";
                }


	

?>