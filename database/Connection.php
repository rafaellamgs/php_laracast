<?php

use FTP\Connection as FTPConnection;

class Connection

{
    public static function make() //The stactic means the function is available globally and is not necessary to call the new Connection, just connection::make (the colon colon means is calling a stactic method)
    {
        try {
    
            return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'root');
         
         } catch (PDOException $e){
             
             die($e->getMessage());
         }
        
    }
}
