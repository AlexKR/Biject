## Biject 

Simple implementation one-to-one correspondence function on PHP.

## Code Example

Encoding:
```
$bijection = new AlexKR\Biject\Bijection();
$result = $bijection->encode(42); //q
```

Decoding:
```
$bijection = new AlexKR\Biject\Bijection();
$result = $bijection->decode('iq'); //512
```

Change alphabet:

```
$bijection = new AlexKR\Biject\Bijection('0123456789');
$result = $bijection->encode(17); //17
```

## Installation

Install via Composer:

```
composer require alexkr/Biject
```

## License

Biject is licensed under the MIT License