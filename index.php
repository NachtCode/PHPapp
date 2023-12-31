<?php
echo "Hello, OpenShift!";

// Simulate some time-consuming operations
for ($i = 0; $i < 1000000; $i++) {
    // Some CPU-intensive operation
    $result = sqrt($i);
    
    // Introduce some delay to simulate time-consuming operations
    usleep(10);
}

echo "Build completed!";
?>
