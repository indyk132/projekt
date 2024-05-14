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
        if(isset($_POST['verify'])){
            $verify = $_POST['verify'];
            if ($verify == $_SESSION['kod'] ){ 
                header('Location: ./login.php');
                exit();
            }else{
                echo "Nieprawidłowy kod logowania";
            }
        }
    ?>
</body>
</html>