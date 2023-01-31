<?php
    class Config{
        protected function connect() {
            $server = "localhost";
            $username = "root";
            $password = "";
            try{
                $conn = new PDO("mysql:host=$server;dbname=cam2rescueapp", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                return $conn;
            }catch(PDOException $e) {
                echo "ERROR " . $e->getMessage();
            }
        }
    }
?>