<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($username) || empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Minden mezőt ki kell tölteni.']);
        exit;
    }

    // Jelszó hashelése
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Adatok beszúrása
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$username, $email, $hashedPassword]);

        echo json_encode(['success' => true, 'message' => 'Sikeres regisztráció.']);
        exit;
    } catch (PDOException $e) {
        // SQL hibakód ellenőrzése
        if ($e->getCode() === '23000') { // Egyedi kulcs megsértése
            $message = strpos($e->getMessage(), 'username') !== false
                ? 'Ez a felhasználónév már regisztrálva van.'
                : 'Ez az email már regisztrálva van.';
            echo json_encode(['success' => false, 'message' => $message]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Hiba történt a regisztráció során.']);
        }
    }
}
?>
