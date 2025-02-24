```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately (e.g., log an error, skip, or throw exception)
      trigger_error('Non-numeric value encountered in array: ' . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 'a', 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // More predictable behavior
```