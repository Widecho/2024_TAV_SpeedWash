<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/main.js" defer></script>
</head>
<body>
    <header>
        <h1>Felhasználói Bejelentkezés</h1>
        <?php include '../api/nav.php'; ?>
    </header>
    <main>
        <form id="login-form">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Jelszó:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Bejelentkezés</button>
        </form>
        <p id="response-message"></p>
    </main>
    
</body>
</html>
