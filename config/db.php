<?php
require("connection.php");
class DB{
    private static $pdo;
    public static function connection()
    {
       if(!isset(self::$pdo))
       {
        try
        {
             // self::$pdo = new PDO('mysql:host='.DB_Host.';dbname='.DB_Name,DB_User,DB_Pass);
 
             self::$pdo = new PDO('mysql:host='.DB_Host.';dbname='.DB_Name,DB_User,DB_Pass);
 
        }
 
        catch(PDOException $e)
        {
             echo "Connection Faield....!".$e->getMessage();
        }
     }
       }
}

?>