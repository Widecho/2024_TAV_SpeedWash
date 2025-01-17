<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foglalás</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/main.js" defer></script>
</head>
<body>
    <header>
        <h1>Foglalás</h1>
        <?php include '../api/nav.php'; ?>
    </header>
    <main>
        <form id="reservation-form">
            <label for="machine_id">Válassz mosógépet:</label>
            <select id="machine_id" name="machine_id" required>
            </select>

            <label for="date">Dátum:</label>
            <input type="date" id="date" name="date" value="<?= date('Y-m-d') ?>" min="<?= date('Y-m-d') ?>" required>

            <label for="start_time">Válassz kezdési időpontot:</label>
            <select id="start_time" name="start_time" required>
            </select>
            <button type="submit">Foglalás</button>
        </form>

        <p id="response-message"></p>
    </main>
</body>
</html>