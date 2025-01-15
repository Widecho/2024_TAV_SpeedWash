<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
?>

<nav>
    <ul>
        <li><a href="index.php">Kezdőlap</a></li>
        <?php if ($isLoggedIn): ?>
            <li><a href="machines.php">Mosógépek</a></li>
            <li><a href="booking.php">Foglalás</a></li>
            <li><a href="my_reservations.php">Foglalásaim</a></li>
            <li><a href="../api/logout.php">Kijelentkezés</a></li>
        <?php else: ?>
            <li><a href="login.php">Bejelentkezés</a></li>
            <li><a href="register.php">Regisztráció</a></li>            
        <?php endif; ?>
    </ul>
</nav>
