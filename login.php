<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2023.ico" type="image/icon type">

    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
    <link rel="stylesheet" href="./css/navbar.css">
    <!-- <link rel="stylesheet" href="./css/main.css"> -->
</head>
<body style="color: white" >
    <div class="background"></div>

        <nav>
            <div class="navLeft navItems flex">
                <ul class="navLeft_list  flex">
                    
                    <li class="navLeft_listitem logo">
                        
                    </li>
                   
                </ul>
            </div>
            <div class="navRight flex">
                <ul class="navRight_list">
                    <span style="font-size: 15px;">TYSIĄCE FILMÓW, SERIALI I PROGRAMÓW &nbsp;</span>
                    <a href='./utworzkonto.php'> <button style=" color: white; background-color: red; border: none; padding: 9px 13px; border-radius: 4%; margin-right: 10px;">
                        DOŁĄCZ TERAZ
                    </button></a>
                    
                </ul>
            </div>
        </nav>
        <?php
        session_start();
            $loginErrorMessage = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $login = isset($_POST['login']) ? $_POST['login'] : null;
                $haslo = isset($_POST['haslo']) ? $_POST['haslo'] : null;
                $email = isset($_POST['email']) ? $_POST['email'] : null;
                @include './connect.php';
                
                $loginToCheck = mysqli_real_escape_string($conn, $login);
                $hasloToCheck = mysqli_real_escape_string($conn, $haslo);
                $sql = "SELECT * FROM informacje WHERE login = ? AND haslo = ?";
                $query = $conn -> prepare($sql);
                $query->bind_param("ss", $loginToCheck, $hasloToCheck);
                $query -> execute();
                $result = $query->get_result();
                
                if ($result->num_rows > 0) {
                    header('Location: index.php');
                    exit();
                } else {
                    $loginErrorMessage = "Nieprawidłowy login lub hasło";
                }
                
                $conn->close();
            }
        ?>

        <main>
            <form action="" method="post">
                <div class="inputs">
                    <label for="login">Login</label>
                    <input type="text" placeholder="Podaj Login" name="login">
                    <span style="color: red">
                        <?php echo $loginErrorMessage; ?>
                    </span>
                    <label for="haslo">Hasło</label>
                    <input type="password" placeholder="Podaj hasło" name="haslo">
                    <input type="submit" value="zaloguj się" class="main_Button--login">
                </div>
            </form>
        </main>
    <style>
        main{
            position: relative;
            display: flex;
            flex-direction: row;
            justify-content: center;
            height: 500px;
            
            
        }
        .inputs{
            position: absolute;
            display: flex;
            flex-direction: column;
            row-gap: 5px;
            top:  50%;
            right: 50%;
           
            
        }
        input{
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        </style>
    <!-- <script>
        const videos = document.querySelectorAll('.thrailer');
        let a = false;
        videos.forEach((video, index) => {
            const thrailerOff = video.querySelector('.thrailer--off');
            const thrailerOn = video.querySelector('.thrailer--on');

            video.addEventListener('mouseenter', () => {
                    a = true;
                    if (a == true){
                        setTimeout(() => {
                            thrailerOff.style = "display: none";
                            thrailerOn.style = "display: flex";
                            video.querySelector('iframe').contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
                        }, 1000)
                    }
            });
            video.addEventListener('mouseleave', () => {
                 a = false
                 if (a == false){
                setTimeout(() => {
                    thrailerOff.style = "display: flex"
                    thrailerOn.style = "display: none";
                    video.querySelector('iframe').contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                }, 1000); }
            });
        });
    </script> -->
    <script src="./js/slider.js"></script>
</body>
</html>