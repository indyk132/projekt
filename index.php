<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2023.ico" type="image/icon type">

    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <?php
        session_start();
        if($_COOKIE['is_logged'] != 'logged'){
            header("Location: ./login.php");
            exit();
        }
    ?>
    <div class="background"> 
    </div>
    <nav>
        <div class="navLeft navItems flex">
            <ul class="navLeft_list  flex">
                
                <li class="navLeft_listitem logo">
                    <svg style="color: red; fill:currentColor" viewBox="0 0 111 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="default-ltr-cache-1d568uk ev1dnif2"><g><path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"></path></g></svg>
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
                <li class="navRight_listitem"><svg xmlns="http://www.w3.org/2000/svg" class=" bell icon icon-tabler icon-tabler-bell-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.235 19c.865 0 1.322 1.024 .745 1.668a3.992 3.992 0 0 1 -2.98 1.332a3.992 3.992 0 0 1 -2.98 -1.332c-.552 -.616 -.158 -1.579 .634 -1.661l.11 -.006h4.471z" stroke-width="0" fill="currentColor" /><path d="M12 2c1.358 0 2.506 .903 2.875 2.141l.046 .171l.008 .043a8.013 8.013 0 0 1 4.024 6.069l.028 .287l.019 .289v2.931l.021 .136a3 3 0 0 0 1.143 1.847l.167 .117l.162 .099c.86 .487 .56 1.766 -.377 1.864l-.116 .006h-16c-1.028 0 -1.387 -1.364 -.493 -1.87a3 3 0 0 0 1.472 -2.063l.021 -.143l.001 -2.97a8 8 0 0 1 3.821 -6.454l.248 -.146l.01 -.043a3.003 3.003 0 0 1 2.562 -2.29l.182 -.017l.176 -.004z" stroke-width="0" fill="currentColor" /></svg></li>
                <li class="navRight_listitem"><img src="./img/netflixuser.png" alt="netflixuser" width="30px"> 
                <span>
                    <?php
                        echo $_GET['id'];
                    ?>
                    </span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-down-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 9c.852 0 1.297 .986 .783 1.623l-.076 .084l-6 6a1 1 0 0 1 -1.32 .083l-.094 -.083l-6 -6l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057v-.118l.005 -.058l.009 -.06l.01 -.052l.032 -.108l.027 -.067l.07 -.132l.065 -.09l.073 -.081l.094 -.083l.077 -.054l.096 -.054l.036 -.017l.067 -.027l.108 -.032l.053 -.01l.06 -.01l.057 -.004l12.059 -.002z" stroke-width="0" fill="currentColor" /></svg></li>
                <li class="navRight_listitem"></li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="mainTop"> 
            <p class="continue">Kontynuuj oglądanie dla 
                <?php
                    echo $_GET['id'];
                ?>
            </p>
            <div class="moviesTop">
                <a href="./wwz.html">
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