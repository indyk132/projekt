<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2023.ico" type="image/icon type">
    <link rel="stylesheet" href="./css/movies.css">
    <!-- <link rel="stylesheet" href="./css/navbar.css"> -->
    <title>World War Z | Netflix</title>
</head>

<body>
    <?php
        session_start();
        include './connect.php';
        if(isset($_SESSION['id_user']) == false or $_COOKIE['is_logged'] != 'logged'){
            header("Location: ./moviesunlogged.php");
            exit();
        }
        $sql = 'SELECT * FROM Filmy WHERE id = ?';
        $query = $conn -> prepare($sql);
        $query -> bind_param('i', $_GET['id_filmu']);
        $query -> execute();
        $result = $query -> get_result();
        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
        }
    ?>        
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
                        echo $_SESSION['id_user'];
                    ?>
                    </span>
                 <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-caret-down-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 9c.852 0 1.297 .986 .783 1.623l-.076 .084l-6 6a1 1 0 0 1 -1.32 .083l-.094 -.083l-6 -6l-.083 -.094l-.054 -.077l-.054 -.096l-.017 -.036l-.027 -.067l-.032 -.108l-.01 -.053l-.01 -.06l-.004 -.057v-.118l.005 -.058l.009 -.06l.01 -.052l.032 -.108l.027 -.067l.07 -.132l.065 -.09l.073 -.081l.094 -.083l.077 -.054l.096 -.054l.036 -.017l.067 -.027l.108 -.032l.053 -.01l.06 -.01l.057 -.004l12.059 -.002z" stroke-width="0" fill="currentColor" /></svg></li>
                
            </ul>
        </div>
    </nav>
    <section class="movie">
        <div class="movie__background">
            <img src='<?php echo $row["tło"]; ?>' alt="wwz" height="100%" width="100%">
            <div class="movie__hero-background">
                <div class="movie__logo"><img src='<?php echo "$row[logo]" ?>' alt="logo" width='500px' height="200px"></div>
                    <span class="movie__title"><strong><?php echo $row['tytuł']?></strong></span>
                    <div class="movie__details">
                        <span><?php echo substr($row['data_produkcji'], 0, 4)?></span>
                        <span><?php echo $row['wiek']?>+</span>
                        <span>
                            <?php 
                                $minuty = ($row['czas_trwania'] / 60)% 60;
                                $godziny = floor(($row['czas_trwania'] / 60) - $minuty) / 60;
                                echo $godziny.'h '.$minuty.'min.' ; 
                            ?>
                        </span>
                        <span><?php echo $row['gatunek'] ?></span>
                    </div>
                    <div class="movie__description--container">
                        <p class="movie__description movie__info">
                            <?php echo $row['opis'].'<br><br>'; ?> 
                            <?php echo 'W rolach głównych: '.$row['główne_role'];?>
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <main>
        <div class="join-now">
            <?php include './joinNowSvg.php' ?>
            <div class="join-now__content"> 
                <span>oglądaj bez ograniczeń</span>
                <button class="join-now__btn">DOŁĄCZ TERAZ</button>
            </div>
        </div>
        <div class="oscars">
            <p class="oscars__text">
                <span>Trzymający w napięciu thriller o zombie na podstawie powieści Maksa</span><br>
                <span>Brooksa z nagrodzonym Oscarem Bradem Pittem.</span>
            </p>
        </div>
        <div class="details">
            <div class="details__header">
                <h1>Więcej Szczegółów</h1>
                <p>Tekst nagłówka sekcji więcej szczegółów</p>
            </div>
            <div class="details__content">
                <div class="details__group">
                    <div>
                        <p class="details__label">Oglądaj offline</p>
                        <p>Pobieraj i oglądaj poza domem.</p>
                    </div>
                    <div>
                        <p class="details__label"> Obsada</p>
                        <p> Brad Pitt</p>
                        <p> Ludi Boeken</p>
                    </div>
                </div>
                <div class="details__group">
                    <div>
                        <p class="details__label">Gatunki</p>
                        <p>Filmy science fiction, Horrory,</p>
                        <p>Adaptacje filmowe, Filmy akcji i przygodowe</p>
                    </div>
                    <div>
                        <p> Mireille Enos</p>
                        <p> Fana Mokoena</p>
                    </div>
                </div>
                <div class="details__group">
                    <div>
                        <p class="details__label">Kategorie:</p>
                        <p>Brutalny, Straszny, Trzymający w napięciu</p>
                    </div>
                    <div>
                        <p> Daniella Kertesz</p>
                        <p> Abigail Hargrove</p>
                    </div>
                </div>
                <div class="details__group">
                    <div>
                        <p class="details__label">Dźwięk</p>
                        <p>German, English - Audio Description,</p>
                        <p>English [Original], Polish, Russian</p>
                    </div>
                    <div>
                        <p> James Badge Dale</p>
                        <p> Sterling Jerins</p>
                    </div>
                </div>
                <div class="details__group">
                    <div>
                        <p class="details__label">Napisy</p>
                        <p>German, English, Polish, Russian, Ukrainian</p>
                    </div>
                    <div>
                        <p> David Morse</p>
                        <p> Fabrizio Guido</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="similar">
            <h1 class="similar__header">Więcej Podobnych</h1>
            <div class="similar__movies">
                <div class="similar__movie">
                    <img src="./img/klaus.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/spiritedaway.png" alt="">
                </div>

                <div class="similar__movie">
                    <img src="./img/klaus.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/spiritedaway.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/Shrek.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/klaus.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/spiritedaway.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/Shrek.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/klaus.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/spiritedaway.png" alt="">
                </div>
                <div class="similar__movie">
                    <img src="./img/Shrek.png" alt="">
                </div>
            </div>
        </div>
        <div class="upcoming">
            <h1 class="upcoming__header">Wkrótce</h1>
            <div class="upcoming__movies">
                <div class="upcoming__movie">
                    <p>Awatar: Ostatni władca wiatru</p>
                    <p class="details__label">Woda. Ziemia. Ogień. Powietrze. Dawno temu cztery narody żyły razem w harmonii — ale potem wszystko się zmieniło. Aktorska adaptacja historii Aanga.</p>
                </div>
                <div class="upcoming__movie">
                    <p>Rebel Moon – część 1: Dziecko ognia</p>
                    <p class="details__label">Kiedy okrutne armie Macierzy zaczynają zagrażać spokojnej rolniczej osadzie na odległym księżycu, jej największą nadzieją na przetrwanie staje się tajemnicza outsiderka.</p>
                    <p class="details__label">Zaglądaj za kulisy filmów, seriali i programów Netflix, sprawdzaj nadchodzące premiery i oglądaj materiały dodatkowe na stronie Tudum.com.</p>
                </div>
                <div class="upcoming__movie">
                    <!-- Pozostałe filmy wkrótce -->
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__content">
            <span class="details__label">Pytania? Zadzwoń pod numer 00 800 112 4392</span>
        </div>
    </footer>
</body>
</html>

