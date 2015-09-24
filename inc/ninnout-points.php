<?php

header('Content-type: text/plain');
	//set the default time zone
	date_default_timezone_set('Asia/Kolkata');
	

	//get the length
	if(isset($_REQUEST['length'])){

		$length = $_REQUEST['length'];
		//include database
		include("./db.php");

		//include modules
		include("./inc/mod_dateFormat.php");

			$query="select * from data order by id DESC limit ".$length ;
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
            $id_count = 0;
                while($row = mysql_fetch_array($result)){
                	
                	if($id_count == 0){
                	$id_count++;
                	
                	
                	}
                	$current_id = $row['id'];
                	
                }
                
                $query="select * from data  where id >= '$current_id' " ;
        	$result = mysql_query($query) or die(mysql_error());
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
                
                
                


	}

?>