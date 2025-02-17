```php
function calculate_total($items) {
  $total = 0;
  foreach ($items as $item) {
    if (!is_numeric($item['price'])) {
      // Handle non-numeric price values more gracefully
      return 'Error: Invalid price format';
    }
    $total += $item['price'];
  }
  return $total;
}

$items = [
  ['name' => 'Item A', 'price' => 10],
  ['name' => 'Item B', 'price' => '20.50'],
  ['name' => 'Item C', 'price' => 'thirty']
];

$total = calculate_total($items);
echo "Total: " . $total;
```