<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $machine_id = $_GET['machine_id'] ?? null;
    $date = $_GET['date'] ?? date('Y-m-d'); 

    if (!$machine_id) {
        echo json_encode(['success' => false, 'message' => 'Mosógép azonosító szükséges.']);
        exit;
    }
}
?>
