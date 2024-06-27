<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['arrivedAt']) && isset($_POST['leavedAt'])) {
        $arrivedAt = $_POST['arrivedAt'];
        $leavedAt = $_POST['leavedAt'];

        $arrivedAtTime = strtotime($arrivedAt);
        $leavedAtTime = strtotime($leavedAt);

        if ($arrivedAtTime && $leavedAtTime) {
            $difference = $leavedAtTime - $arrivedAtTime;
            $hours = floor($difference / 3600);
            $minutes = floor(($difference % 3600) / 60);

            echo sprintf('%02d:%02d', $hours, $minutes);
        } else {
            echo "Vaqt formati noto'g'ri.";
        }
    } else {
        echo "Iltimos, kelish va ketish vaqtlarini ko'rsating.";
    }
} else {
    echo "So'rov usuli noto'g'ri.";
}
