<?php
            $conn = new mysqli("db", "root", "example", "mydb");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully to MySQL!";
        ?>