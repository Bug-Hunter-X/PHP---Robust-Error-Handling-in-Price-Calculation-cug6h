```php
function calculate_total($items) {
  $total = 0;
  $errors = [];
  foreach ($items as $item) {
    if (!is_numeric($item['price'])) {
      $errors[] = "Invalid price format for item '" . $item['name'] . "' (price: " . $item['price'] . ")";
    } else {
      $total += $item['price'];
    }
  }
  if (!empty($errors)) {
    return "Errors encountered:
" . implode("\n", $errors);
  } else {
    return $total;
  }
}

$items = [
  ['name' => 'Item A', 'price' => 10],
  ['name' => 'Item B', 'price' => '20.50'],
  ['name' => 'Item C', 'price' => 'thirty']
];

$total = calculate_total($items);
echo "Total: " . $total;
```