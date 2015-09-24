<?php
//check for the min granularity
//check for the max granularity

/*
if 	min   	max
	minute	hour
	second	hour
	minute	day
	second	hour	



*/
//include modules
header('Content-type: text/plain');

include("./inc/mod_dateFormat.php");

include("./db.php");

date_default_timezone_set('Asia/Kolkata');

$min = $_REQUEST['min'];
$max = $_REQUEST['max'];

$current_hour = date("h");
$current_day = date("d");
$current_month = date("m");
$current_year = date("Y");

if($min == "minute" && $max == "hour"){

$query="select * from data where hour = '$current_hour' and day = '$current_day' and month = '$current_month' and year = '$current_year' " ;
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
            $id_check=0;
                while($row = mysql_fetch_array($result)){
                
                if($id_check != $row['minute']){
                //publish
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
                
                
                $id_check = $row['minute'];
              
                }



}
elseif($min == "second" && $max == "hour"){

$query="select * from data where hour = '$current_hour' and day = '$current_day' and month = '$current_month' and year = '$current_year' " ;
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
            $id_check=0;
                while($row = mysql_fetch_array($result)){
                
                
                //publish
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



}
elseif($min == "second" && $max == "day"){

$query="select * from data where day = '$current_day' and month = '$current_month' and year = '$current_year' " ;
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
            $id_check=0;
                while($row = mysql_fetch_array($result)){
                
                
                //publish
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



}
elseif($min == "minute" && $max == "day"){

$query="select * from data where day = '$current_day' and month = '$current_month' and year = '$current_year' " ;
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
            $id_check=0;
                while($row = mysql_fetch_array($result)){
                
                if($id_check != $row['minute']){
                //publish
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
                
                
                $id_check = $row['minute'];
              
                }



}




?>