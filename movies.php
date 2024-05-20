<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2023.ico" type="image/icon type">
    <link rel="stylesheet" href="./css/movies.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>World War Z | Netflix</title>
</head>

<body>
    <?php
        session_start();
        include './connect.php';
        $sql = 'SELECT * FROM Filmy WHERE id = ?';
        $query = $conn -> prepare($sql);
        $query -> bind_param('i', $_GET['id']);
        $query -> execute();
        $result = $query -> get_result();
        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
        }
    ?>        
    <nav class="nav">
        <div class="nav__left nav__items flex">
            <ul class="nav__left-list flex">
                <li class="nav__left-list-item nav__logo">
                    <?php include './logoSvg.php' ?>
                </li>
            </ul>
        </div>
        <div class="nav__right flex">
            <ul class="nav__right-list">
                <span class="nav__right-text">TYSIĄCE FILMÓW, SERIALI I PROGRAMÓW &nbsp;</span>
                <button class="nav__btn nav__btn--join">DOŁĄCZ TERAZ</button>
                <button class="nav__btn nav__btn--login">ZALOGUJ SIĘ</button>
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

