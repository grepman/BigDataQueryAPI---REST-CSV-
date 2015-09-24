<?php

function Dformat($row){

if($row['month']<10){
$row['month'] = "0".$row['month'];
}

if($row['day']<10){
$row['day'] = "0".$row['day'];
}


$r = $row['year'].'-'.$row['month'].'-'.$row['day'];
return $r;

}

function Tformat($row){

if($row['second']<10){
$row['second'] = "0".$row['second'];
}

if($row['minute']<10){
$row['minute'] = "0".$row['minute'];
}

if($row['hour']<10){
$row['hour'] = "0".$row['hour'];
}



$r = $row['hour'].':'.$row['minute'].':'.$row['second'];
return $r;

}

?>