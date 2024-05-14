<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="verify" id="verify" placeholder="Podaj kod ">
        <input type="submit" value="Weryfikuj">
    </form>
    <?php
        session_start();
        include './connect.php';
        if(isset($_POST['verify'])){
            $verify = $_POST['verify'];
            if ($verify == $_SESSION['kod'] ){ 
                $sql = "INSERT INTO informacje (login, haslo, `email`) VALUES (?, ?, ?)";
                $query = $conn -> prepare($sql);
                $query->bind_param("sss", $_SESSION['login'], $_SESSION['haslo'], $_SESSION['email']);
                if ($query -> execute()) {
                        
                    header('Location: ./login.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;

                    $conn->close();
                }
                exit();
            }else{
                echo "Nieprawidłowy kod logowania";
            }
        }
    ?>
</body>
</html>