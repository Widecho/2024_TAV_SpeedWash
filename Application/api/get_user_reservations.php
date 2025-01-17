<?php
require 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Bejelentkezés szükséges.']);
    exit;
}

try {
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("
        SELECT r.id AS reservation_id, r.start_time, r.end_time, m.name AS machine_name
        FROM reservations r
        JOIN machines m ON r.machine_id = m.id
        WHERE r.user_id = ?
        ORDER BY r.start_time
    ");
    $stmt->execute([$user_id]);
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['success' => true, 'reservations' => $reservations]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Hiba történt a foglalások lekérése során.']);
}
?>
