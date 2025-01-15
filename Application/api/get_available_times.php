<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $machine_id = $_GET['machine_id'] ?? null;
    $date = $_GET['date'] ?? date('Y-m-d'); 

    if (!$machine_id) {
        echo json_encode(['success' => false, 'message' => 'Mosógép azonosító szükséges.']);
        exit;
    }
    $current_time = strtotime('now');
    $next_quarter = ceil($current_time / (15 * 60)) * (15 * 60);
    $start_of_day = max($next_quarter, strtotime("$date 00:00:00"));
    $end_of_day = strtotime("$date 23:59:59");
    $duration_seconds = 3600; // Egyórás időtartam
}
?>
