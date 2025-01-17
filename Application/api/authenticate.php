<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo json_encode(['success' => false, 'message' => 'Minden mezőt ki kell tölteni.']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("SELECT id, password FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            echo json_encode(['success' => true, 'message' => 'Sikeres bejelentkezés.']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Érvénytelen email vagy jelszó.']);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Hiba történt a bejelentkezés során.']);
    }
}
?>
