<?php
    session_start();
    $loginErrorMessage = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;
        include './connect.php';

        $usernameToCheck = mysqli_real_escape_string($conn, $username);
        $passwordToCheck = mysqli_real_escape_string($conn, $password);

        $sql = "SELECT * FROM users WHERE username = ?";
        $query = $conn->prepare($sql);
        $query->bind_param("s", $usernameToCheck);
        $query->execute();
        $result = $query->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if(password_verify($passwordToCheck, $row['password'])){
                $_SESSION['username'] = $row['username'];
                $_SESSION['id_user'] = $row['id'];
                $_SESSION['is_logged'] = true;
                header("Location: /projekt/");
                exit();
            }
            
        } else {
            $loginErrorMessage = "Nieprawidłowy login lub hasło";
        }
        
        $query->close();
        $conn->close();  
    }
?>
