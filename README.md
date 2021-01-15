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
echo $string->UniqueString();

?>
// NTI2XzE2MTA2ODgxNDJfNDM4
// OTgyXzE2MTA2ODgxNDJfMTUy
// NTAzXzE2MTA2ODgxNDJfODc=

<?php

require __DIR__ . '/vendor/autoload.php';

use Unique\String\Generator\UniqueStringGenerator;

$string = new UniqueStringGenerator();
echo $string->UniqueNumber();

?>
// 8701610688142513
// 1821610688142790
// 1711610688142990

<?php

require __DIR__ . '/vendor/autoload.php';

use Unique\String\Generator\UniqueStringGenerator;

$string = new UniqueStringGenerator();
echo $string->UniqueStringId();

?>
// MjMy-MTYxMDY4ODE0Mg==-OTM5
// MzUx-MTYxMDY4ODE0Mg==-ODM5
// NDEw-MTYxMDY4ODE0Mg==-MjQ1

<?php

require __DIR__ . '/vendor/autoload.php';

use Unique\String\Generator\UniqueStringGenerator;

$string = new UniqueStringGenerator();
echo $string->UniqueNumberId();

?>
// 583-1610688142-795
// 6-1610688142-312
// 453-1610688142-657

```

***
## License

[MIT](LICENSE)

***