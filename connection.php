<?php

$hostDB = '127.0.0.1';
$portDB = '5432';
$nameDB = 'wp2_4d';
$userDB = 'postgres';
$pwDB = 'naovi29';

$connection = pg_connect("host=$hostDB port=$portDB dbname=$nameDB user=$userDB password=$pwDB");

if($connection){

}else{
 
}
?>