```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number; // Potential error: What if $number is not numeric?
  }
  return $sum;
}

$numbers = [1, 2, 'a', 4, 5];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Unexpected result due to type juggling
```