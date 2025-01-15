<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $machine_id = $_POST['machine_id'] ?? null;
    $start_time = $_POST['start_time'] ?? null;

    if (!$machine_id || !$start_time) {
        echo json_encode(['success' => false, 'message' => 'Minden mezőt ki kell tölteni.']);
        exit;
    }

    // Számoljuk ki az egyórás időtartam végét
    $end_time = date('Y-m-d H:i:s', strtotime($start_time) + 3600);

    try {
        // Ellenőrizzük, hogy az adott időpontban már létezik-e foglalás
        $stmt = $pdo->prepare("
            SELECT * FROM reservations 
            WHERE machine_id = ? AND (
                (? BETWEEN start_time AND end_time) OR
                (start_time BETWEEN ? AND ?) OR
                (end_time BETWEEN ? AND ?)
            )
        ");
        $stmt->execute([$machine_id, $start_time, $start_time, $end_time, $start_time, $end_time]);
        $conflicts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($conflicts) {
            echo json_encode(['success' => false, 'message' => 'Ez az időpont már foglalt.']);
            exit;
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Hiba történt a foglalás során.']);
    }
}
?>
