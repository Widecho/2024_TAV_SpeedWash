<?php
require 'db.php';

try {
    // Lekérjük az összes mosógépet és foglalásukat
    $stmt = $pdo->query("
        SELECT m.id AS machine_id, m.name AS machine_name, 
               r.start_time, r.end_time
        FROM machines m
        LEFT JOIN reservations r ON m.id = r.machine_id
        ORDER BY m.id, r.start_time
    ");
    $machines = [];
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
        $machine_id = $row['machine_id'];
        if (!isset($machines[$machine_id])) {
            $machines[$machine_id] = [
                'id' => $machine_id,
                'name' => $row['machine_name'],
                'reservations' => []
            ];
        }
        if ($row['start_time'] && $row['end_time']) {
            $machines[$machine_id]['reservations'][] = [
                'start_time' => $row['start_time'],
                'end_time' => $row['end_time']
            ];
        }
    }
    echo json_encode(array_values($machines));
} catch (PDOException $e) {
    echo json_encode(['error' => 'Hiba történt az adatok lekérése során.']);
}
?>
