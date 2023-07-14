<?php
function sortArray($numbers) {
    sort($numbers);
    return $numbers;
}

$input = [9, 2, 7, 4, 1, 5, 8, 3, 6];
$output = sortArray($input);
echo "Sorted array: " . implode(', ', $output);
?>