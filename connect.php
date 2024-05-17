<?php
                $servername = "localhost";
                $dbusername = "root";
                $dbpassword = "Stefan123456";
                $dbname = "konto";
                

                $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
            
                // Ctionheck connec
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
?>  