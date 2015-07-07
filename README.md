## Biject 

Simple implementation one-to-one correspondence function on PHP.

Build status: [![Build Status](https://travis-ci.org/AlexKR/Biject.svg?branch=travis-ci)](https://travis-ci.org/AlexKR/Biject)

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