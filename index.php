<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yarosh</title>

    <link rel="shortcut icon" href="./static/img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./static/index.css">
    <script src="./static/index.js" defer></script>
</head>
<body>
    <nav>
        <section>
            <h1>
                <img src="./static/img/logo.svg" alt="Yarosh - Фотограф, дизайнер, викладач">
                Yarosh
            </h1>
            <div class="menu">
                <a href="#about">Я</a>
                <a class="dummy">|</a>
                <a href="#photo">Фотограф</a>
                <a href="#design">Дизайнер</a>
                <a href="#tutor">Викладач</a>
                <a class="dummy">|</a>
                <a href="#contact">Контактувати</a>
            </div>
        </section>
    </nav>
    <section id="hero">
        <img src="./static/img/hero.jpg" alt="Yarosh - Фотограф, дизайнер, викладач" class="main-img">
        <div class="textbox">
            <p class="subtitle">
                <img src="./static/img/icons/hand.svg" alt="Hello!">, я Yarosh і я
            </p>
            <h1 class="title" data-hero-changing-text></h1>
            <a href="#contact" class="brand-btn">Контактувати</a>
            <p class="location">
                <img src="./static/img/icons/pin.svg" alt="Я з Тернополя" class="w-4">
                Тернопіль
            </p>
        </div>
    </section>
    <section id="about">
        <h1 class="section-title">Про мене <div class="line"></div></h1>
        <p class="section-subtitle">
            Привіт, я Рома Ярошевський, крутий хлоп з тернополя, розказую трохи про себе.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium autem, rem recusandae animi aliquam, magnam labore nostrum eligendi, vel dolorem sequi debitis delectus eveniet perspiciatis nihil soluta iste asperiores nam.
        </p>
        <h2>Експертність</h2>
        <div class="cards-wrapper">
            <div class="card" style="background-color:var(--brand2)">
                <img src="./static/img/icons/camera.svg" alt="Я фотограф">
                <p class="header">01</p>
                <h3 class="title">Фотограф</h3>
                <div class="bottom-wrapper">
                    <p class="desc">Я роблю круті фото портрети</p>
                    <a href="#photo" class="cta">Більше...</a>
                </div>
            </div>
            <div class="card" style="background-color:var(--brand1)">
                <img src="./static/img/icons/design.svg" alt="Я графічний дизайнер">
                <p class="header">02</p>
                <h3 class="title">Дизайнер</h3>
                <div class="bottom-wrapper">
                    <p class="desc">Я дуже крутий графічний дизайнер</p>
                    <a href="#design" class="cta">Більше...</a>
                </div>
            </div>
            <div class="card" style="background-color:var(--brand3)">
                <img src="./static/img/icons/tutor.svg" alt="Я викладач">
                <p class="header">03</p>
                <h3 class="title">Викладач</h3>
                <div class="bottom-wrapper">
                    <p class="desc">Я супер пупер репетитор з англійської</p>
                    <a href="#tutor" class="cta">Більше...</a>
                </div>
            </div>
        </div>
    </section>
    <section id="photo">
        <h1 class="section-title expertise">Фотограф<div class="lines"></div></h1>
        <div class="photos-wrapper">
            <img class="vert" src="./static/img/photos/1.friends.jpg" alt="Фотопортрет">
            <img src="./static/img/photos/5.guy-tennis-gray.jpg" alt="Фотопортрет">
            <img class="green" src="./static/img/photos/2.girl-ballons.png" alt="Фотопортрет">
            <img src="./static/img/photos/3.guy-gray-stand.jpg" alt="Фотопортрет">
            <img src="./static/img/photos/2.girls-laugh.png" alt="Фотопортрет">
            <img src="./static/img/photos/2.girls-pack.png" alt="Фотопортрет">
            <img class="green" src="./static/img/photos/3.guy-gray-hand.jpg" alt="Фотопортрет">
            <img src="./static/img/photos/4.guy-shadow.jpg" alt="Фотопортрет">
            <img class="vert" src="./static/img/photos/1.girl-field.jpg" alt="Фотопортрет">
            <img src="./static/img/photos/5.guy-tennis-color.jpg" alt="Фотопортрет">
        </div>
        <a href="#contact" class="brand-btn">Хочу на фотосесію</a>
    </section>
    <section id="design">
        <h1 class="section-title expertise" style="text-align: center">Дизайнер</h1>
        <div class="designs-wrapper">
            <div class="design">
                <img src="./static/img/design/1.png" alt="Графічний дизайн">
                <p>Опис цього дизайну</p>
            </div>
            <div class="design">
                <img src="./static/img/design/2.png" alt="Графічний дизайн">
                <p>Опис цього дизайну</p>
            </div>
            <div class="design">
                <img src="./static/img/design/3.png" alt="Графічний дизайн">
                <p>Опис цього дизайну</p>
            </div>
            <div class="design">
                <img src="./static/img/design/4.png" alt="Графічний дизайн">
                <p>Опис цього дизайну</p>
            </div>
            <div class="design">
                <img src="./static/img/design/5.png" alt="Графічний дизайн">
                <p>Опис цього дизайну</p>
            </div>
        </div>
        <a href="#contact" class="brand-btn cta">Зроби мені дизайн</a>
    </section>
    <section id="tutor">
        <h1 class="section-title expertise">Викладач</h1>
        <p class="section-subtitle">Я і ще й репетитор з англ</p>
        <div class="features-wrapper">
            <div class="feature" style="background-color: var(--brand3)">
                <p class="title">Знання мови</p>
                <h3 class="value">B-2+</h3>
            </div>
            <div class="feature" style="background-color: var(--brand1)">
                <p class="title">Освіта</p>
                <h3 class="value">Студент</h3>
            </div>
            <div class="feature" style="background-color: var(--brand2)">
                <p class="title">Пробне заняття</p>
                <h3 class="value">+</h3>
            </div>
        </div>
        <a href="#contact" class="brand-btn">Записатись на урок</a>
    </section>
    <section id="contact">
        <h1 class="section-title">Контактувати<div class="line"></div></h1>
        <!-- <form action="mailto:contact.yarosh@gmail.com" method="post" enctype="text/plain"> -->
        <form action="./static/mail.inc.php" method="post" enctype="text/plain">
            <label for="subject-select">Тема (натисни)</label><br>
            <select name="subject" id="subject-select">
                <option value="photosession">Запис на фотосесію</option>
                <option value="order-of-design">Замовлення дизайну</option>
                <option value="lesson-arrangament">Запис на урок</option>
                <option value="other">Інше</option>
            </select><br>

            <label for="name-inp">Твоє імʼя</label><br>
            <input placeholder="Введи імʼя..." type="text" id="name-inp" name="name" required><br>

            <label for="email-inp">Твій email</label><br>
            <input placeholder="Введи email..." type="email" id="email-inp" name="email" required><br>

            <label for="message-inp">Повідомлення (необовʼязково)</label><br>
            <textarea placeholder="Введи повідомлення..." name="message" id="message-inp" rows="4"></textarea><br>

            <button class="brand-btn" type="submit">Надіслати</button>
        </form>
    </section>
    <footer>
        <p class="copy">&copy; 2024 Yarosh</p>
        <p class="watermark">Created by <a href="https://impreent.com">Impreent</a></p>
    </footer>
</body>
</html>