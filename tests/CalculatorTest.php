<?php
require_once __DIR__ . '/../calculator.php';

if (add(2, 3) !== 5) {
    echo "Test failed";
    exit(1);
}

echo "Test passed";
