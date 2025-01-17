<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $machine_id = $_GET['machine_id'] ?? null;
    $date = $_GET['date'] ?? date('Y-m-d'); // Alapértelmezés: mai nap

    if (!$machine_id) {
        echo json_encode(['success' => false, 'message' => 'Mosógép azonosító szükséges.']);
        exit;
    }

    try {
        $current_time = strtotime('now');
        $next_quarter = ceil($current_time / (15 * 60)) * (15 * 60);
        $start_of_day = max($next_quarter, strtotime("$date 00:00:00"));
        $end_of_day = strtotime("$date 23:59:59");
        $duration_seconds = 3600; // Egyórás időtartam

        // Lekérjük a kiválasztott dátum foglalásait
        $stmt = $pdo->prepare("
            SELECT start_time, end_time 
            FROM reservations 
            WHERE machine_id = ? AND start_time BETWEEN ? AND ?
            ORDER BY start_time
        ");
        $stmt->execute([$machine_id, date('Y-m-d H:i:s', $start_of_day), date('Y-m-d H:i:s', $end_of_day)]);
        $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $available_times = [];
        $interval = 15 * 60; // 15 perc lépték
        $last_end_time = $start_of_day;

        foreach ($reservations as $reservation) {
            $reservation_start = strtotime($reservation['start_time']);
            $reservation_end = strtotime($reservation['end_time']);

            // Szabad időpontok a meglévő foglalások között
            while ($last_end_time + $duration_seconds <= $reservation_start) {
                if ($last_end_time + $duration_seconds <= $reservation_start) {
                    $available_times[] = date('Y-m-d H:i:s', $last_end_time);
                }
                $last_end_time += $interval;
            }

            $last_end_time = max($last_end_time, $reservation_end);
        }

        // Szabad időpontok a nap végéig
        while ($last_end_time + $duration_seconds <= $end_of_day) {
            $available_times[] = date('Y-m-d H:i:s', $last_end_time);
            $last_end_time += $interval;
        }

        echo json_encode(['success' => true, 'available_times' => $available_times]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Hiba történt az adatok lekérése során.']);
    }
}
?>
