<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Érvénytelen kérés.']);
    exit;
}

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Bejelentkezés szükséges.']);
    exit;
}

$reservation_id = $_POST['reservation_id'] ?? null;

if (!$reservation_id) {
    echo json_encode(['success' => false, 'message' => 'Foglalás azonosító szükséges.']);
    exit;
}

try {
    $user_id = $_SESSION['user_id'];

    // Ellenőrizzük, hogy a foglalás a bejelentkezett felhasználóhoz tartozik-e
    $stmt = $pdo->prepare("DELETE FROM reservations WHERE id = ? AND user_id = ?");
    $stmt->execute([$reservation_id, $user_id]);

    if ($stmt->rowCount() > 0) {
        echo json_encode(['success' => true, 'message' => 'Foglalás sikeresen törölve.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Foglalás törlése sikertelen.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Hiba történt a foglalás törlése során.']);
}
?>
