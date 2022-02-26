<?php
class visitor
{

public static function check_visitor()
{ if(isset($_SESSION["is_visted"]) && $_SESSION["is_visted"])
    return true;
    else 
    return false;

}










}