<?php
                $servername = "localhost";
                $username = "root";
                $password = "Stefan123456";
                $dbname = "konto";
                

                $conn = new mysqli($servername, $username, $password, $dbname);
            
                // Ctionheck connec
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
?>  