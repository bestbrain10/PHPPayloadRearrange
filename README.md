# PHPPayloadRearrange
Rearranges payload

```php
<?php
$data = [
  'name' => [
    'livinus',
    'Igbaji',
    'Dude',
    'Ada'
  ],
  'age' => [
      12,23,54,22
  ],
  'laptop' => [
    'HP', 'DELL',
    'Apple','SONY'
  ]
];


arrange($data);



/*
Array
(
    [0] => Array
        (
            [name] => livinus
            [age] => 12
            [laptop] => HP
        )

    [1] => Array
        (
            [name] => Igbaji
            [age] => 23
            [laptop] => DELL
        )

    [2] => Array
        (
            [name] => Dude
            [age] => 54
            [laptop] => Apple
        )

    [3] => Array
        (
            [name] => Ada
            [age] => 22
            [laptop] => SONY
        )

)
*/
```
