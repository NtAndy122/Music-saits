<?php
$link=mysqli_connect('localhost','root','','wok') or die($link);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;1,100;1,200&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
        <title>Document</title>
</head>
<body>

<header>
        <div class="menu">
        <div class="logo"><a href="#"><img src="img/Yataro__4_-removebg-preview.png" width="300" height="230" ></a></div>
        <div class="sub-menu">
            <a href="#">Главная</a>
            <a href="#part1">О нас</a>
            <a href="#part2">Отзывы</a>
            <a href="#part3">Контакты</a>
        </div>
        <div class="sigin">
            <a href="#" class="number">+7 (930) 423-48-11</a>
        </div>
    </div>
    <div class="burger">
    <div id="menu-burger">
        <span class="menu-icon"></span>
    </div>

    <div id="overlay-menu">
        <nav role='navigation'>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#part1">О нас</a></li>
                <li><a href="#part2">Отзывы</a></li>
                <li><a href="#part3">Контакты</a></li>
            </ul>
        </nav>
    </div>
    </div>
</header>
<main>
<div class="predlozenie">
    <div class="slider">
        <div class="item">
            <img src="img/photo-1543062094-d22540cadf2d.jpg" alt="Первый слайд" >
            <div class="slideText">Бесплатная доставка по Всем регионам РФ</div>
        </div>
        <div class="item">
            <img src="img/slide-02.jpg" alt="Второй слайд">
            <div class="slideText">Поможем вам подобрать инстремент для души</div>
        </div>

        <a class="prev" onclick="minusSlide()">&#10094;</a>
        <a class="next" onclick="plusSlide()">&#10095;</a>
    </div>
    <div class="slider-dots">
        <span class="slider-dots_item" onclick="currentSlide(1)"></span>
        <span class="slider-dots_item" onclick="currentSlide(2)"></span>
    </div>
</div>
    <div class="supports">
        <div class="sup">
            <div class="asses" id="part1"> <img src="img/mediator.png" width="120" height="120"><span class="zom">Лучшее соотношение <br/> цена - качество</span></div>
        <div class="asses"><img src="img/—Pngtree—free%20delivery%20icon_5228436%201.png" width="140" height="110" ><span class="zom">Бесплатная доставка по всей России</span></div></div>
        <div class="sup">
            <div class="asses"><img src="img/sale.png" width="120" height="120"><span class="zom">Частые скидки <br/> и распродажи</span></div>
        <div class="asses"><img src="img/pngwing%202.png" width="140" height="115"><span class="zom">Помощь по всем вопросам <br/>при заказе</span></div></div>
    </div>
    <div class="produckts">
        <div class="drums1"></div>
        <div class="drums2">
            <h3>Новый продукт</h3>
            <p class="one">Одни из самных лучших барабанов на рынке: Pearl Session Maple Custom</p>
            <p class="two">Pearl Session Maple Custom характеризуется кленовыми 6-ти слойными корпусами барабанов и высококачественной фурнитурой, что делает Pearl session maple custom синонимом превосходства. Для поддержания оптимального резонанса и артикуляции, Pearl session maple custom отличается тройными фланцевыми обручами SuperHoop II.</p>
            <button class="btn" data-modal="1">
                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                    <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                </svg>
                <span>Подробнее</span>
            </button>
            <!-- Несколько модальных окон -->
            <div class="modal" data-modal="1">
                <h1>Комплектующие набора</h1>
                <!--Карточки с комплектом-->
                <div class="flexcards">
                <div class="containercardst">
                    <div class="card">
                        <div class="slide slide1">
                            <div class="content">
                                <div class="icon"><img src="img/bassssdr.jpg" width="300" height="200">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide2">
                            <div class="content">
                                <span class="infs1">Бас-барабан "PEARL PEARL FZ-2218B/C21" </span>
                                <p>Бас барабан серии Forum 22″x18″.Корпус из 6-ти слоёв тополя, чёрная и белая фурнитура. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containercardst">
                    <div class="card">
                        <div class="slide slide1">
                            <div class="content">
                                <div class="icon"><img src="img/stak.jpg" width="300" height="200">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide2">
                            <div class="content">
                                <span class="infs1">Стойки для барабанов и тарелок "Pearl S-830" </span>
                                <p>Система Uni-Lock – допускает бесконечную регулировку для точного определения размещения тарелки и надежной фиксации наклона одним поворотом винта.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containercardst">
                    <div class="card">
                        <div class="slide slide1">
                            <div class="content">
                                <div class="icon"><img src="img/tarlk.jpg" width="300" height="200">
                                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="slide slide2">
                            <div class="content">
                                <span class="infs1">Тарелки "Hybrid Hi-Hats 10" </span>
                                <p>Серия Hybrid Hi-Hats 10 стоит на первом месте среди произведенных тарелок и отличается высококачественным звуком в числе доступных по цене тарелок.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!--   Svg иконка для закрытия окна  -->
                <svg class="modal__cross js-modal-close" xmlns="http://www.w3.org/2000/svg"   viewBox="0 0 24 24"><path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
            </div>
            <!-- Подложка под модальным окном -->
            <div class="overlay js-overlay-modal"></div>
        </div>
    </div>
    <div class="reviews">
        <h2 class="otside" id="part2">Отзывы</h2>
        <div class="otsivy">
            <div class="card1">
            <div class="rew1">
                <div class="container">
                    <div class="user1"><img src="img/957_oooo%201.png"></div>
                    <div class="users1">
                        <p class="name">Имя:LOVV66</p>
                        <p class="tm">Дата:19.03 22:30</p>
                    </div>
                </div>
                <p class="inf">Заказывали инструменты всем Melon Music, Seeme очень понравилась укулеле, гитары очень качественные, брынькал на них только так. Сервис советую, очень дружелюбные работники, если что то непонятно - подскажут.</p>
            </div>
                <div class="rew2">
                    <div class="container">
                        <div class="user1"><img src="img/957_oooo%201.png"></div>
                        <div class="users1">
                            <p class="name">Имя:LOVV66</p>
                            <p class="tm">Дата:19.03 22:30</p>
                        </div>
                    </div>
                    <p class="inf">Заказывали инструменты всем Melon Music, Seeme очень понравилась укулеле, гитары очень качественные, брынькал на них только так. Сервис советую, очень дружелюбные работники, если что то непонятно - подскажут.</p>
                </div>
        </div>
            <div class="card2">
                <div class="rew3">
                    <div class="container">
                        <div class="user1"><img src="img/957_oooo%201.png"></div>
                        <div class="users1">
                            <p class="name">Имя:LOVV66</p>
                            <p class="tm">Дата:19.03 22:30</p>
                        </div>
                    </div>
                    <p class="inf">Заказывали инструменты всем Melon Music, Seeme очень понравилась укулеле, гитары очень качественные, брынькал на них только так. Сервис советую, очень дружелюбные работники, если что то непонятно - подскажут.</p>
                </div>
                <div class="rew4">
                    <div class="container">
                        <div class="user1"><img src="img/957_oooo%201.png"></div>
                        <div class="users1">
                            <p class="name">Имя:LOVV66</p>
                            <p class="tm">Дата:19.03 22:30</p>
                        </div>
                    </div>
                    <p class="inf">Заказывали инструменты всем Melon Music, Seeme очень понравилась укулеле, гитары очень качественные, брынькал на них только так. Сервис советую, очень дружелюбные работники, если что то непонятно - подскажут.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="connect">
        <div class="concentr">
            <div class="lef">
                <h2>Сделайте заказ!</h2>
                <form action="index.php" method="POST" id="form">
                    <input type="text" placeholder="Ваше имя" name="name">
                    <input type="text" placeholder="Ваша Фамилия" name="family">
                    <input type="text" placeholder="Телефон" name="phone">
                <input type="submit" id="sub" value="Записаться" name="button" class="form-send">
                </form>
            </div>
            <?php
            if ((isset($_POST['name'])) && (isset($_POST['family'])) && (isset($_POST['phone']))) {
                $Name = $_POST['name'];
                $family = $_POST['family'];
                $phone = $_POST['phone'];
                mysqli_query($link, "INSERT INTO `zapros` (`id`, `name`, `family`, `phone`) VALUES (NULL, '$Name', '$family', '$phone')");
            }
            ?>
            <div class="rig">
                <div class="blacks"><img src="img/image-removebg-preview%20(3)%201.png" width="310" height="210" </div>
                <div class="blacks"><span class="tts">Заполните форму прямо сейчас и получите купон на последующие покупки со скидкой 15%</span></div>
                <div class="blacks">
                    <span class="tttxtx">До конца акции:</span>
                    <div class="timer">
                        <h1 class="countdown-title"></h1>
                        <div id="countdown" class="countdown">
                            <div class="countdown-number">
                                <span class="days countdown-time"></span>
                                <span class="countdown-text">Дней</span>
                            </div>
                            <div class="countdown-number">
                                <span class="hours countdown-time"></span>
                                <span class="countdown-text">Часы</span>
                            </div>
                            <div class="countdown-number">
                                <span class="minutes countdown-time"></span>
                                <span class="countdown-text">Минуты</span>
                            </div>
                            <div class="countdown-number">
                                <span class="seconds countdown-time"></span>
                                <span class="countdown-text">Секунды</span>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
    </div>
    </div>
</main>
<footer><div class="footer">
        <div class="footer-content">
            <div class="left-nav">
                <div class="logoss"><a href="#"><img src="img/Yataro__4_-removebg-preview.png" width="300" height="230"></a></div>
                <p>Мы в социальных сетях:</p>
                <div class="soc-icon">
                    <a href="#"><img src="img/icons8-vk-в-круге-48.png"  alt=""></a>
                    <a href="#"><img src="img/icons8-одноклассники-48.png" alt=""></a>
                    <a href="#"><img src="img/icons8-телеграмма-app-48.png" alt=""></a>
                </div>
            </div>
            <div class="mid-nav">
                <a href="#">Главная</a>
                <a href="#">Каталог</a>
                <a href="#">Контакты</a>
                <a href="#">О нас</a>
            </div>
            <div class="right-nav">
                <div class="right-nav-info">
                    <div class="left-icon">
                        <a href="#"><img src="img/icons8-местонахождение-пользователя-48.png" alt="" width="46" height="46"></a>
                        <a href="#"><img src="img/icons8-телефон-64.png" alt="" width="48" height="48"></a>
                        <a href="#"><img src="img/icons8-почта-48.png" alt="" height="42" width="42"></a>
                    </div>
                    <div class="right-gps">
                        <a href="#" id="part3" >Контакты:</a>
                        <a href="#">ул. Брамса, 9, Калининград</a>
                        <a href="#">+7 (4012) 99-56-32</a>
                        <a href="#">YATARO@yandex.ru</a>
                    </div>
                </div>
            </div>
            <div class="under-foot-info">
                <hr width="1500">
                <div class="copy-info">
                    <p>© 2021 YATARO. Музыкальный магазин</p>
                </div>
            </div>
        </div>
    </div></footer>

<script>
    /* Индекс слайда по умолчанию */
    var slideIndex = 1;
    showSlides(slideIndex);

    /* Функция увеличивает индекс на 1, показывает следующй слайд*/
    function plusSlide() {
        showSlides(slideIndex += 1);
    }

    /* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
    function minusSlide() {
        showSlides(slideIndex -= 1);
    }

    /* Устанавливает текущий слайд */
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    /* Основная функция слайдера */
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("item");
        var dots = document.getElementsByClassName("slider-dots_item");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</body>
<script src="scripts/jquery-3.6.0.min.js"></script>
<script src="scripts/scrol.js"></script>
<script src="scripts/js.js"></script>
</html>
