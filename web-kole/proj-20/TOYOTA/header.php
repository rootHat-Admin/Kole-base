<?php
session_start();

?>


<div class="navbar">
    <a href=""> <img src="images/Toyota_logo.png" alt="logo" class="logo"> </a>
    <div class="drop">
        <button class="nav-btn">&#9776;</button>
        <div class="nav-list">
            <a href="#hero">Басты бет</a>
            <a href="#product">Қызметтер</a>
            <a href="#about">Біз туралы</a>

            <?php if (!empty($_SESSION['user_id'])): ?>
                <a href="profile.php" class="btn-profile">Профиль</a>
                <a href="logout.php" class="btn-logout">Шығу</a>
            <?php else: ?>
                <a href="register.php" class="btn-login">Кіру</a>
            <?php endif; ?>
        </div>
    </div>
</div>