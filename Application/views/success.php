<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sikeres Regisztráció</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Regisztráció sikeres!</h1>
        <?php include '../api/nav.php'; ?>
    </header>
    <main>
        <p>Gratulálunk! Sikeresen regisztráltál a SpeedWash rendszerébe!</p>
        <p>Most már <a href="login.php">bejelentkezhetsz</a>, vagy visszatérhetsz a főoldalra.</p>
        <button onclick="window.location.href='index.php';">Vissza a főoldalra</button>
    </main>
</body>
</html>