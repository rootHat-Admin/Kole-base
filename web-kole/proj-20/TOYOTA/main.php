<?php
session_start();

function getButtonLink($car) {
    if (!empty($_SESSION['user_id'])) {
        return "order.php?car=" . urlencode($car);
    } else {
        return "register.php";
    }
}
?>

<section id="hero">
    <h1>TOYOTA автосалонына қош келдіңіз!</h1>
    <p>Ең жоғары сапалы автомобильдермен танысыңыз.</p>
</section>


<div id="product" class="main-container">
    <div class="container">

        <div class="card">
            <a href="#"><img src="images/corolla-new.jpg" alt="corolla-new"></a>
            <div class="info">
                <p class="title">TOYOTA Corolla</p>
                <p class="price">13 500 000 тг</p>
                <a href="<?= getButtonLink('TOYOTA Corolla') ?>" class="order-btn">Тапсырыс беру</a>
            </div>
        </div>

        <div class="card">
            <a href="#"><img src="images/camry.jpg" alt="camry"></a>
            <div class="info">
                <p class="title">TOYOTA Camry</p>
                <p class="price">26 500 000 тг</p>
                <a href="<?= getButtonLink('TOYOTA Camry') ?>" class="order-btn">Тапсырыс беру</a>
            </div>
        </div>

        <div class="card">
            <a href="#"><img src="images/rav4-new2.jpg" alt="rav4"></a>
            <div class="info">
                <p class="title">TOYOTA RAV4</p>
                <p class="price">22 500 000 тг</p>
                <a href="<?= getButtonLink('TOYOTA RAV4') ?>" class="order-btn">Тапсырыс беру</a>
            </div>
        </div>

        <div class="card">
            <a href="#"><img src="images/highlander.jpg" alt="highlander"></a>
            <div class="info">
                <p class="title">TOYOTA Highlander</p>
                <p class="price">30 000 000 тг</p>
                <a href="<?= getButtonLink('TOYOTA Highlander') ?>" class="order-btn">Тапсырыс беру</a>
            </div>
        </div>

        <div class="card">
            <a href="#"><img src="images/hilux-new2.jpg" alt="hilux"></a>
            <div class="info">
                <p class="title">TOYOTA Hilux</p>
                <p class="price">27 000 000 тг</p>
                <a href="<?= getButtonLink('TOYOTA Hilux') ?>" class="order-btn">Тапсырыс беру</a>
            </div>
        </div>

        <div class="card">
            <a href="#"><img src="images/lc250-new2.png" alt="lc250"></a>
            <div class="info">
                <p class="title">TOYOTA Land Cruiser 250</p>
                <p class="price">45 000 000 тг</p>
                <a href="<?= getButtonLink('TOYOTA Land Cruiser 250') ?>" class="order-btn">Тапсырыс беру</a>
            </div>
        </div>

        <div class="card">
            <a href="#"><img src="images/lc300.jpg" alt="lc300"></a>
            <div class="info">
                <p class="title">TOYOTA Land Cruiser 300</p>
                <p class="price">65 000 000 тг</p>
                <a href="<?= getButtonLink('TOYOTA Land Cruiser 300') ?>" class="order-btn">Тапсырыс беру</a>
            </div>
        </div>

    </div>
</div>

<section id="about">
    <h2>Біз туралы</h2>
    <div class="about-item">
        <div class="about-text">
            <p>Біздің компаниямыз TOYOTA автомобильдерін ұсынып, сенімділік, заманауи дизайн және озық технологияларды үйлестіруді басты мақсат етеді. Біз әрбір клиентке жеке қызмет көрсетіп, олардың талаптары мен қалауларын ескереміз. Біздің командамыз автомобиль нарығында ұзақ тәжірибеге ие, және біз ең жаңа модельдер мен инновациялық шешімдерді ұсынуға дайынбыз.</p>
        </div>
        <div class="about-image">
            <img src="images/TOYOTA-auto.png" alt="TOYOTA автосалоны">
        </div>
    </div>

    <div class="about-item reverse">
        <div class="about-text">
            <p>TOYOTA брендінің тарихы ұзақ жылдарға созылған, және ол автомобиль өндірісінде сенімділік пен сапаның символына айналды. Біздің автокөліктеріміз тек қана көркем әрі стильді емес, сонымен қатар қауіпсіздік пен қолайлылықты қамтамасыз етеді. Біз клиенттерімізге толық сервис, техникалық қызмет көрсету және кеңес беруді ұсынамыз.</p>
        </div>
        <div class="about-image">
            <img src="images/TOYOTA-tech.png" alt="TOYOTA технологиялары">
        </div>
    </div>

    <div class="about-item">
        <div class="about-text">
            <p>Біздің миссиямыз – әрбір клиенттің қажеттілігін түсініп, оларға ең сапалы автомобильдерді жеткізу. Біз тек жаңа және тексерілген автокөліктерді ұсынамыз, олардың әрқайсысы заманауи стандарттарға сай келеді. Клиенттеріміздің сенімділігі біз үшін басты көрсеткіш болып табылады.</p>
        </div>
        <div class="about-image">
            <img src="images/TOYOTA-w.jpg" alt="TOYOTA жолда">
        </div>
    </div>
</section>
