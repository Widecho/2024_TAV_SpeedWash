<?php
require 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $machine_id = $_POST['machine_id'] ?? null;
    $start_time = $_POST['start_time'] ?? null;

    // Ellenőrzés: minden szükséges mező kitöltése
    if (!$machine_id || !$start_time || !strtotime($start_time)) {
        echo json_encode([
            'success' => false,
            'message' => 'Hibás vagy hiányzó mezők. Ellenőrizze az adatokat!'
        ]);
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
        $stmt->execute([
            $machine_id,
            $start_time,
            $start_time,
            $end_time,
            $start_time,
            $end_time
        ]);
        $conflicts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Ha ütközés van, hibaüzenet visszaadása
        if ($conflicts) {
            echo json_encode([
                'success' => false,
                'message' => 'Ez az időpont már foglalt.'
            ]);
            exit;
        }

        // Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
        if (!isset($_SESSION['user_id'])) {
            echo json_encode([
                'success' => false,
                'message' => 'Bejelentkezés szükséges a foglaláshoz.'
            ]);
            exit;
        }

        // Foglalás beszúrása az adatbázisba
        $stmt = $pdo->prepare("
            INSERT INTO reservations (machine_id, user_id, start_time, end_time)
            VALUES (?, ?, ?, ?)
        ");
        $stmt->execute([
            $machine_id,
            $_SESSION['user_id'],
            $start_time,
            $end_time
        ]);

        // Sikeres foglalás
        echo json_encode([
            'success' => true,
            'message' => 'Foglalás sikeresen létrehozva.'
        ]);
    } catch (PDOException $e) {
        // Hibakezelés pontos hibaüzenettel
        echo json_encode([
            'success' => false,
            'message' => 'Hiba történt a foglalás során: ' . $e->getMessage()
        ]);
    }
}
?>
