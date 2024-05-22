<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2023.ico" type="image/icon type">

    <title>World War Z</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php
        session_start();
        include './connect.php';
        if (!isset($_SESSION['id_user']) || $_COOKIE['is_logged'] != 'logged') {
            header("Location: ./unlogged.php");
            exit();
        }
    ?>
    <div class="background"> 
    </div>
    <nav>
        <div class="navLeft navItems flex">
            <ul class="navLeft_list  flex">
                <li class="navLeft_listitem logo">
                    <?php include './logoSvg.php' ?>
                </li>
                <li class="navLeft_listitem">Strona Główna</li>
                <li class="navLeft_listitem">Seriale i programy</li>
                <li class="navLeft_listitem">Filmy</li>
                <li class="navLeft_listitem">Najnowsze</li>
                <li class="navLeft_listitem">Moja lista</li>
            </ul>
        </div>
        <div class="navRight flex">
            <ul class="navRight_list">
                <li class="navRight_listitem"><input type="text" placeholder="       Szukaj"> <svg xmlns="http://www.w3.org/2000/svg" class=" szukaj icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" /><path d="M21 21l-6 -6" /></svg></li>
                
                <li class="navRight_listitem"><img src="./img/netflixuser.png" alt="netflixuser" width="30px"> 
                <span>
                    <?php
                        echo $_SESSION['username'];
                    ?>
                    </span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-down-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 9c.852 0 1.297 .986 .783 1.623l-.076 .084l-6 6a1 1 0 0 1 -1.32 .083l-.094 -.083l-6 -6l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057v-.118l.005 -.058l.009 -.06l.01 -.052l.032 -.108l.027 -.067l.07 -.132l.065 -.09l.073 -.081l.094 -.083l.077 -.054l.096 -.054l.036 -.017l.067 -.027l.108 -.032l.053 -.01l.06 -.01l.057 -.004l12.059 -.002z" stroke-width="0" fill="currentColor" /></svg></li>
                
            </ul>
        </div>
    </nav>
    <main>
        <div class="mainTop"> 
            <p class="continue">Kontynuuj oglądanie dla 
                <?php
                    echo $_SESSION['username'];
                ?>
            </p>
            <div class="moviesTop">
                <a href="./wwz.php">
                    <div class="wwzMovie topMovies  thrailer">
                       <img class="thrailer--off" src="./img/worldwarZ.png" alt="wwz" width="300px">
                       <div class="watchingProgress imgZ">
                           <div class="watchingProgress--red"></div>
                           <div class="watchingProgress--grey"></div>
                       </div>
                   </div>
                </a>
                <div class="bozecialoMovie topMovies thrailer">
                    <a href="bozecialo.html"> <img  class="thrailer--off" src="./img/bozecialo.jpg" alt="bozecialo" width="300px"></a>
                   
                    <div class="watchingProgress">
                        <div class="watchingProgress--red"></div>
                        <div class="watchingProgress--grey"></div>
                    </div>
                </div>
                <div class="ShrekMovie topMovies thrailer">
                    <img class="thrailer--off" src="./img/Shrek.png" alt="Shrek" width="300px">
                   
                    <div class="watchingProgress">
                        <div class="watchingProgress--red"></div>
                        <div class="watchingProgress--grey"></div>
                    </div>
                </div>
                <div class="nazachodzieMovie topMovies thrailer">
                    <img class="thrailer--off" src="./img/nazachodzie.png" alt="nazachodziebezzmian" width="300px">
                    
                    <div class="watchingProgress">
                        <div class="watchingProgress--red"></div>
                        <div class="watchingProgress--grey"></div>
                    </div>
                </div>
                <div class="klausMovie topMovies thrailer">
                    <a href="klaus.html"> <img class="thrailer--off" src="./img/klaus.png" alt="klaus" width="300px"></a>
                   
                    <div class="watchingProgress">
                        <div class="watchingProgress--red"></div>
                        <div class="watchingProgress--grey"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainCenter">
            <div class="arrow-container">
                <button class="rightArrow " id="mainCenterRightArrow" style="height: 168px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg>
                </button>
                <button class="leftArrow mainCenterLeftArrow" style="height: 168px;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l4 4" /><path d="M5 12l4 -4" /></svg>
                </button>
            </div>
            <p class="myList">Moja Lista</p>
            <div class="moviesCenter">
                <?php
                
                    $sql = 'SELECT f.tło, f.id FROM filmy f 
                    JOIN favorites fa ON f.id = fa.film_id
                    JOIN users u ON fa.user_id = u.id
                    WHERE u.username = ?';
                    $query = $conn -> prepare($sql);
                    $query -> bind_param('s', $_GET['id_user']);
                    $query -> execute();
                    $result = $query -> get_result();
                    if($result->num_rows > 0){
                        while($row = $result -> fetch_assoc()){
                            $_SESSION['id_filmu'] = $row['id'];
                            echo "<a href='./movies.php?id_filmu=" . $row['id'] . "'><div class='nazachodzieMovie topMovies thrailer'> <img src='" . $row['tło'] . "' alt='nazachodziebezzmian' width='300px'></div></a>";
                        }
                    }
                ?>
            </div>
        </div>
        <div class="mainCenter_2">
            <button class="rightArrow" style="height: 168px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg>
            </button>
            <button class="leftArrow mainCenter_2Arrow" style="height: 168px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l4 4" /><path d="M5 12l4 -4" /></svg>
            </button>
            <p class="myList">Popularne wśród użytkowników </p>
            <div class="moviesCenter">
                <div class="spiritedaway topMovies thrailer">
                    <img class="thrailer--off" src="./img/spiritedaway.png" alt="spiritedaway" width="300px">
                    
                </div>
                <div class="ShrekMovie topMovies thrailer">
                    <img src="./img/Shrek.png" alt="Shrek" width="300px">
                </div>
                <div class="nazachodzieMovie topMovies thrailer">
                    <img src="./img/nazachodzie.png" alt="nazachodziebezzmian" width="300px">
                </div>
                <div class="klausMovie topMovies thrailer">
                    <img src="./img/klaus.png" alt="klaus" width="300px">
                </div>
                <div class="spiritedaway topMovies thrailer">
                    <img class="thrailer--off" src="./img/spiritedaway.png" alt="spiritedaway" width="300px">
                   
                </div>
                <div class="ShrekMovie topMovies thrailer">
                    <img src="./img/Shrek.png" alt="Shrek" width="300px">
                </div>
                <div class="nazachodzieMovie topMovies thrailer">
                    <img src="./img/nazachodzie.png" alt="nazachodziebezzmian" width="300px">
                </div>
                <div class="klausMovie topMovies thrailer">
                    <img src="./img/klaus.png" alt="klaus" width="300px">
                </div>
            </div>
        </div>
        <div class="mainBottom">
            <button class="rightArrow" style="height: 168px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M15 16l4 -4" /><path d="M15 8l4 4" /></svg>
            </button>
            <button class="leftArrow mainBottomArrow" style="height: 168px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l4 4" /><path d="M5 12l4 -4" /></svg>
            </button>
            <p class="myList">Proponowane</p>
            <div class="moviesCenter">
                <div class="spiritedaway topMovies thrailer">
                    <img class="thrailer--off" src="./img/spiritedaway.png" alt="spiritedaway" width="300px">
                   
                </div>
                <div class="ShrekMovie topMovies thrailer">
                    <img src="./img/Shrek.png" alt="Shrek" width="300px">
                </div>
                <div class="nazachodzieMovie topMovies thrailer">
                    <img src="./img/nazachodzie.png" alt="nazachodziebezzmian" width="300px">
                </div>
                <div class="klausMovie topMovies thrailer">
                    <img src="./img/klaus.png" alt="klaus" width="300px">
                </div>
                <div class="spiritedaway topMovies thrailer">
                    <img class="thrailer--off" src="./img/spiritedaway.png" alt="spiritedaway" width="300px">
                    
                </div>
                <div class="ShrekMovie topMovies thrailer">
                    <img src="./img/Shrek.png" alt="Shrek" width="300px">
                </div>
                <div class="nazachodzieMovie topMovies thrailer">
                    <img src="./img/nazachodzie.png" alt="nazachodziebezzmian" width="300px">
                </div>
                <div class="klausMovie topMovies thrailer">
                    <img src="./img/klaus.png" alt="klaus" width="300px">
                </div>
            </div>
        </div>
        <div class="mainBottom">
            
        </div>
    </main>
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