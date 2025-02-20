```php
function processData(array $data): array {
    $result = [];
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            $result[$key] = processData($value); // Recursive call
        } elseif (is_string($value) && strpos($value, '|') !== false) {
            $result[$key] = explode('|', $value);
        } else {
            $result[$key] = $value;
        }
    }
    return $result;
}

$data = [
    'name' => 'John Doe',
    'address' => '123 Main St|Anytown|CA 91234',
    'phone' => '555-1212',
    'details' => [
        'city' => 'Anytown',
        'state' => 'CA',
        'zip' => '91234',
    ],
];

$processedData = processData($data);
print_r($processedData);
```