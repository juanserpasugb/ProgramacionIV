<?php
class Conexion
     {
            public static function conectar()
{
                $conn =new PDO('mysql:host=localhost;dbname=banco2;port=8889','root','root');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
    }
}



