<?php
session_start();
require_once("vendor/autoload.php");
if(visitor::check_visitor())
{$count =counter::get_count();
echo " counter is :  $count";}
else
{ $_SESSION["is_visted"]=true;
    $count =counter::get_count() ;  
counter::update_counter($count +1);
$count =counter::get_count() ;

echo " counter is : $count";}
