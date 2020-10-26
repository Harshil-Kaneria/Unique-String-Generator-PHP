# Unique-String-Generator

A PHP for Generating 99.9% a Random String.

***
## Why You Can Use This

- Does Not Matter How Many User Users You Have This Function Generate All Time New String.

- You Can Use This Package on The Server Side as Well as The Client Side.

***
## Where You Can Use This

- You Can Use this for multi-purpose like a one-time session, email verification, preuserid , activation code, and many more applications.

***
## Installation

```bash
$ composer require
```

***
## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Unique\String\Generator\UniqueStringGenerator;

$string = new UniqueStringGenerator();
echo $string->getstring();

?>
// 'NjAyXzE1OTkxNDc3ODMxMDdfMjA0'
// 'OTU5XzE1OTkxNDc3ODQxMTZfMTE2'
// 'MjE3XzE1OTkxNDc3ODUxMTVfNTQ5'
```

***
## License

[MIT](LICENSE)

***