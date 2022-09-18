<?php

use FTP\Connection as FTPConnection;

class Connection

//The stactic means the function is available globally and is not necessary to call the new Connection, just connection::make (the colon colon means is calling a stactic method)
{
    public static function make($config) 
    {
        try {
    
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
         
         } catch (\PDOException $e){
             
             die($e->getMessage());
         }
        
    }
}
