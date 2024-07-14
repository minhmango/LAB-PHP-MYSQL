<!DOCTYPE html>
<html>
<body>
<?php
function calculateSumAndAverage($a, $b, $c) {
    $sum = $a + $b + $c;
    $average = $sum / 3;
    return array('sum' => $sum, 'average' => $average);
}

$numbers = array(5, 10, 15);
$result = calculateSumAndAverage($numbers[0], $numbers[1], $numbers[2]);

echo "Sum of {$numbers[0]}, {$numbers[1]}, and {$numbers[2]} is: " . $result['sum'] . "<br>";
echo "Average of {$numbers[0]}, {$numbers[1]}, and {$numbers[2]} is: " . $result['average'];
?>
</body>
</html>