# Mealy Machines

This repository contains a collection of Mealy machine implementations in PHP for performing various arithmetic operations.

## Contents

- `mealy_sum.php`: A Mealy machine implementation for adding multiple base-10 numbers separated by a plus operator.
- `mealy_minus.php`: A Mealy machine implementation for subtracting multiple base-10 numbers separated by a minus operator.
- `mealy_binary_sum.php`: A Mealy machine implementation for adding two binary numbers.
- `mealy_binary_minus.php`: A Mealy machine implementation for subtracting two binary numbers.

## Usage

Each Mealy machine implementation can be used by calling the corresponding function and passing in the inputs as a string. The function will return the result of the arithmetic operation as a string or integer, depending on the specific implementation.

For example, to use the mealy_sum implementation:

```php
$inputs = "11+22+33";
echo mealy_sum($inputs) . PHP_EOL; // 66
```

To use the mealy_minus implementation:
```php
$inputs = "100-50-25";
echo mealy_minus($inputs) . PHP_EOL; // 25
```

To use the mealy_binary_sum implementation:

```php
$inputs = "1110 + 1011";
echo mealy_binary_sum($inputs) . PHP_EOL; // 1001
```

To use the mealy_binary_minus implementation:

```php
$inputs = "1110 - 1011";
echo mealy_binary_minus($inputs) . PHP_EOL; // 0011
```

## Contributing

If you'd like to contribute to this repository, feel free to submit a pull request with your changes. Please make sure to follow the existing code style and document any new functionality clearly in the code and in the README.

## License

This project is licensed under the GPL-v3.0 License.

Copyright 2023, Max Base
