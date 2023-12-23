<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ремонт на дому</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="header_inner">
                <div class="header_top">
                        <div class="hamburger-menu">
                            <div class="tagline-title">
                                <h2>РАБОЧИЙ <span class="orange">ДОМ</span></h2>
                            </div>
                            <button class="button-hamburger"><img src="icons/menu.svg" alt="icons/menu.svg"></button>
                        </div>
                    <nav class="menu">
                        <a class = "our-contacts-button"><p>Наши Контакты</p> </a>
                        <ul class="communications_list">
                                <li class="communications_list__item phone-numbers">
                                    <div class="icon-list"><img src="icons/telephone_icon_menu.png" alt="#"></div>
                                    <div class="text-list"> <p>Номера для связи</p></div>
                                </li>
                                <li class="communications_list__item our-mail">
                                    <div class="icon-list"><img src="icons/mail.png" alt="#"></div>
                                    <div class="text-list"> <p>stroidom@gmail.com</p></div>
                                </li>
                                <li class="communications_list__item our-telegram"> 
                                    <div class="icon-list"><img src="icons/telegram.png" alt="#"></div>
                                    <div class="text-list"> <p>stroidom@gmail.com</p></div>
                                </li>
                        </ul>
                        <ul class="navbar">
                            <li class="navbar__item"><a href="">Главная</a></li>
                            <!-- <li class="navbar__item"> <img src="icons/line_icon.svg" alt=""> -->
                            <li class="navbar__item"><a href="#">Наши услуги</a></li>
                            <!-- <li class="navbar__item"> <img src="icons/line_icon.svg" alt=""> -->
                            <li class="navbar__item"><a href="№">О нас</a></li>
                        </ul>
                    </nav>
                </div> 
                <div class="form-container display-none">
                    <form action="#" class="contact-form">
                        <div class="contact-form__title"><h2>Форма Связи</h2></div>
                        <div class="form-element">
                            <input type="text" id="telephone" placeholder="Номер телефона" class="contact-form__input">
                        </div>
                        <div class="form-element">
                            <input type="text" id="email" placeholder="Email" class="contact-form__input">
                        </div>
                        <div>
                            <textarea name="#" class="contact-form__textarea" placeholder="Сообщение"></textarea>
                        </div>
                        <button class="contact-form__button">Отправить</button>
                    </form>
                </div> 
            <div class="header_bottom">
                <div class="tagline">
                    <div class="tagline__title">
                        <h1>РАБОЧИЙ <span class="orange">ДОМ</span></h1>
                    </div>
                    <div class="tagline__subtitle">
                        <h2><span class = "orange">Воплощаем</span> ваши <br> идеи <span class="orange">в жизнь</span></h2>
                    </div>
                    <div class="tagline__buttons">
                        <button class="tagline-button">Связаться</button>
                        <div class="our-works">
                            <div class="our-works__button-label"><p>Наши работы <svg  class="our-works__signpost" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-right" viewBox="0 0 18 18">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg></p> </div>
                        </div>
                    </div>
                </div>
                <div class="picture-section">
                    <div class="img-slider">
                        <div class="slide-image"> <img src="img/slider-1.jpg" alt="" class="src-slide-img" id="slider-img"></div>
                        <a href="#"id="href-carousel">
                        <div class="button-slider">
                            <img src="img/button-slider.svg" alt="#" id ="№">
                        </div>
                        </a>
                    </div>
                    <div class="picture-section__images">
                        <div class="picture-section__image-top"> <img src="img/image_section_top.jpg" alt="" class = "image-top-marking"></div>
                        <div class="picture-section__image-bottom"> <img src="img/image_section_bottom.jpg" alt=""></div>
                    </div>
                </div>             
            </div>
            </div>
        </div>
    </header> 
<script src="js/carousel.js"></script>
<script src="js/hamburger_menu.js"></script>
<script src="js/contact_form.js"></script>
    <section class="about-us">
        <div class="container">
            <div class="about-us__inner">
                    <div class="image_article">
                        <div class="image-block"><img src="img/article_photo_1.png" alt="#" class="image-block__parameters"></div>
                    </div>
                    <article class="about-us__article">
                        <div class="title-article">
                            <h2 class="title-article__h2">РАБОЧИЙ <span class="orange">ДОМ </span> - КОМПАНИЯ, КОТОРАЯ ПОМОЖЕТ С РЕМОНТОМ</h2>
                        </div>
                        <div class="text-article"> <p class="text-article__size">Профессиональный демонтаж зданий любой сложности! Доверьте нам свой проект и получите качественный результат. 
                            Опыт работы с 2021 года, множество выполненных заказов - от переездов до полного демонтажа зданий.</p></div>
                        <div class="about-us__advantage">
                            <div class="about-us__advantage__item" >
                                <h3 class="orange">5+</h3>
                                <p class="about-us__advantage__text">Опыт на рынке</p>
                            </div>
                            <div class="about-us__advantage__item">
                                <h3 class="orange">50+</h3>
                                <p class="about-us__advantage__text">Выполненных заказов</p>
                            </div>
                            <div class="about-us__advantage__item">
                                <h3 class="orange">100+</h3>
                                <p class="about-us__advantage__text">Довольных заказчиков</p>
                            </div>
                        </div>
                        <div class="button-article button-article-position-center">
                            <button class="button-article__options">ПРЕДЛОЖЕНИЕ ДНЯ</button>
                        </div>
                    </article> 
            </div>
        </div>
    </section>
    <div class="block-title">
        <div class="container">
            <div class="text-title">
                <h2>НАШИ <span class="orange">УСЛУГИ</span></h2>
            </div>
        </div>
    </div>
    <section class ="our-services">
        <div class="container">
            <div class="our-services__inner">
                   <div class="our-services__element our-services__element-1"></div>
                   <div class="our-services__element our-services__element-2"></div> 
                   <div class="our-services__element our-services__element-3"></div> 
            </div>
        </div>
    </section>
    <section class="our-achievements">
        <div class="container">
            <div class="our-achievements__inner">
                <article class="our-achievements-article">
                    <div class="title-article">
                        <h2 class="title-article__h2"><span class="orange">НАША ФИРМА</span> - ЛИДЕР НА РЫНКЕ В СВОЕЙ ОБЛАСТИ</h2>
                    </div>
                    <div class="text-article text-article-950px"> <p class="text-article__size">Наши клиенты уже несколько лет знают, что ремонт может быть быстрым и доступным. Мы внимательно обсуждаем каждую деталь с заказчиком, чтобы в итоге достичь качественного результата и оставить вас довольными.</p>
                    </div>
                    <div class="button-article button-article-position-center-950px">
                        <button class="button-article__options">УСЛУГИ</button>
                    </div>
                </article>
                <div class="image_article image_article-order-1">
                    <div class="image-block"><img src="img/article_photo_2.png" alt="#" class="image-block__parameters"></div>
                </div>
            </div> 
        </div>
    </section>
    <section class="our-features">
        <div class="container">
            <div class="our-features__inner">
                <div class="our-features__title">
                    <h2>НАШИ <span class="orange">ПРЕИМУЩЕСТВА</span></h2>
                </div>
                <div class="elements-feature">
                    <div class="element-feature">
                        <div class="element-feature__img"><img src="img/element-feature-1.png" alt="#"></div>
                        <div class="element-feature__title">
                            <h5 class="silver">ГАРАНТИЯ НАДЕЖНОСТИ</h5>
                        </div>
                        <div class="element-feature__text">
                            <p>Мы стремимся приложить максимальные усилия для выполнения работы.</p>
                        </div>
                    </div>
                    <div class="element-feature">
                        <div class="element-feature__img"><img src="img/element-feature-2.png" alt="#"></div>
                        <div class="element-feature__title">
                            <h5 class="silver">ГАРАНТИЯ НАДЕЖНОСТИ</h5>
                        </div>
                        <div class="element-feature__text">
                            <p>Мы стремимся приложить максимальные усилия для выполнения работы.</p>
                        </div>
                    </div>
                    <div class="element-feature">
                        <div class="element-feature__img"><img src="img/element-feature-3.png" alt="#"></div>
                        <div class="element-feature__title">
                            <h5 class="silver">ГАРАНТИЯ НАДЕЖНОСТИ</h5>
                        </div>
                        <div class="element-feature__text">
                            <p>Мы стремимся приложить максимальные усилия для выполнения работы.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-form-contact-us">
        <div class="container">
            <div class="form-contact-us__inner">
                <form action="#" class="form-contact-us">
                    <div class="form-contact-us__title"><h3>Форма Связи</h3></div>
                    <div class="form-contact-us__element">
                        <input type="text" id="telephone" placeholder="Номер телефона" class="form-contact-us__input">
                    </div>
                    <div class="form-contact-us__element">
                        <input type="text" id="email" placeholder="Email" class="form-contact-us__input">
                    </div>
                    <div>
                        <textarea name="#" class="form-contact-us__textarea" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="form-contact-us__button"><h5>Отправить</h5></button>
                </form>
            </div>
        </div>
    </section>
    <section class="section-reviews">
        <div class="container">
            <div class="section-reviews__inner">
                <div class="our-features__title">
                    <h2>ВАШИ<span class="orange"> ОТЗЫВЫ</span></h2>
                </div>
                <div class="elements-reviews">
                    <div class="element-review">
                        <div class="element-review__img"><img src="img/reviews.png" alt=""></div>
                        <div class="element-review__text">
                            <p>Всем добрый день. Обратился в компанию Рабочий дом, чтобы демонтировали всё в однокомнатной квартире, оставив голые стены. Оставила заявку, перезвонил мастер - приехали, осмотрели. Чуть позже мне прислали смету. Стоимость в смете от конечной стоимости не отличалась. Договорились на следующий день на демонтаж С задачей справились на отлично! После себя убрали весь мусор в парадной. Проблем не возникло. Всем советую. Отдельное спасибо Егору за работу. </p>
                        </div>
                        <div class="review-user">
                            <div class="review-user__photo"> <img src="img/review_user.png" alt=""></div>
                            <div class="review-user__text">
                                <p><span class="green bold">Рэсемелла Памерсон </span><br>Полный демонтаж</p>
                            </div>
                        </div>
                    </div>
                    <div class="element-review">
                        <div class="element-review__img"><img src="img/reviews.png" alt=""></div>
                        <div class="element-review__text">
                            <p>Хочу поделиться приятным впечатлением. Ребята Андрей и Владислав выполняли демонтаж стяжки на лоджии. Работали активно, слаженно, но очень аккуратно: защитили стекла, постарались на объекте при выносе мусора нигде ничего не поцарапать, в т.ч. лифт. По окончании работ весь мусор убрали, вынесли и вывезли.
                                Хочу отметить, что Владислав не стесняется проконсультировать по возникающим вопросам. Все договорённости выполнили.
                            </p>
                        </div>
                        <div class="review-user">
                            <div class="review-user__photo"> <img src="img/review_user_2.png" alt=""></div>
                            <div class="review-user__text">
                                <p><span class="green bold">Василиса Фондельбубен </span><br>Полный демонтаж</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>