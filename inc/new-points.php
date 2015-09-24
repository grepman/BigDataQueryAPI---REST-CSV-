<?php

header('Content-type: text/plain');
//@url?session=....&length=....
	//set the default time zone
	date_default_timezone_set('Asia/Kolkata');
	//include modules
	include("./inc/mod_dateFormat.php");
	

	//get the pubsub id
	$session_id = $_REQUEST['session'];
	include("./db.php");

	//connect to database
	$query="select * from dump where pubsub = '".$session_id."'" ;
        	$result = mysql_query($query) or die(mysql_error());
        	$pubsubCheck =0;
        	while($row = mysql_fetch_array($result)){
        		$pubsubCheck++;
        	}
	//if no pubsub present push the pub sub to new with first run =0

     if($pubsubCheck == 0){
     	//it is a first run
     	//push the session id to the database
     	//get the data as per the given length

     	//include database
		include("./db.php");

		$length = $_REQUEST['length'];

		$query="select * from data order by id DESC limit ".$length ;
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
            $id_check=0;
                while($row = mysql_fetch_array($result)){

                	if($id_check == 0){
                		$id_check++;
                		//register the session;
                		$sql1 = "INSERT INTO `dump` (`id`, `pubsub`, `stored_id`) 
											VALUES ('', '$session_id', '".$row['id']."');";

						$result1 = mysql_query($sql1) or die(mysql_error());
                	}

                	$current_id=$row['id'];
                }
		
		$query="select * from data where id >= '$current_id' ";
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
     else{
     	//not a first run
     	//get the values where id> pubsub id

     	//include database
		include("./db.php");
		$query="select * from dump where pubsub = '".$session_id."'" ;
        	$result = mysql_query($query) or die(mysql_error());
        	 while($row = mysql_fetch_array($result)){
        	 	$stored_id = $row['stored_id'];
        	 }

        	$query="select * from data where id > '".$stored_id."' order by id ASC";
        	$result = mysql_query($query) or die(mysql_error());
        	$csv_init = "Date,OutputCurrent,WaterMeterReading,HeatSinkTemperature,OutputFrequency,VoltMeterReading,Turbulance,ThroughputData\n";
            echo $csv_init;    
            $id_check=0;
                while($row = mysql_fetch_array($result)){
			
			if($id_check == 0){
			$id_check++;
			$stored_id= $row['id'];
			
			}
			
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
		
		//update
		$query2="UPDATE  `dump` SET  `stored_id` =  '$stored_id' WHERE  `dump`.`pubsub` ='$session_id';";
        	$result2 = mysql_query($query2) or die(mysql_error());
        	//echo "$stored_id";

     }






?>